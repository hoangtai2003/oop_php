<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    // Hàm hủy được gọi khi đối tượng bị hủy hoặc tập lệnh bị dừng hoặc thoát
    <?php
        class FruitDestruct{
            public $name;
            public $color;
            function __construct($name, $color)
            {
                $this->name = $name;
                $this->color = $color;
            }
            function __destruct()
            {
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
        $apple = new FruitDestruct("Apple", "red");
    ?>
</body>
</html>