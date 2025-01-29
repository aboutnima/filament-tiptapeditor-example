<?php

namespace App\Filament\Blocks;

class UrlFormFieldBlock extends FormFieldBlock
{
    public string $rendered = 'blocks.submissions.url';

    public ?string $label = 'URL';

    public ?string $icon = 'heroicon-m-link';

    public static function type(): string
    {
        return 'url';
    }

    public function fields(): array
    {
        return [];
    }
}
