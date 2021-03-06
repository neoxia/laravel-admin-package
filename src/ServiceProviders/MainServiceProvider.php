<?php

namespace LaravelAdminPackage\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use LaravelAdminPackage\Routing\Router;

class MainServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->installPackage();
        $this->extendsRouter();
        $this->registerRoutes();
        $this->registerViewHelpers();
        $this->registerSwal();
        $this->registerMenu();
        $this->registerPermission();
    }

    private function installPackage()
    {
        $this->app->register(InstallationServiceProvider::class);
    }

    private function extendsRouter()
    {
        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });
    }

    private function registerRoutes()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    private function registerViewHelpers()
    {
        $this->app->register(ViewHelpersServiceProvider::class);
    }

    private function registerSwal()
    {
        $this->app->register(\UxWeb\SweetAlert\SweetAlertServiceProvider::class);
    }

    private function registerMenu()
    {
        $this->app->register(\Spatie\Menu\Laravel\MenuServiceProvider::class);
    }

    private function registerPermission()
    {
        $this->app->register(\Spatie\Permission\PermissionServiceProvider::class);
    }
}
