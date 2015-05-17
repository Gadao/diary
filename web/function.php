<?php
require_once('../loader.php');
function file_get_contents_curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_URL, $url);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
function if_weather($str){
	if( mb_strlen( $str, "utf-8")<2 )
		$ans = '0'.$str;
	else
		$ans = $str;
	return $ans;

}
function input_show( $str_php,$str ){
    $ans = '<input type="text" name="'.$str.'" class="form-control" value="'.$str_php.'"/>';
    return $ans;
}