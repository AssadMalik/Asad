<?php
/**
 * Plugin Name: Blank 
 * Description: This is the my first plugin ever to work on where I will learn how to develop the plugin. 
 * Plugin URI: https://MalikAsad.com/
 * Author: MalikAsad.com
 * Version: 1.1
 * Author URI: MalikAsad.com
 *
 * Text Domain: Blank 
 *
 * @package Blank
 * @category Core
 */


 if ( ! defined( 'ABSPATH' )) {
    exit; // if accessed directly
}
/*function email_friends($post_ID) {
    $friends = 'likemalik3835788@gmail.com,Malikasadinfo@gmail.com';
    mail($friends, "This blog is Just updated", 
      'I just put something on my blog: http://blog.example.com');
    return $post_ID;
} */


function my_first_try(){
  return '<p>This is the first programe that I need to check on the website </p>';
}
	add_shortcode('this_isshort', 'my_first_try');	



    if( ! function_exists( 'my_custom_excerpt_length' ) )
{
    function my_custom_excerpt_length( $length )
    {
        return 10;
    }
}
add_filter( 'excerpt_length', 'my_custom_excerpt_length', 999 );



		?>
