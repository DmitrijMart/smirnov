<?php
class Cube {
    private $edge;
    public function __construct($edge) {
        $this->edge = $edge; 
    }
    public function diagonal(): float {
        return $this->edge * sqrt(3);
    }
    public function surfaceArea(): float {
        return 6 * pow($this->edge, 2);
    }
    public function volume(): float {
        return pow($this->edge, 3);
    }
    public function displayInfo(): void {
        echo "Информация о кубе:\n";
        echo "Ребро куба: " . $this->edge . "\n";
        echo "Диагональ куба: " . $this->diagonal() . "\n"; 
        echo "Площадь поверхности куба: " . $this->surfaceArea() . "\n"; 
        echo "Объем куба: " . $this->volume() . "\n"; 
    }
}
try {
    echo "Введите данные куба: ";
    $input = readline(); 
    $cube = new Cube((float)$input); 
    $cube->displayInfo(); 
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>