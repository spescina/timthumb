<?php namespace Spescina\Timthumb;

require_once( dirname( __FILE__ ) . "/lib/timthumb/timthumb.php" );

class TimthumbExt extends \Spescina\Timthumb\lib\timthumb\tt {
        
        protected $params;
        
        public function __construct(){
                $this->params = func_get_arg(0);
                
                parent::__construct();
        }
        
        public static function start(){
		$tim = new TimthumbExt(func_get_arg(0));
		$tim->handleErrors();
		$tim->securityChecks();
		if($tim->tryBrowserCache()){
			exit(0);
		}
		$tim->handleErrors();
		if(FILE_CACHE_ENABLED && $tim->tryServerCache()){
			exit(0);
		}
		$tim->handleErrors();
		$tim->run();
		$tim->handleErrors();
		exit(0);
	}
        
        protected function param($property, $default = ''){
		if (isset ($this->params[$property])) {
			return $this->params[$property];
		} else {
			return $default;
		}
	}
}