<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Models\Amin' => 'App\Policies\AdminPolicy',
         'App\Models\Inspector' => 'App\Policies\InspectorPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-privilege', function ($user) {
            return $user->isAdmin;
        });

        Gate::define('user-privilege', function ($user, $role) {
            return $user->id == $role->user_id;
        });
    }
}
