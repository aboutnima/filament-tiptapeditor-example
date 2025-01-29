<?php

namespace App\Filament\Resources\FormResource\Pages;

use App\Filament\Resources\FormResource;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;
use FilamentTiptapEditor\Enums\TiptapOutput;
use FilamentTiptapEditor\TiptapEditor;
use App\Filament\Blocks\FormFieldBlockRegistry;

class CreateForm extends CreateRecord
{
    protected static string $resource = FormResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Repeater::make('content')
                ->schema([
                    TipTapEditor::make('personal_details')
                        ->output(TiptapOutput::Json)
                        ->blocks(FormFieldBlockRegistry::get())
                        ->tools(['bold', 'italic', 'small', '|', 'heading', 'bullet-list', 'ordered-list', 'hr', '|', 'link', 'grid', 'blocks'])
                        ->placeholder('Drag blocks here to build your form')
                        ->hiddenLabel()
                        ->columnSpanFull()
                        ->extraInputAttributes(['style' => 'min-height: 12rem;'])
                ])
                ->columnSpanFull()
        ]);
    }
}
