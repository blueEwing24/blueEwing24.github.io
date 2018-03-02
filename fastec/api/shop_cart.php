<?php
$file_name = 'http://127.0.0.1/RestServer/data/shop_cart_data.json';
$file = file_get_contents($file_name);

echo $file;