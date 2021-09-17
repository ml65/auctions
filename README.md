*** Tестовое задание: ***

1. В приложенном файле json-выгрузка лотов из контроллера (файл во вложении)

2. Нужно из этих данных сформировать скрипт для отображения списка лотов ( https://rrt-auction.ru/auctions/open/ ), 
а также скрипт для формирования самого лота (например, https://rrt-auction.ru/auctions/cars-legkovye-1/lot-1136/ ).

=================================================================================================================

Не реализованы методы форматирования даты, сумм, километрожа. 

Реализован класс шаблонизатора, позволяющий реендерить шаблоны с вложенными массивами нескольких уровней. {$photos:0:files} $params["photos"][0]["files"] 

Не реализована полная маршрутизация ссылок. Вместо ссылок вида /auctions/cars-legkovye-1/lot-1136/ реализованы облегченные ссылки /auctions/lot-1136/

Список индикаторов изображений - не учитывается число текущих фото в текущем лоте. Также не подключены js и не реализован скроллинг фото с изменением активного элемента.

Не реализован вывод данных AVTOTEKA  в шаблоны. (сами данные десериалиованы).


Методы:

/auctions/open/ - вывод списка лотов

/auctions/lot-<id>/ - вывод конкретного лота
