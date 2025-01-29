<?php

namespace App\Filament\Blocks;

class TextInputFormFieldBlock extends FormFieldBlock
{
    public ?string $icon = 'heroicon-m-minus';

    public static function type(): string
    {
        return 'text_input';
    }

    public function fields(): array
    {
        return [];
    }
}
