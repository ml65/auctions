<?php 

declare(strict_types=1);

/**
  Интерфейс репозитория
 */
 
namespace Mls65\Lotlist\Interfaces;

interface LotRepositoryInterface
{
     public function getLotList();

     public function getLot(LotEntity $lot);

}