<?php

namespace App\Providers;

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

        if (Auth::check()) {
            $userRole = Auth::user()->role;

            if (strtolower($userRole) === 'admin') {
                $rolePrefix = 'Admin';
            } elseif (strtolower($userRole) === 'student') {
                $rolePrefix = 'Student';
            }
            // Tu peux ajouter d'autres rôles ici si besoin
        }

        // Génère les bons chemins de fichiers selon le rôle
        $verticalMenuPath = base_path("resources/views/dashboard/menu/vertical{$rolePrefix}Menu.json");
        $horizontalMenuPath = base_path("resources/views/dashboard/menu/horizontal{$rolePrefix}Menu.json");

        // Charge les données (avec protection si fichiers manquants)
        $verticalMenuData = file_exists($verticalMenuPath) ? json_decode(file_get_contents($verticalMenuPath)) : [];
        $horizontalMenuData = file_exists($horizontalMenuPath) ? json_decode(file_get_contents($horizontalMenuPath)) : [];

        // Partager aux vues
        $this->app->make('view')->share('menuData', [$verticalMenuData, $horizontalMenuData]);
    }
}
