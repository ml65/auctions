<?php

// Инициализация хранилища приложения

use Mls65\Lotlist\App;
use Mls65\Lotlist\Engine\Request;
use Mls65\Lotlist\Engine\Response;
use Mls65\Lotlist\Engine\Router;
use Mls65\Lotlist\Engine\Storage;
use Mls65\Lotlist\Engine\Template;
use Mls65\Lotlist\Entity\LotEntity;
use Mls65\Lotlist\Repository\LotRepository;

Storage::set('Request',  new Request());
Storage::set('Response', new Response());
Storage::set('Router',   new Router());
Storage::set('Response', new Response());
Storage::set('Repository', new LotRepository());
Storage::set('Template', new Template());
Storage::set('Entity',   new LotEntity());
Storage::set('App',      new App());
