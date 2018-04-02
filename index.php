<?php
//подключили библиотеку
require_once 'simple_html_dom.php';
//скачали страничку
$page = file_get_html('http://vse-sto.kz/almaty/sto/?page=1');
//проверка нашли ли хотя бы 1 блок img и не пустая ли страница
if($page->innertext!='' and count($data->find('img')))
  //для всех элементов найдём элементы img
  foreach($data->find('img') as $img)
    //выведем данный элемент
    echo $a->innertext;
	foreach($data->find('item-link') as $item)
    //выведем данный элемент
    echo $a->innertext;
	foreach($data->find('service-info') as $service)
    //выведем данный элемент
    echo $a->innertext;
?>


