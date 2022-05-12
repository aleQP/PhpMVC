<?php  
	//Core App class
	class Core{
		protected $currentController = 'User';
		protected $currenMethod = 'index';
		protected $params = [];

		public function __construct(){
			$url = $this->getUrl();

			//Look in 'controllers' for first value, ucwords will capitalize first letter
			if(file_exists('../app/controllers/'.ucwords($url[0]).'controller.php')){
				// Will set a new controller
				$this->currentController = ucwords($url[0]);
				unset($url[0]);
			}

			//Require the controller
			require_once '../app/controllers'.$this->currentController.'Controller.php';
			$this->currentController = new $this->currentController;
		}

		public function getUrl(){
			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');
				// Allows you to filter variables as string/number
				$url = filter_var($url, FILTER_SANITIZE_URL);
				// Breaking it into an array
				$url = explode('/', $url);
				return $url;
			}
		}
	}
?>