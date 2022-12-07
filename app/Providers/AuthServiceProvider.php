<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
// use Illuminate\Auth\Access\Gate as GateContract;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isHeadOffice',function($user){
            return $user->user_type == 'head-office';
        });

        $gate->define('isManager',function($user){
            return $user->user_type == 'manager';
        });

        $gate->define('isCustomer',function($user){
            return $user->user_type == 'customer';
        });

        //
    }
}
