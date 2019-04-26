<?php
# Cms
Route::middleware(['cmsguard'])->group(function () {

    Route::prefix('cms')->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');
        Route::get('orders', 'CmsController@orders');
    });

});

# Shop
Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories');
    Route::get('order', 'ShopController@order');
    Route::get('remove-item', 'ShopController@removeItem');
    Route::get('update-cart', 'ShopController@updateCart');
    Route::get('clear-cart', 'ShopController@clearCart');
    Route::get('checkout', 'ShopController@checkout');
    Route::get('add-to-cart', 'ShopController@addToCart');
    Route::get('{curl}', 'ShopController@products');
    Route::get('{curl}/{purl}', 'ShopController@item');
    Route::get('/sortBy/{curl}/{sortBy}/{by}', 'ShopController@getProductsSortBy');
});

# User
Route::prefix('user')->group(function () {
    Route::get('signin', 'UserController@getSignin');
    Route::post('signin', 'UserController@postSignin');
    Route::get('signup', 'UserController@getSignup');
    Route::post('signup', 'UserController@postSignup');
    Route::get('profile', 'UserController@profilePage');
    Route::get('logout', 'UserController@logout');

});

# Pages
Route::get('/', 'PagesController@home');
Route::get('{url}', 'PagesController@content');