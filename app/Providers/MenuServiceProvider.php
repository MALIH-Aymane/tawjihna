<?php

namespace App\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $rolePrefix = 'Student'; // valeur par défaut

        // Génère les bons chemins de fichiers selon le rôle
        $verticalAdminMenuPath = base_path("resources/views/dashboard/menu/verticalAdminMenu.json");
        $verticalStudentPath = base_path("resources/views/dashboard/menu/verticalAdminMenu.json");

        // Charge les données (avec protection si fichiers manquants)
        $verticalAdminMenuData = file_exists($verticalAdminMenuPath) ? json_decode(file_get_contents($verticalAdminMenuPath)) : [];
        $verticalStudentMenuPath = file_exists($verticalStudentPath) ? json_decode(file_get_contents($verticalStudentPath)) : [];

        // Partager aux vues
        $this->app->make('view')->share('menuData', [$verticalAdminMenuData, $verticalStudentMenuPath]);
    }
}
