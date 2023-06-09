<?php

$a = 'Katya';
echo $a . "\n";


// Хеш-масив
$student = [
    'ім\'я' => 'Іван',
    'прізвище' => 'Петренко',
    'вік' => 25
];
print_r($student);

//explode
$text = 'Katya,PHP';
$minusText = explode(',', $text);
print_r($minusText);

//implode
$words = ['Katya', 'PHP'];
$plusWords = implode(' ', $words);

// Розіменування змінних
$a = 10;
$pointer = &$a;
echo $pointer . "\n";

// Порівняння змінних
$a = 5;
$b = 10;
if ($a < $b) {
    echo 'a < b';
} elseif ($a > $b) {
    echo 'a > b';
} else {
    echo 'a = b';
}

// Приведення типів
$m = '42';
$mInt = (int)$m;
echo $mInt . "\n";

// Клас
class MyClass {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
$name = 'Katya';
$ob1 = new MyClass($name);
$ob1Name = $ob1->getName();
echo $ob1Name . "\n";

// Наслідування
class ChildClass extends MyClass {
    public function __construct($name) {
        parent::__construct($name);
    }
}
$name = 'Polina';
$ob2 = new ChildClass($name);
$ob2Name = $ob2->getName();
echo $ob2Name . "\n";

// Шаблон Singleton
class Singleton {
    private static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
$singleton1 = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
if ($singleton1 === $singleton2) {
    echo "Один об'єкт";
} else {
    echo "Різні об'єкти";
}

?>