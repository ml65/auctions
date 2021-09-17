<?php

namespace Mls65\Lotlist\Controller;

use Mls65\Lotlist\Engine\Storage;
use Mls65\Lotlist\Entity\LotEntity;
use Carbon\Carbon;

class LotController {

    /**
     * @var Request
     */
    private $request;
    private $response;
    private $lot;
    private $lotrepo;
    private $templ;
    
    public function __construct()
    {
// объект работы с запросом
        $this->request = Storage::get('Request');
// объект данных
        $this->lot = Storage::get('Entity');   
// репозиторий
        $this->lotrepo = Storage::get('Repository');   
// объект работы с запросом
        $this->response = Storage::get('Response');
// объект шаблонизатора
        $this->templ = Storage::get('Template');
// объект маршрутизатор
        $this->router = Storage::get('Router');

    }

    public function getlots()
    {
        $lotlist = $this->lotrepo->getLotsList();
        $str = '';
        foreach ($lotlist as $lot) {
             //? добавить отработку avtoteka
             $photos = '';
             foreach ($lot["photos"] as $ph) {
                 $photos .= $this->templ->render("item-photo.html",$ph);
             } 
             $lot["photodiv"] = $photos;
             $str .= $this->templ->render("item-lot.html",$lot);
        }
        $str = $this->templ->render("lots.html",array("lots" => $str));
        
        return $this->response->response($str);
    }

    public function getlot()
    {
        $param = $this->router->getparam();
        $id = $param[1];

        $this->lot = $this->lotrepo->getLot($id);
        if($this->lot["price_min"] > $this->lot["price_now"]) {
            $this->lot["price_text"] = "Минимальная цена не достигнута"; 
        } else {
            $this->lot["price_text"] = "Минимальная цена достигнута"; 
        }
        $str = $this->templ->render("lot.html",$this->lot);

        return $this->response->response($str);
    }


    public function error404()
    {
        echo "<h1>Test backend</h1><h2>ERROR 404!</h2>Current commands: <br> /cars/lots<br>/cars/lot/&lt;number&gt;"; exit;
    }

}