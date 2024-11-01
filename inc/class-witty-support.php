<?php 
/**
 * Witty plugin base support
 *
 * @class       witty_support
 * @version     1
 * @package     wittyMap/Inc
 * @author      Robert John Concepcion
 */
class witty_support
{

	public function __construct(){

		add_action( 'admin_enqueue_scripts', [ $this, 'enqueue' ] );
	}

	public function enqueue(){
		/**
		 * Witty map button and etc default style
		 */
		wp_enqueue_style(	'witty-map', WITTY_DIR_URL . '/inc/css/witty-map-support.css' );
	}

	/**
	 * WITTY TEMPLATING FUNCTION
	 * @param  string  $type     	set folder of partial
	 * @param  string  $template 	name of file
	 * @param  array   $vars     	key as var name value as value
	 * @param  boolean $echo     	echo content
	 * @return string				html elem
	 */
	public function witty_template( $type='inc' ,$template, $vars = array(), $echo = true ) {
		
		$allowed_type = [ 'inc', 'admin', 'public' ];

		if( !in_array( $type, $allowed_type) ):
			echo 'Invalid Type :-('; return false;
		endif;

		$path = WITTY_DIR ."/$type/partials/$template.php";

		if ( file_exists( $path ) ):
	            
			extract( $vars );

			if( !$echo ):

				ob_start();

					include $path;

				return ob_get_clean();

			endif;

			include $path;
			
		endif;
	}

	/**
	 * set an attribute of html tag
	 * @param  array  	$attrbs
	 * @return string 	
	 */ 
	public static function attrb( $attrbs = [] ){

		unset($attrbs['name']);
		unset($attrbs['value']);

		$added = "";
		
		if(count($attrbs)):

			foreach ($attrbs as $attrb => $value):

				$added .= $attrb . "='$value' ";

			endforeach;

		endif;

		return $added;
	}


}