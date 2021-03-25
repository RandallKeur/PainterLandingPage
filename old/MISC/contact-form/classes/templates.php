<?php

class Template {

	function __construct() {

  	}

  	function render( $temp,$args = array() ){

  		$template = $this->find_template( $temp );
  		$output = "";
  		if ( $template ){
  			$output = $this->render_template( $template, $args );
  		}

  		return $output;
  	}

  	function find_template( $template ){
		$found = false;
		$file = dirname(__DIR__).'/classes/templates/'.$template.'.php';

	  	if ( file_exists( $file ) ){
				$found = $file;
		}

		return $found;
  	}


  	function render_template( /*$template, $variables*/ ){
		ob_start();
		foreach ( func_get_args()[1] as $key => $value) {
			${$key} = $value;
		}
		include func_get_args()[0];
		return ob_get_clean();
	}

	function sanitize_input($input){
		//return $input;
		return htmlspecialchars(filter_var($input, FILTER_SANITIZE_STRING));
	}

}