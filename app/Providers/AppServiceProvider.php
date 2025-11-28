<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Country;
use App\Models\Favicon;
use App\Models\Service;
use App\Models\Category;
use App\Models\University;
use App\Models\SiteSetting;
use App\Models\Testimonial;
use App\Models\BlogPostsCategory;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // $favicon = Favicon::latest()->first();
        // View::share('favicon', $favicon);

        //FAVICON for ALL PAGES (guard table existence)
        $favicon = null;
        if (Schema::hasTable('favicons')) {
            $favicon = Favicon::first();
        }
        View::share('favicon', $favicon);

        //SITESETTING for ALL PAGES (guard table existence)
        $sitesetting = null;
        if (Schema::hasTable('site_settings')) {
            $sitesetting = SiteSetting::first();
        }
        View::share('sitesetting', $sitesetting);




        // View::composer('frontend.includes.topnav', function ($view) {
        //     $sitesetting = SiteSetting::first();

        //     $view->with('sitesetting', $sitesetting);

        // });




        //Global variable for Navbar
        View::composer('frontend.includes.navbar', function ($view) {
            $countries = Country::all();
            $testimonials = Testimonial::all();
            $courses = Course::all();
            $categories = Category::all();
            $blogpostcategories = BlogPostsCategory::all();
            $guides = Category::where('title', 'Import/Export Guide')->first()->posts;
         
            $sitesetting = SiteSetting::first();

            $view->with('countries', $countries);
            $view->with('testimonials', $testimonials);
            $view->with('courses', $courses);
            $view->with('categories', $categories);
            $view->with('blogpostcategories', $blogpostcategories);
            $view->with('guides', $guides);
     
            $view->with('sitesetting', $sitesetting);
        });

        ////Global variable for Footer
        view()->composer('frontend.includes.footer', function ($view) {
            $sitesetting = SiteSetting::first();
          
            $newsCategory = Category::where('title', 'News')->first();

            $services = Service::all();
            $courses = Course::all();
            $siteSettings = SiteSetting::first();


            $view->with('sitesetting', $sitesetting);
           
            $view->with('newsCategory', $newsCategory);
   
            $view->with('services', $services);
            $view->with('courses', $courses);
            $view->with('siteSettings', $siteSettings);
        });
    }

}
