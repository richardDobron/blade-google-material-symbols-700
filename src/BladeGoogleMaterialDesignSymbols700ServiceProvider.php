<?php

declare(strict_types=1);

namespace dobron\BladeMaterialSymbols;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeGoogleMaterialDesignSymbols700ServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-material-symbols-700', []);

            $factory->add('material-symbols-700', array_merge(['path' => __DIR__ . '/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/blade-material-symbols-700.php', 'blade-material-symbols-700');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-material-symbols-700'),
            ], 'blade-material-symbols-700');

            $this->publishes([
                __DIR__ . '/../config/blade-material-symbols-700.php' => $this->app->configPath('blade-material-symbols-700.php'),
            ], 'blade-material-symbols-700-config');
        }
    }
}
