<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Hàm tạo cho phép bạn khởi tạo các thuộc tính của đối tượng khi tạo đối tượng
        class FruitConstruct {
            public $name;
            public $color;
            function __construct($name, $color)
            {
                $this->name = $name;
                $this->color = $color;
            }
            function get_name(){
                return $this->name;
            }
            function get_color(){
                return $this->color;
            }
        }
        $apple = new FruitConstruct("Apple", "red");
        echo "Name: ". $apple->get_name();
        echo "<br>";
        echo "Color: " . $apple->get_color();
    ?>
</body>
</html>