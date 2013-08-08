<?php namespace Spescina\Timthumb;

use Config;

define ('ERROR_IMAGE', Config::get('timthumb::error_image'));

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
