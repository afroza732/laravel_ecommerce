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


Route::get('/', 'WelcomeControler@index');
Route::get('/contact', 'WelcomeControler@contact');
Route::get('/product', 'WelcomeControler@product');
Route::get('/topbrands', 'WelcomeControler@topBrands');
Route::get('/search', 'SearchControler@search');
Route::get('/details/{id}', 'WelcomeControler@details');


//cart
Route::get('/add-to-cart/{id}', 'cartControler@addToCart');
Route::get('/cart', 'cartControler@cart');
Route::post('/cart-update', 'cartControler@updateToCart');
Route::get('/delete-to-cart/{id}', 'cartControler@deletToCart');

//chckout checkout

Route::get('/checkout', 'CheckOutControler@index');
Route::post('/checkout-registration', 'CheckOutControler@checkOutRegistration');
Route::post('/customer-login', 'CheckOutControler@customerLogin');
Route::get('/customer-logout', 'CheckOutControler@customerlogout');
Route::get('/biling-address', 'CheckOutControler@billingAddress');
Route::get('/handcash', 'CheckOutControler@handCash');
Route::get('/shipping-info', 'CheckOutControler@shippingAddress');
Route::post('/save-shipping', 'CheckOutControler@shippingSave');
Route::get('/payment', 'CheckOutControler@payment');
Route::post('/order-place', 'CheckOutControler@orderPlace');
Route::get('/manage-order', 'CheckOutControler@manageOrder');
Route::get('/view-order/{id}', 'CheckOutControler@viewOrder');



//user login
Route::get('/admin', 'AdminControler@index');
Route::get('/dashboard', 'SuperAdminControler@index');
Route::post('/admin_login', 'AdminControler@adminLogin');
Route::get('/logout', 'SuperAdminControler@logout');



//category
Route::get('/add-category', 'categoryControler@index');
Route::post('/save-category', 'categoryControler@saveCategory');
Route::get('/manage-category', 'categoryControler@manageCategory');
Route::get('/unpublished-category/{id}', 'categoryControler@unpublishCategory');
Route::get('/published-category/{id}', 'categoryControler@publishCategory');
Route::get('/delete-category/{id}', 'categoryControler@deleteCategory');
Route::get('/edit-category/{id}', 'categoryControler@editCategory');
Route::post('/update-category', 'categoryControler@updateCategory');

//show category by id i f5ront end
Route::get('/show_product_category/{id}', 'WelcomeControler@showProductCategory');

//Manufacturer
Route::get('/add-manufacturer', 'manufacturerControler@index');
Route::post('/save-manufacturer', 'manufacturerControler@saveManufacturer');
Route::get('/manage-manufacturer', 'manufacturerControler@manageManufacturer');
Route::get('/unpublished-manufacturer/{id}', 'manufacturerControler@unpublishedManufacturer');
Route::get('/edit-manufacturer/{id}', 'manufacturerControler@editManufacturer');
Route::get('/published-manufacturer/{id}', 'manufacturerControler@publishedManufacturer');
Route::post('/update-manufacturer', 'manufacturerControler@updateManufacturer');
Route::get('/delete-manufacturer/{id}', 'manufacturerControler@deleteManufacturer');



//Product

Route::get('/add-product', 'productControler@index');
Route::post('/save-product', 'productControler@saveProduct');
Route::get('/manage-product', 'productControler@manageProduct');
Route::get('/unpublished-product/{id}', 'productControler@unpublishedProduct');
Route::get('/published-product/{id}', 'productControler@publishedProduct');
Route::get('/edit-product/{id}', 'productControler@editProduct');
Route::post('/update-product', 'productControler@updateProduct');
Route::get('/delete-product/{id}', 'productControler@deleteProduct');
Route::get('/inactive-feature-product/{id}', 'productControler@inactiveProduct');
Route::get('/active-feature-product/{id}', 'productControler@activeProduct');

//slider
Route::get('/add-slider', 'SliderControler@index');
Route::post('/save-slider', 'SliderControler@saveSlider');
Route::get('/manage-slider', 'SliderControler@manageSlider');
Route::get('/unpublished-slider/{id}', 'SliderControler@unpublishedSlider');
Route::get('/published-slider/{id}', 'SliderControler@publishedSlider');
Route::get('/delete-slider/{id}', 'SliderControler@deleteSlider');

//social link
Route::get('/social-link', 'SocialControler@index');
Route::post('/update-social', 'SocialControler@updateSocial');
Auth::routes();

