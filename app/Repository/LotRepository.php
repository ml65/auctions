<?php
/*
 * Получаем данные из единственного json файла  __DIR__ lots.json
 */

namespace Mls65\Lotlist\Repository;

use Mls65\Lotlist\Interfaces\LotRepositoryInterface;
use Mls65\Lotlist\Entity\LotEntity;

class LotRepository  {

    private $data;

    public function __construct()
    {
//
    }

    static public function getLotsList()
    {
            return json_decode(file_get_contents( __DIR__ ."/lots.json"),true);
    }


    static public function getLot($id) {
    
        $lots = json_decode(file_get_contents( __DIR__ ."/lots.json"),true);
        foreach ($lots as $lot) {
            if($lot["id"] == $id) {
                if(array_key_exists("avtoteka", $lot)) {
                    $data = unserialize(base64_decode($lot["avtoteka"]));
                    $lot["avtoteka"] = $data;
                } 
                return $lot;
            }
        }
        return array();

    }

}
