<!-- Setting -->
<?php 
defined("BASEPATH") or exit("^_^");
$baseurl = "http://localhost/monitoring-penyebaran-covid-19/";
function covid19($data){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
 ?>
<!-- End Setting https://github.com/devaxxml/ -->