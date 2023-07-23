<?php

namespace App\Providers;

use Native\Laravel\Enums\RolesEnum;
use Native\Laravel\Menu\Menu;
use Native\Laravel\Facades\MenuBar;
use Native\Laravel\Menu\Items\Role;

class NativeAppServiceProvider
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
        MenuBar::create()
            ->icon(public_path('images/menuBarIconTemplate@2x.png'))
            ->url('/')->showDockIcon()->withContextMenu(
                Menu::new()
                    ->link(config('nativephp.deeplink_scheme').'://refresh', 'Refresh', 'CmdOrCtrl+R')
                    ->separator()
                    ->link('https://larajobs.com', 'View LaraJobs.com')
                    ->link('https://larajobs.com/create', 'Post a Job')
                    ->link('https://larajobs.com/laravel-consultants', 'Hire a Laravel Consultant')
                    ->separator()
                    ->add(new Role(RolesEnum::QUIT, 'Quit LaraJobs'))
            );
    }
}
