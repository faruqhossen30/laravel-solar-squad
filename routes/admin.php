<?php

use App\Http\Controllers\Admin\Admin\RoleController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\Setting\ContactSettingController;
use App\Http\Controllers\Admin\Setting\SiteSettingController;
use App\Http\Controllers\Admin\Setting\SocialmediaSettingController;
use App\Http\Controllers\Admin\Setting\VideoSettingController;
use App\Http\Controllers\Admin\Setting\WebsiteSettingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\TestmonialController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Artisan;

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('role', RoleController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('blog', BlogController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::resource('role', RoleController::class);
    // Start Work

    Route::resource('category',     CategoryController::class);
    Route::resource('faq',          FaqController::class);
    Route::resource('testmonial',   TestmonialController::class);
    Route::resource('slider',       SliderController::class);
    Route::resource('service',      ServiceController::class);
    Route::resource('subscribe',    SubscribeController::class);

    Route::resource('user',         UserController::class);


    route::get('/contact',[ContactController::class,'create'])->name('contact');
    route::post('/contact/send',[ContactController::class,'send'])->name('contact.send');

    Route::get('profile/', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::put('profile/update/{id}', [AdminProfileController::class, 'UpdateAdminProfile'])->name('admin.profile.update');
    Route::get('profile/resetpassword/{id}', [AdminProfileController::class, 'resetpasswordAdminProfile'])->name('admin.profile.resetpassword');
    Route::put('profile/changepassword/{id}', [AdminProfileController::class, 'changepasswordProfile'])->name('admin.profile.changepassword');
    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('settingpage');
        Route::get('/site-setting', [SiteSettingController::class, 'sitesetting'])->name('sitesetting')->middleware('can:websitesetting');

        Route::get('/website-setting', [WebsiteSettingController::class, 'websitesetting'])->name('website.setting');
        Route::post('/website-setting/store', [WebsiteSettingController::class, 'websitestoresetting'])->name('website.setting.store');
        Route::get('/social-media', [SocialmediaSettingController::class, 'socialmedia'])->name('socialmedia.setting');
        Route::post('/social-media/store', [SocialmediaSettingController::class, 'socialmediastore'])->name('socialmedia.setting.store');
        Route::get('/contact-setting', [ContactSettingController::class, 'contactsetting'])->name('contact.setting');
        Route::post('/contact-setting/store', [ContactSettingController::class, 'contactsettingstore'])->name('contact.setting.store');

        Route::get('/video-setting', [VideoSettingController::class, 'videoSetting'])->name('video.setting');
        Route::post('/video-setting/store', [VideoSettingController::class, 'videoSettingstore'])->name('video.setting.store');
    });

    Route::get('create-storage-link', function () {
        Artisan::call('storage:link');
        return 'Storage link created successfully!';
    });
});
