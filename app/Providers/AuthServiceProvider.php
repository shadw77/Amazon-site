<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Product;
use App\Policies\ProductPolicy;

use App\Models\Category;
use App\Policies\CategoryPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
        Product::class => ProductPolicy::class,
        Category::class => CategoryPolicy::class,

    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        Gate::define('is-admin', function (User $user) {
            return $user->role === "admin";
        });

        Gate::define('is-manager', function (User $user) {
            return $user->role === "manager";
        });

        Gate::define('is-emp', function (User $user) {
            return $user->role === "emp";
        });
    }
}
