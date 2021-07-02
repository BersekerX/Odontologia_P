<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Inventario;

use App\Models\Team;
use App\Models\Paciente;

use App\Policies\TeamPolicy;
use App\Policies\PacientePolicy;
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
        Team::class => TeamPolicy::class,
        Paciente::class => PacientePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin', function (User $user)
        {
            return $user->rol == 'Administrador';
        });
    }
}
