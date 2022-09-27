<?php 
declare(strict_types=1);

spl_autoload_register(function ($class) {
    include __DIR__ . '/class/'.$class.'.php';
});

include(__DIR__.'/config.php');
$dbh = DB::getInstance()->connect();

##########################################################################
include('item.php');  // загружаем тестовый продукт

$product_id=7947; 

$item = new Item($test_item); // получаем экземляр класса единицы продукта
if((new UpdateProduct($dbh))->update($item, $product_id))
{echo "Продукт успешно обновлен!";}else{echo "Ошибка обновления товара $product_id";}










?>