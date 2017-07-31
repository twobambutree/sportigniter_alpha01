<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\PlaybookPolicy;
use App\Models\Sport\Playbook;
use App\Models\Video\Video;

/**
 * Class AuthServiceProvider.
 */
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
      //'App\Model' => 'App\Policies\ModelPolicy',
      //'App\Models\Sport\Playbook' => 'App\Policies\PlaybookPolicy',
      //'App\Models\Video\Video' => 'App\Policies\VideoPolicy',
      Playbook::class => PlaybookPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
