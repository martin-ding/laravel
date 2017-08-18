<?php

namespace App\Providers;

use App\Billing\Stripe;
use Illuminate\Support\ServiceProvider;
use Psy\Util\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer("posts.sidebar",function($view){
            $view->with("archives",\App\Post::getArchives());
            $view->with("tags",\App\Tag::has("posts")->pluck("name"));
        });
        // 自定义 validate
//        Validator::extend('my_custom_validator', function ($attribute, $value, $parameters, $validator) {
//            // validation logic goes here...
//        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        \App::singleton('App\Billing\Stripe',function(){
//           return new \App\Billing\Stripe(config('services.stripe.secret'));
//        });
//        $this->app->singleton(Stripe::class,function(){
//           return new Stripe(config('services.stripe.secret'));
//        });
        \App::singleton(Stripe::class,function(){
           return new Stripe(config('services.stripe.secret'));
        });

//        $api = new Stripe(config('services.stripe.secret'));
//
//        $this->app->instance('HelpSpot\API', $api);
    }
}
