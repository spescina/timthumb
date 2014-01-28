<?php

return array(

    'prefix'                => 'proxy',
    
    'debug_on'              => false,
    'debug_level'           => 3,
    'file_cache_enabled'    => true,
    'file_cache_directory'  => app_path() . '/storage/cache/timthumb',
    'not_found_image'       => asset('public/packages/spescina/timthumb/images/nohoto.gif'),
    'error_image'           => asset('public/packages/spescina/timthumb/images/nohoto.gif'),
    'png_is_transparent'    => true

);