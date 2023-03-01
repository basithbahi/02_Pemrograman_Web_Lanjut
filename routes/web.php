<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasithController;

Route::prefix('Home')->group(function (){
    Route::get('Home', function(){
        return redirect('https://www.educastudio.com');
    });
});

Route::prefix('Products')->group(function (){
    Route::get('category/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
    Route::get('category/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('category/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

    Route::get('/news', function(){
        return redirect('https://www.educastudio.com/news');
    });
    Route::get('news/{title}', function($title){
        return redirect('https://www.educastudio.com/news/' . $title);
        //educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19
    });

Route::prefix('Program')->group(function (){
    Route::get('program/karir', function(){
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('program/magang', function(){
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('program/kunjungan-industri', function(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

Route::get('/about-us', function(){
   return redirect('https://www.educastudio.com/about-us'); 
});

Route::resource('/contact-us', BasithController::class)->only([
    'index',
    'create',
    'store'
]);
Route::fallback(function () {
    return '404 halaman tidak ditemukan';
});
