<?php
class Tetrahedron {
    private $edge;
    public function __construct($edge) {
        $this->edge = $edge; 
    }
    public function height(): float {
        return sqrt(2) / 3 * $this->edge;
    }
    public function surfaceArea(): float {
        return sqrt(3) * pow($this->edge, 2); 
    }
    public function volume(): float {
        return sqrt(2) / 12 * pow($this->edge, 3);
    }
    public function displayInfo(): void {
        echo "Информация о тетраэдре:\n";
        echo "Ребро тетраэдра: " . $this->edge . "\n";
        echo "Высота тетраэдра: " . $this->height() . "\n"; 
        echo "Площадь поверхности тетраэдра: " . $this->surfaceArea() . "\n"; 
        echo "Объем тетраэдра: " . $this->volume() . "\n"; 
    }
}
try {
    echo "Введите данные тетраэдра: ";
    $input = readline(); 
    $tetrahedron = new Tetrahedron(5); 
    $tetrahedron->displayInfo();
} catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>