<?

// Выявляем все ошибки
error_reporting( E_ALL | E_NOTICE );

// Подключаем класс
include 'class.word.php';

// Создаем и пишем в файл. Деструктор закрывает
$w = new Word( "Пример.docx" );

$w->assign('Пример текста.
Будущее не предопределено.');

$w->create();

?>