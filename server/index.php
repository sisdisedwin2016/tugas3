<?php 

class MyAPI{
	function Hello($param){
		return "Hello " . $param;
	}
}

$options = array('uri' => 'http://152.118.33.94/tugas3/server/index.php');

$server = new SoapServer('../speksaya.wsdl', $options);

$server->setClass('MyAPI');

$server->handle();
 ?>