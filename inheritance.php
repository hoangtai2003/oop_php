<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // Lớp con sẽ kế thừa tất cả các thuộc tính và phương thức public và protected từ lớp cha. 
    // Ngoài ra, nó có thể có các thuộc tính và phương thức riêng.
    <?php
        class FruitInheritance{
            public $name;
            public $color;
            function __construct($name,$color){
                $this->name = $name;
                $this->color = $color;
            }
            public function intro()
            {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
        class Strawberry extends FruitInheritance{
            public $weight;
            function __construct($name, $color, $weight,)
            {
                $this->name = $name;
                $this->color = $color;
                $this->weight = $weight;
            }
            public function intro()
            {
                echo "The fruit is {$this->name} and the color is {$this->color}, and the weight is {$this->weight} gram.";
            }
        }
        $strawberry = new Strawberry("Apple", "red", "500");
        $strawberry->intro();
    ?>
</body>
</html>