<?php

namespace AhmedAbdelrhman\FilamentMediaGallery;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentMediaGalleryPlugin implements Plugin
{
    public static function make(): static
    {
        return app(static::class);
    }

    public function getId(): string
    {
        return 'filament-media-gallery';
    }

    public function register(Panel $panel): void {}

    public function boot(Panel $panel): void {}
}
