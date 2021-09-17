<?php 

require 'vendor/autoload.php';

use Mls65\Lotlist\Engine\Storage;

require 'start.php';
require 'router.php';

$app = Storage::get('App');
$app->run();
