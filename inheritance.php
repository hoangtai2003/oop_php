<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            public function messeage(){
                echo "Am I a fruit or a berry?";
            }
        }
        $strawberry = new Strawberry("Apple", "red");
        $strawberry->messeage();
        $strawberry->intro();
    ?>
</body>
</html>