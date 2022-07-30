<?php

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

  Route::get('/','FrontendController@index')->name('front.index');
  Route::post('/contact','FrontendController@contactemail')->name('front.contact.submit');
  Route::post('/subscribe','FrontendController@subscribe')->name('front.subscribe.submit');



  Route::prefix('admin')->group(function() {

  Route::get('/dashboard', 'AdminController@index')->name('admin-dashboard');
  Route::get('/profile', 'AdminController@profile')->name('admin-profile'); 
  Route::post('/profile', 'AdminController@profileupdate')->name('admin-profile-update');
  Route::get('/info', 'AdminController@info')->name('admin-info');  
  Route::post('/info', 'AdminController@infoup')->name('admin-info-submit'); 
  Route::get('/aboutinfo', 'AdminController@proinfo')->name('admin-proinfo');  
  Route::post('/aboutinfo', 'AdminController@proinfoup')->name('admin-proinfo-submit'); 
  Route::get('/feature-title', 'AdminController@proimg')->name('admin-profile1');  
  Route::post('/featureup', 'AdminController@proimgup')->name('admin-proimg-submit'); 
  Route::get('/pricing', 'AdminController@profileimg')->name('admin-proimg');  
  Route::post('/pricing', 'AdminController@profileimgup')->name('admin-profile-submit'); 
  Route::get('/specialimg', 'AdminController@simg')->name('admin-special');  
  Route::post('/testmonial', 'AdminController@simgup')->name('admin-spimg-submit');
  Route::get('/testmonial', 'AdminController@bimg')->name('admin-back');  
  Route::post('/specialimg', 'AdminController@bimgup')->name('admin-back-submit');
  Route::get('/video', 'AdminController@video')->name('admin-video');  
  Route::post('/video', 'AdminController@videoup')->name('admin-video-submit');  
  Route::get('/reset-password', 'AdminController@passwordreset')->name('admin-password-reset');
  Route::post('/reset-password', 'AdminController@changepass')->name('admin-password-change');
  Route::get('/', 'Auth\AdminLoginController@showLoginForm')->name('admin-login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin-login-submit');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin-logout');





  
  Route::get('/testimonial', 'PortfolioController@index')->name('admin-ad-index');
  Route::get('/testimonial/create', 'PortfolioController@create')->name('admin-ad-create');
  Route::post('/testimonial/create', 'PortfolioController@store')->name('admin-ad-store');
  Route::get('/testimonial/edit/{id}', 'PortfolioController@edit')->name('admin-ad-edit');
  Route::post('/testimonial/edit/{id}', 'PortfolioController@update')->name('admin-ad-update');  
  Route::get('/testimonial/delete/{id}', 'PortfolioController@destroy')->name('admin-ad-delete');

  Route::get('/expert', 'SliderController@index')->name('admin-sl-index');
  Route::get('/expert/create', 'SliderController@create')->name('admin-sl-create');
  Route::post('/expert/create', 'SliderController@store')->name('admin-sl-store');
  Route::get('/expert/edit/{id}', 'SliderController@edit')->name('admin-sl-edit');
  Route::post('/expert/edit/{id}', 'SliderController@update')->name('admin-sl-update');  
  Route::get('/expert/delete/{id}', 'SliderController@destroy')->name('admin-sl-delete');

  Route::get('/feature-content', 'SpecialistController@index')->name('admin-sp-index');
  Route::get('/feature/create', 'SpecialistController@create')->name('admin-sp-create');
  Route::post('/feature/create', 'SpecialistController@store')->name('admin-sp-store');
  Route::get('/feature/edit/{id}', 'SpecialistController@edit')->name('admin-sp-edit');
  Route::post('/feature/edit/{id}', 'SpecialistController@update')->name('admin-sp-update');  
  Route::get('/feature/delete/{id}', 'SpecialistController@destroy')->name('admin-sp-delete');

  Route::get('/service', 'ServiceController@index')->name('admin-sr-index');
  Route::get('/service/create', 'ServiceController@create')->name('admin-sr-create');
  Route::post('/service/create', 'ServiceController@store')->name('admin-sr-store');
  Route::get('/service/edit/{id}', 'ServiceController@edit')->name('admin-sr-edit');
  Route::post('/service/edit/{id}', 'ServiceController@update')->name('admin-sr-update');  
  Route::get('/service/delete/{id}', 'ServiceController@destroy')->name('admin-sr-delete');

  Route::get('/gallery', 'ImageController@index')->name('admin-img-index');
  Route::get('/gallery/create', 'ImageController@create')->name('admin-img-create');
  Route::post('/gallery/create', 'ImageController@store')->name('admin-img-store');
  Route::get('/gallery/edit/{id}', 'ImageController@edit')->name('admin-img-edit');
  Route::post('/gallery/edit/{id}', 'ImageController@update')->name('admin-img-update');  
  Route::get('/gallery/delete/{id}', 'ImageController@destroy')->name('admin-img-delete');

  Route::get('/pricing-content', 'ResumeController@index')->name('admin-rs-index');
  Route::get('/pricing/create', 'ResumeController@create')->name('admin-rs-create');
  Route::post('/pricing/create', 'ResumeController@store')->name('admin-rs-store');
  Route::get('/pricing/edit/{id}', 'ResumeController@edit')->name('admin-rs-edit');
  Route::post('/pricing/edit/{id}', 'ResumeController@update')->name('admin-rs-update');  
  Route::get('/pricing/delete/{id}', 'ResumeController@destroy')->name('admin-rs-delete');
  Route::post('/basic', 'AdminController@basic')->name('admin-basic');
  Route::post('/standard', 'AdminController@standard')->name('admin-standard');
  Route::post('/pro', 'AdminController@pro')->name('admin-pro');

  Route::get('/page-settings/about', 'PageSettingController@about')->name('admin-ps-about');
  Route::post('/page-settings/about', 'PageSettingController@aboutupdate')->name('admin-ps-about-submit');
  Route::get('/page-settings/contact', 'PageSettingController@contact')->name('admin-ps-contact');
  Route::post('/page-settings/contact', 'PageSettingController@contactupdate')->name('admin-ps-contact-submit');



  Route::get('/social', 'SocialSettingController@index')->name('admin-social-index');
  Route::post('/social/update', 'SocialSettingController@update')->name('admin-social-update');


  Route::get('/seotools/analytics', 'SeoToolController@analytics')->name('admin-seotool-analytics');
  Route::post('/seotools/analytics/update', 'SeoToolController@analyticsupdate')->name('admin-seotool-analytics-update');
  Route::get('/seotools/keywords', 'SeoToolController@keywords')->name('admin-seotool-keywords');
  Route::post('/seotools/keywords/update', 'SeoToolController@keywordsupdate')->name('admin-seotool-keywords-update');

  Route::get('/general-settings/logo', 'GeneralSettingController@logo')->name('admin-gs-logo');
  Route::post('/general-settings/logo', 'GeneralSettingController@logoup')->name('admin-gs-logoup');

  Route::get('/general-settings/favicon', 'GeneralSettingController@fav')->name('admin-gs-fav');
  Route::post('/general-settings/favicon', 'GeneralSettingController@favup')->name('admin-gs-favup');

  Route::get('/general-settings/payments', 'GeneralSettingController@payments')->name('admin-gs-payments');
  Route::post('/general-settings/payments', 'GeneralSettingController@paymentsup')->name('admin-gs-paymentsup');

  Route::get('/general-settings/contents', 'GeneralSettingController@contents')->name('admin-gs-contents');
  Route::post('/general-settings/contents', 'GeneralSettingController@contentsup')->name('admin-gs-contentsup');

  Route::get('/general-settings/bgimg', 'GeneralSettingController@bgimg')->name('admin-gs-bgimg');
  Route::post('/general-settings/bgimgup', 'GeneralSettingController@bgimgup')->name('admin-gs-bgimgup');

  Route::get('/general-settings/about', 'GeneralSettingController@about')->name('admin-gs-about');
  Route::post('/general-settings/about', 'GeneralSettingController@aboutup')->name('admin-gs-aboutup');

  Route::get('/general-settings/address', 'GeneralSettingController@address')->name('admin-gs-address');
  Route::post('/general-settings/address', 'GeneralSettingController@addressup')->name('admin-gs-addressup');

  Route::get('/general-settings/footer', 'GeneralSettingController@footer')->name('admin-gs-footer');
  Route::post('/general-settings/footer', 'GeneralSettingController@footerup')->name('admin-gs-footerup');

  Route::get('/general-settings/bg-info', 'GeneralSettingController@bginfo')->name('admin-gs-bginfo');
  Route::post('/general-settings/bg-info', 'GeneralSettingController@bginfoup')->name('admin-gs-bginfoup');

  Route::get('/subscribers', 'SubscriberController@index')->name('admin-subs-index');
  Route::get('/subscribers/download', 'SubscriberController@download')->name('admin-subs-download');

  Route::get('/languages', 'LanguageController@lang')->name('admin-lang-index');
  Route::post('/languages', 'LanguageController@langup')->name('admin-lang-submit');
  });
