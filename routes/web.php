<?php

use App\Models\DirectorMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\FaviconController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontViewController;
use App\Http\Controllers\CoverImageController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VisitorBookController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\StudentDetailController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\DirectorMessageController;
use App\Http\Controllers\BlogPostsCategoryController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ParcelTrackingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Frontend routes

Route::get('/', [FrontViewController::class, 'index'])->name('index');
Route::get('/singleposts/{slug}', [FrontViewController::class, 'singlePost'])->name('SinglePost');
Route::post('/contactpage', [ContactController::class, 'store'])->name('Contact.store');

//Routes for SingleController
Route::prefix('/')->group(function () {
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::get('/contactpage', [SingleController::class, 'render_contact'])->name('Contact');
    Route::get('/aboutus', [SingleController::class, 'render_about'])->name('About');
    Route::get('/studentreviews', [SingleController::class, 'render_testimonial'])->name('Testimonial');
    Route::get('/blogpostcategories', [SingleController::class, 'render_blogpostcategory'])->name('Blogpostcategory');
    Route::get('/blogpostcategory/{slug}', [SingleController::class, 'render_singleBlogpostcategory'])->name('SingleBlogpostcategory');
    Route::get('/team', [SingleController::class, 'render_team'])->name('Team');
    Route::get('/services', [SingleController::class, 'render_service'])->name('Service');
    Route::get('/singleservice/{slug}', [SingleController::class, 'render_singleService'])->name('SingleService');
    Route::get('/gallery', [SingleController::class, 'render_gallery'])->name('Gallery');
    Route::get('/video', [SingleController::class, 'render_videos'])->name('Video');
    Route::get('/countries', [SingleController::class, 'render_Countries'])->name('Countries');
    Route::get('/singlecountry/{slug}', [SingleController::class, 'render_singleCountry'])->name('singleCountry');
    Route::get('/singleuniversity/{slug}', [SingleController::class, 'render_singleUniversity'])->name('singleUniversity');
    Route::get('/singlecourse/{slug}', [SingleController::class, 'render_singleCourse'])->name('singleCourse');
    Route::get('/singlecategory/{slug}', [SingleController::class, 'render_singleCategory'])->name('singleCategory');
    Route::get('/singlepost/{slug}', [SingleController::class, 'render_singlePost'])->name('singlePost');
    Route::get('/gallerys/{slug}', [SingleController::class, 'render_singleImage'])->name('singleImage');


});

// Authentication routes
Auth::routes();
Route::post('/change-password', [ResetPasswordController::class, 'updatePassword'])->name('changePassword')->middleware('auth');

// Backend routes with prefix and middleware
Route::prefix('/admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Site settings
    Route::resource('site-settings', SiteSettingController::class);

    // Cover images
    // Route::resource('cover-images', CoverImageController::class);

    // Route::get('cover-images', [CoverImageController::class,'create'])->name('cover-images');
    Route::resource('cover-images', CoverImageController::class);

    // About us
    Route::resource('about-us', AboutController::class);

    // Services
    Route::resource('services', ServiceController::class);

    // Categories
    Route::resource('categories', CategoryController::class);

    // Posts
    Route::resource('posts', PostController::class);

    // Photo galleries
    Route::resource('photo-galleries', PhotoGalleryController::class);

    // Video galleries
    Route::resource('video-galleries', VideoGalleryController::class);

    // Testimonials
    Route::resource('testimonials', TestimonialController::class);

    // Visitor books
    Route::resource('visitors-book', VisitorBookController::class);

    // Blog posts categories
    Route::resource('blog-posts-categories', BlogPostsCategoryController::class);

    // Courses
    Route::resource('courses', CourseController::class);

    // Teams
    Route::resource('teams', TeamController::class);

    // FAQs
    Route::resource('faqs', FaqController::class);

    // Countries
    Route::resource('countries', CountryController::class);

    // Universities
    Route::resource('universities', UniversityController::class);

    // Student details
    Route::resource('student-details', StudentDetailController::class);

    // Contact
    Route::resource('contacts', ContactController::class);

    // Favicon controller
    Route::resource('favicons', FaviconController::class);

    //DirectorMessage Controller

    Route::resource('director_messages', DirectorMessageController::class);

});

Route::get('/blogs', [FrontViewController::class, 'blogs'])->name('blogs.index');

Route::get('/news', [FrontViewController::class, 'news'])->name('news.index');

Route::get('/courses/{slug}', 'FrontViewController@viewCourse');





Route::get('/track-parcel', [ParcelTrackingController::class, 'showTrackingForm'])->name('show-track-parcel');
Route::post('/track-parcel', [ParcelTrackingController::class, 'track'])->name('track-parcel');

Route::get('/admin/parcel-tracking-dashboard', [ParcelTrackingController::class, 'dashboard'])->name('admin.parcel-tracking-dashboard');


Route::prefix('logistics')->middleware(['auth'])->group(function () {
    Route::get('/customers', [ParcelTrackingController::class, 'fetchCustomers'])->name('logistics.customers.index');
    Route::get('/receivers', [ParcelTrackingController::class, 'fetchReceivers'])->name('logistics.receivers.index');
    Route::get('/tracking-updates', [ParcelTrackingController::class, 'fetchTrackingUpdates'])->name('logistics.tracking-updates.index');
    Route::get('/parcels', [ParcelTrackingController::class, 'fetchParcels'])->name('logistics.parcels.index');
    Route::get('/parcel-histories', [ParcelTrackingController::class, 'fetchParcelHistories'])->name('logistics.parcel-histories.index');
});