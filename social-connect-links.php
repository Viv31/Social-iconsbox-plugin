<?php 
/***
* Plugin Name: Connect to social media
* Plugin URI:
* Description:
* Author: Vaibhav Gangrade
* Version:1.0
*/

function CSM_ConnectTosocailMedai($attr){

	$options = shortcode_atts(array(
'type_of_socail_media' =>'Google',
'button_text' => 'Google',
'link_of_social_media'=>'www.google.com'),$attr);
$output = "<div class='social_box'>
	<h4>".$options['type_of_socail_media']."</h4>
	<a href='".$options['link_of_social_media']."'><button>".$options['button_text']."</button></a>

</div>";

return $output;

}

add_shortcode('SocailBox','CSM_ConnectTosocailMedai');
?>