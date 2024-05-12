<?php

declare(strict_types=1);

namespace BladeUI\MDIIcons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeMDIIconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-mdi-icons', []);

            $factory->add('mdi-icons', array_merge(['path' => __DIR__.'/../resources/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-mdi-icons.php', 'blade-mdi-icons');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-mdi-icons'),
            ], 'blade-mdi-icons');

            $this->publishes([
                __DIR__.'/../config/blade-mdi-icons.php' => $this->app->configPath('blade-mdi-icons.php'),
            ], 'blade-mdi-icons-config');
        }
    }
}
