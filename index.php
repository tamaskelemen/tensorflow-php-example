<?php 


if (!extension_loaded("FFI")) {
	die("FFI extension required\n");
}


// $ffi = FFI::load('../tensorflow/tensorflow/c/php_api.h');
$ffi = FFI::load('tensorflow.h');

var_dump($ffi->TF_Version());

