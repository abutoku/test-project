<?php

namespace App\Providers;

use Illuminate\support\Facades\Gate;
use App\Models\User;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Gateの記述
        Gate::define('test', function (User $user) {
            if($user->id === 1){
                return true;
            }
            return false;
        });
    }
}
