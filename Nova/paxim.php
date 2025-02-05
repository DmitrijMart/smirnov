<?php
echo "Выберите данные которые хотите найти:\n";
echo "1 - куб\n";
echo "2 - шар\n";
echo "3 - цилиндр\n";
echo "4 - тетраэдр\n";
$q = readline();

// Приводим $q к целому числу
$q = (int)$q;

switch ($q) {
    case 1:
        include "Cube.php";
        break;

    case 2:
        include "shar.php";
        break;

    case 3:
        include "Cilinder.php";
        break;
        
    case 4:
        include "Tetraid.php";
        break;
        
    default:
        echo "Вы ввели не те данные\n";
}
?>
