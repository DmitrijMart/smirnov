<?php
class Sphere {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius; 
    }
    public function volume(): float {
        return (4 / 3) * pi() * pow($this->radius, 3);
    }
    public function surfaceArea(): float {
        return 4 * pi() * pow($this->radius, 2);
    }
    public function diameter(): float {
        return 2 * $this->radius;
    }
    public function displayInfo(): void {
        echo "Информация о шаре:\n";
        echo "Радиус шара: " . $this->radius . "\n";
        echo "Объем шара: " . $this->volume() . "\n"; 
        echo "Площадь поверхности шара: " . $this->surfaceArea() . "\n"; 
        echo "Диаметр шара: " . $this->diameter() . "\n"; 
    }
}
try {
    echo "Введите данные шара:";
    $input = readline(); 
    $sphere = new Sphere(5); 
    $sphere->displayInfo();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>
