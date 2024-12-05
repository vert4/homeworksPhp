<?php
declare(strict_types=1);

// объявление констант и переменных
const OPERATION_EXIT = 0;
const OPERATION_ADD = 1;
const OPERATION_DELETE = 2;
const OPERATION_PRINT = 3;

$operations = [
    OPERATION_EXIT => OPERATION_EXIT . '. Завершить программу.',
    OPERATION_ADD => OPERATION_ADD . '. Добавить товар в список покупок.',
    OPERATION_DELETE => OPERATION_DELETE . '. Удалить товар из списка покупок.',
    OPERATION_PRINT => OPERATION_PRINT . '. Отобразить список покупок.',
];

$items = [];
// объявление созданных функций 
function numbers () {
    $operationNumber = trim(fgets(STDIN));
    return $operationNumber;
}

function addProduct(array &$items): array {
	echo "Введение название товара для добавления в список: \n> ";
    $itemName = trim(fgets(STDIN));
    $items[] = $itemName;
	return $items;
}

function deleteProduct(array &$items): array
{
    echo 'Текущий список покупок:' . PHP_EOL;
    echo 'Список покупок: ' . PHP_EOL;
    echo implode("\n", $items) . "\n";

    echo 'Введение название товара для удаления из списка:' . PHP_EOL . '> ';
    $itemName = trim(fgets(STDIN));

    if (in_array($itemName, $items, true) !== false) {
        while (($key = array_search($itemName, $items, true)) !== false) {
            unset($items[$key]);
        }
        return $items;
    }
}

function listProduct(array $items): array
{
    echo 'Ваш список покупок: ' . PHP_EOL;
    echo implode(PHP_EOL, $items) . PHP_EOL;
    echo 'Всего ' . count($items) . ' позиций. '. PHP_EOL;
    echo 'Нажмите enter для продолжения';
    fgets(STDIN);
    return $items;
}


if (count($items)) {
    echo 'Ваш список покупок: ' . PHP_EOL;
    echo implode("\n", $items) . "\n";
} else {
    echo 'Ваш список покупок пуст.' . PHP_EOL;
}
echo 'Выберите операцию для выполнения: ' . PHP_EOL;
echo implode(PHP_EOL, $operations) . PHP_EOL . '> ';



do {
       
    $operationNumber = numbers();
    
    if (!array_key_exists($operationNumber, $operations)) {
        system('cls');
    
        echo '!!! Неизвестный номер операции, повторите попытку.' . PHP_EOL;
    }else {echo 'Выбрана операция: '  . $operations[$operationNumber] . PHP_EOL;}
    
    
        switch ($operationNumber) {
            case OPERATION_ADD:
            addProduct($items);
            break;

            case OPERATION_DELETE:
            deleteProduct($items);
            break;

            case OPERATION_PRINT:
            listProduct($items);
            break;
    }

    echo "\n ----- \n";
} while ($operationNumber > 0);

echo 'Программа завершена' . PHP_EOL;
