<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts/front/mainnav', function($view){
            $view->with('categories', Category::orderBy('name')->get());
        });
        view()->composer('front/post/_right_featured', function ($view){
            $view->with('fetured_posts', Post::where('is_fetured', 1)
                ->where('status', 'published')
                ->limit(2)
                ->latest()
                ->get());
        });
        view()->composer('front/post/right_recent_post', function ($view){
            $view->with('recent_posts', Post::with('category', 'author')
                ->orderBy('id', 'DESC')
                ->where('status', 'published')
                ->limit(4)
                ->latest()
                ->get());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
