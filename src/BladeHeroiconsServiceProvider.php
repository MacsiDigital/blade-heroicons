<?php

namespace MacsiDigital\BladeHeroicons;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeHeroiconsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadPublishable()
            ->loadViews();
    }

    public function register(): void
    {
        $this->mergeConfigs();
    }

    public function mergeConfigs(): self
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'blade.heroicons');
        return $this;
    }

    public function loadViews()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', config('blade.heroicons.prefix'));
    }

    public function loadPublishable(): self
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('blade/heroicons.php'),
            ], 'blade-heroicons-config');
        }
        return $this;
    }

}
