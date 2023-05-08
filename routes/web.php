<?php

use Illuminate\Support\Facades\Route;

//FRONTEND CONTROLLERs
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Front\MailController;
use App\Http\Controllers\Front\ProductPageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;

//BACKEND CONTROLLERs
use \App\Http\Controllers\Back\SuperAdminController;
use App\Http\Controllers\Back\PublisherController;
use App\Http\Controllers\Back\SliderController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\KindController;

Auth::routes();

Route::prefix('/')->name('front.')->middleware('userAPcheck')->group(function(){
    Route::get('/', [MainController::class, 'index'])->name('mainpage');

    Route::get('/hakkimizda', function () {
        return view('front.about');
    })->name('about');

    Route::get('/iletisim', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('/bilgisayar', [ProductPageController::class, 'pcPageIndex'])->name('bilgisayar');

    Route::get('/arama', [ProductPageController::class, 'search'])->name('search');

    Route::get('/ps', [ProductPageController::class, 'psPageIndex'])->name('ps');

    Route::get('/xbox', [ProductPageController::class, 'xboxPageIndex'])->name('xbox');

    Route::get('/gta', [ProductPageController::class, 'details'])->name('gta');

    Route::get('/urun/{id}', [ProductPageController::class, 'xboxDetails'])->name('product.detail.index');

    Route::post('/profile/{id}', [MainController::class, 'update'])->name('user.update');
    Route::get('/profile/{id}/{isDeleted}', [MainController::class, 'updateStatus'])->name('user.updateStatus');
    Route::get('/profile', [MainController::class, 'profile'])->name('profile');

    Route::post('/contact-form', [MailController::class, 'storeContactForm'])->name('contact-form.store');

    Route::get('/urun/', [ProductController::class, 'productSearch'])->name('product.search');

    Route::post('/sepet', [OrderController::class, 'newOrder'])->name('order.add');
    Route::get('/siparis', [OrderController::class, 'orderIndex'])->name('order.index');

    Route::post('/cart', [CartController::class, 'addCart'])->name('cart.add');
    Route::get('/cart/{id}', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::get('/sepet', [CartController::class, 'cart'])->name('cart');


    Route::get('/ver', function () {
        return view('ver');
    });
});

Route::prefix('/admin')->name('back.')->middleware(['isLogin', 'isAdmin', 'userAPcheck'])->group(function() {

    Route::get('/', [OrderController::class, 'home'])->name('dashboard');
    Route::get('/siparis/{id}/{isDeleted}', [OrderController::class, 'orderStatus'])->name('orders.updateStatus');


    Route::get('/yayinci', [PublisherController::class, 'index'])->name('publisher');
    Route::post('/yayinci', [PublisherController::class, 'storePublisher'])->name('publisher.store');
    Route::delete('/yayinci', [PublisherController::class, 'deletePublisher'])->name('publisher.delete');

    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/ekle', [SliderController::class, 'storeSliderIndex'])->name('slider.store.index');
    Route::post('/slider/ekle', [SliderController::class, 'storeSlider'])->name('slider.store');
    Route::post('/slider/duzenle', [SliderController::class, 'updateSlider'])->name('slider.update');
    Route::get('/slider/duzenle/{id}', [SliderController::class, 'updateSliderIndex'])->name('slider.update.index');
    Route::delete('/slider', [SliderController::class, 'deleteSlider'])->name('slider.delete');

    Route::get('/tur', [KindController::class, 'index'])->name('kind.index');
    Route::post('/tur', [KindController::class, 'storeKind'])->name('kind.store');
    Route::delete('/tur', [KindController::class, 'deleteKind'])->name('kind.delete');

    Route::get('/urunler', [ProductController::class, 'index'])->name('products.index');
    Route::get('/urun/ekle', [ProductController::class, 'storeProductIndex'])->name('products.store.index');
    Route::post('/urun/ekle', [ProductController::class, 'storeProduct'])->name('products.store');
    Route::get('/urun/duzenle/{id}', [ProductController::class, 'storeProductEdit'])->name('product.update.index');
    Route::post('/urun/duzenle', [ProductController::class, 'storeProductUpdate'])->name('products.update');
    Route::get('/urun/{id}/{isDeleted}', [ProductController::class, 'productStatus'])->name('products.updateStatus');
    Route::post('/urun/sil/{id}', [ProductController::class, 'productDelete'])->name('products.delete');


    Route::get('/kullanicilar/duzenle/{id}', [SuperAdminController::class, 'userEdit'])->name('user.updateIndex');
    Route::get('/kullanicilar/sil/{id}', [SuperAdminController::class, 'userDelete'])->name('user.delete');
    Route::post('/kullanicilar/duzenle', [SuperAdminController::class, 'userUpdate'])->name('user.update');
    Route::get('/kullanici/', [SuperAdminController::class, 'userSearch'])->name('user.search');


    //superAdminAuthority
    Route::prefix('/')->name('superAdmin.')->middleware('isSuperAdmin')->group(function(){
        Route::get('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthorityIndex'])->name('changeUserAuthority');
        Route::post('/kullanici-yetki-degistir', [SuperAdminController::class, 'changeUserAuthority'])->name('changeUserAuthorityPost');

        Route::get('/kullanicilar', [SuperAdminController::class, 'changeUserActivePassiveIndex'])->name('changeUserActivePassive');
        Route::get('/kullanicilar/{id}/{isDeleted}', [SuperAdminController::class, 'changeUserActivePassive'])->name('changeUserActivePassivePost');
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
