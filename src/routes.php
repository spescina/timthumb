<?php

Route::group(array('prefix' => Config::get('timthumb::prefix')), function() {
    
        Route::get('{w}/{h}/{zc}/{src}', function($w,$h,$zc,$src) {
            return Timthumb::get($src, $w, $h, $zc);
        })
        ->where('w','[0-9]+')
        ->where('h','[0-9]+')
        ->where('zc','[0-9]')
        ->where('src','.*');
        
});

