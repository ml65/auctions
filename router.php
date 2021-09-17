<?php

/*
 * Роутер приложения
 */

use Mls65\Lotlist\Engine\Storage;
 
try {

    $router = Storage::get('Router');
    $router->get('/404','LotController@error404');
    $router->get('/auctions/open','LotController@getlots');
    $router->get('/auctions/lot-(.+)','LotController@getlot');
} catch (\Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}