<?php
/**
* Plugin Name: Contact form, yhteydenottolomake
* Version: 0.1
* Description: Yhteydenottolomake
* Author: Nikita Sedletskiy
**/

require 'classes/templates.php';




function user_shortcode(){
	$template = new Template();
	return $template->render( 'shortcode' );
}
add_shortcode('cform','user_shortcode'); # use [cform] shortcode in template or user_shortcode() function


add_action( 'wp_enqueue_scripts', 'form_scripts' );
function form_scripts() {
  wp_enqueue_style( 'datepicker-css', '/wp-content/plugins/contact-form/classes/templates/css/datepicker.min.css');	
  wp_enqueue_script( 'datepicker-min', '/wp-content/plugins/contact-form/classes/templates/js/datepicker.min.js', array('jquery'),  '0.0.0' , true );	
  wp_enqueue_script( 'datepicker-fi', '/wp-content/plugins/contact-form/classes/templates/js/datepicker.fi.js', array('jquery'),  '0.0.0' , true );	
  wp_enqueue_script( 'file-upl', '/wp-content/plugins/contact-form/classes/templates/js/file_upload.js', array('jquery'),  rand ( 0 , 100  ).rand ( 0 , 100  ).rand ( 0 , 100  ) , true );
  
  wp_localize_script( 'file-upl', 'MyAjax', array(
    'ajaxurl' => admin_url( 'admin-ajax.php' ),
    'security' => wp_create_nonce( 'special-string' )
  ));
}

add_action( 'wp_ajax_my_action', 'form_submit_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'form_submit_callback' );
function form_submit_callback() {
	require 'classes/mail.php';
	check_ajax_referer( 'special-string', 'security' );

	$template = new Template();
	$body = $template->render( 'form_email', array(
		'name' => $template->sanitize_input($_POST['nimi']),
		'email' => $template->sanitize_input($_POST['email']),
		'address' => $template->sanitize_input($_POST['address']),
		'date' => $template->sanitize_input($_POST['date']),
		'phone' => $template->sanitize_input($_POST['phone']),
		'budjet' => $template->sanitize_input($_POST['budjet']),
		'logo' => $template->sanitize_input($_POST['logo']),
		'photos' => $template->sanitize_input($_POST['photos']),
		'seo' => $template->sanitize_input($_POST['seo']),
		'help' => $template->sanitize_input($_POST['help']),
		'shop' => $template->sanitize_input($_POST['shop']),
		'message' => $template->sanitize_input($_POST['message'])
			) );

	$title = 'Your email title'; # here your title
	$email = new Mailer('test');
	echo $email->send_email($title, $body, 'asd');


	die();
}