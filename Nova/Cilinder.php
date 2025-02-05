<?php
class Cylinder {
    private $radius;
    private $height;
    public function __construct($radius, $height) {
        $this->radius = $radius; 
        $this->height = $height; 
    }
    public function surfaceArea(): float {
        return 2 * pi() * $this->radius * ($this->radius + $this->height);
    }
    public function volume(): float {
        return pi() * pow($this->radius, 2) * $this->height;
    }
    public function displayInfo(): void {
        echo "Информация о цилиндре:\n";
        echo "Радиус цилиндра: " . $this->radius . "\n";
        echo "Высота цилиндра: " . $this->height . "\n"; 
        echo "Площадь цилиндра: " . $this->surfaceArea() . "\n"; 
        echo "Объем цилиндра: " . $this->volume() . "\n"; 
    }
}
try {
    echo "Введите данные цилиндра:";
    $input = readline(); 
    $cylinder = new Cylinder(5, 6); 
    $cylinder->displayInfo();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>