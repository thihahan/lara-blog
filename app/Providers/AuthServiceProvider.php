<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
//        Gate::define("update-post", function (User $user, Post $post){
//            return $user->id == $post->user_id;
//        });
//
//        Gate::define("delete-post", function (User $user, Post $post){
//            return $user->id == $post->user_id;
//        });
//        //
    }
}
