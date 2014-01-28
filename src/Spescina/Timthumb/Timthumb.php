<?php namespace Spescina\Timthumb;

use Config;

define ('DEBUG_ON', Config::get('timthumb::debug_on'));
define ('DEBUG_LEVEL', Config::get('timthumb::debug_level'));
define ('FILE_CACHE_ENABLED', Config::get('timthumb::file_cache_enabled'));
define ('FILE_CACHE_DIRECTORY', Config::get('timthumb::file_cache_directory'));
define ('NOT_FOUND_IMAGE', Config::get('timthumb::not_found_image'));
define ('ERROR_IMAGE',  Config::get('timthumb::error_image'));
define ('PNG_IS_TRANSPARENT', Config::get('timthumb::png_is_transparent'));


require_once("TimthumbExt.php");

class Timthumb {
        static function get($src,$w = 0,$h = 0,$zc = 3) {
                
                $params = array(
                    'src' => $src,
                    'w' => $w,
                    'h' => $h,
                    'zc' => $zc
                );
                
                return TimthumbExt::start($params);
        }
        
        static function link($src,$w = 0,$h = 0,$zc = 1) {
                $url = '/'.Config::get('timthumb::prefix').'/'.$w.'/'.$h.'/'.$zc.'/'.$src;
                
                return $url;
        }
}
