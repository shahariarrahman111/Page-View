<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.backend.dashboard');
});

Route::get('/admin-order', function () {
    return view('pages.backend.order');
});

Route::get('/details-order', function () {
    return view('pages.backend.orderdetails');
});

Route::get('/add-attributes', function () {
    return view('pages.backend.addattributes');
});

Route::get('/attributes', function () {
    return view('pages.backend.attributes');
});

Route::get('/add-category', function () {
    return view('pages.backend.addcategory');
});

Route::get('/add-product', function () {
    return view('pages.backend.dash-addproduct');
});

Route::get('/add-stock', function () {
    return view('pages.backend.dash-addstock');
});

Route::get('/add-subcategory', function () {
    return view('pages.backend.dash-addsubcategory');
});

Route::get('/category', function () {
    return view('pages.backend.category');
});

Route::get('/login', function () {
    return view('pages.backend.login');
});

Route::get('/customer', function () {
    return view('pages.backend.customer');
});

Route::get('/reset-password', function () {
    return view('pages.backend.passwordreset');
});

Route::get('/product', function () {
    return view('pages.backend.product');
});

Route::get('/admin-role', function () {
    return view('pages.backend.adminrole');
});

Route::get('/verification-otp', function () {
    return view('pages.backend.otpverification');
});

Route::get('/stock-history', function () {
    return view('pages.backend.stockhistory');
});

Route::get('/stock-details', function () {
    return view('pages.backend.stockdetails');
});

Route::get('/product-details', function () {
    return view('pages.backend.productdetails');
});

Route::get('/managestock', function () {
    return view('pages.backend.managestock');
});

Route::get('/customer-details', function () {
    return view('pages.backend.customer-details');
});

Route::get('/password-create', function () {
    return view('pages.backend.create-password');
});

Route::get('/create-order', function () {
    return view('pages.backend.createorder');
});

Route::get('/add-user', function () {
    return view('pages.backend.adduser');
});

Route::get('/subcategory', function () {
    return view('pages.backend.subcategory');
});




//Forntend view routeing

Route::get('/home', function () {
    return view('pages.forntend.home');
});

Route::get('/about', function () {
    return view('pages.forntend.about');
});

Route::get('/add-address', function () {
    return view('pages.forntend.addaddess');
});

Route::get('/address', function () {
    return view('pages.forntend.address');
});

Route::get('/cart', function () {
    return view('pages.forntend.cart');
});

Route::get('/contact', function () {
    return view('pages.forntend.contactus');
});

Route::get('/create-password', function () {
    return view('pages.forntend.createpass');
});

Route::get('/forget-password', function () {
    return view('pages.forntend.forgetpass');
});

Route::get('/order', function () {
    return view('pages.forntend.order');
});

Route::get('/order-details', function () {
    return view('pages.forntend.orderdetails');
});

Route::get('/login', function () {
    return view('pages.forntend.login');
});

Route::get('/register', function () {
    return view('pages.forntend.register');
});

Route::get('/profile', function () {
    return view('pages.forntend.profile');
});

Route::get('/account', function () {
    return view('pages.forntend.myaccount');
});

Route::get('/wish-list', function () {
    return view('pages.forntend.wishlist');
});

Route::get('/user-dashboard', function () {
    return view('pages.forntend.userdashboard');
});

Route::get('/review', function () {
    return view('pages.forntend.review');
});

Route::get('/rateus', function () {
    return view('pages.forntend.rateus');
});

Route::get('/terms&condition', function () {
    return view('pages.forntend.termsandcondition');
});

Route::get('/sitting', function () {
    return view('pages.forntend.settings');
});

Route::get('/return-refund', function () {
    return view('pages.forntend.returnrefund');
});

Route::get('/privacy&policy', function () {
    return view('pages.forntend.privacypolicy');
});

Route::get('/otp', function () {
    return view('pages.forntend.otp');
});

Route::get('/invoice', function () {
    return view('pages.forntend.invoice');
});

Route::get('/faq', function () {
    return view('pages.forntend.faq');
});

Route::get('/create-success', function () {
    return view('pages.forntend.createsuccess');
});


