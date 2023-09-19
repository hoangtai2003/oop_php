<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- //Các lớp và phương thức trừu tượng là khi lớp cha có một phương thức được đặt tên, nhưng cần (các) lớp con của nó để hoàn thành các nhiệm vụ.
    //Lớp trừu tượng là lớp chứa ít nhất một phương thức trừu tượng. Phương thức trừu tượng là phương thức được khai báo nhưng không được triển khai trong mã -->
    <?php
        abstract class Car{
            public $name;
            public function __construct($name)
            {
                $this->name = $name;
            }
            public abstract function intro() : string;
        }
        // Child classes
        class Audi extends Car {
            public function intro(): string
            {
                return "Choose German quality! I'm an $this->name!";
            }
        }
        class Volvo extends Car{
            public function intro(): string
            {
                return "Proud to be Swedish! I'm a $this->name!"; 
            }
        } 
        class Citroen extends Car{
            public function intro(): string
            {
                return "French extravagance! I'm a $this->name!"; 
            }
        }
        $audi = new Audi("Audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new Volvo("Volvo");
        echo $volvo->intro();
        echo "<br>";

        $citroen = new Citroen("Citroen");
        echo $citroen->intro();
        echo "<br>"
    ?>
    <!-- Lớp trừu tượng với 1 đối số -->
    <?php
        abstract class ParentClass {
            abstract protected function prefixName($name);
        }
        class ChildClass extends ParentClass {
            public function prefixName($name) {
                if ($name == "John Doe"){
                    $prefix = "Mr.";
                } elseif($name == "Jane Doe"){
                    $prefix = "Mrs.";
                } else {
                    $prefix = "";
                }
                return "{$prefix} {$name}";
            }
        }
        $class = new ChildClass;
        echo $class->prefixName("John Doe");
        echo "<br>";
        echo $class->prefixName("Jane Doe");
    ?>
</body>
</html>