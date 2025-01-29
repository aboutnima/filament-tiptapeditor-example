<?php

namespace App\Filament\Blocks;

class FormFieldBlockRegistry
{
    /**
     * @return array<class-string<FormFieldBlock>>
     */
    public static function get(): array
    {
        return [
            TextInputFormFieldBlock::class,
            UrlFormFieldBlock::class,
        ];
    }

    /**
     * @return array<string, class-string<FormFieldBlock>>
     */
    public static function keyByType(): array
    {
        return collect(static::get())
            ->mapWithKeys(fn (string $block): array => [$block::type() => $block])
            ->all();
    }
}
