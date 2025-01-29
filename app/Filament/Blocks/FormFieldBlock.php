<?php

namespace App\Filament\Blocks;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput as FilamentTextInput;
use FilamentTiptapEditor\TiptapBlock;

abstract class FormFieldBlock extends TiptapBlock
{
    public string $preview = 'blocks.previews.default';

    public string $rendered = 'blocks.submissions.default';

    public ?string $icon = 'heroicon-m-cube';

    abstract public static function type(): string;

    public function getFormSchema(): array
    {
        return [
            FilamentTextInput::make('label')
                ->required()
                ->string()
                ->maxLength(255),
            Checkbox::make('isRequired')
                ->label('Required'),
            ...$this->fields(),
        ];
    }

    public function getLabel(): string
    {
        return $this->label ?? (string) str(static::type())
            ->afterLast('.')
            ->kebab()
            ->replace(['-', '_'], ' ')
            ->ucfirst();
    }

    public function getIdentifier(): string
    {
        return static::type();
    }

    public function fields(): array
    {
        return [];
    }
}
