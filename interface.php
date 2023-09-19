<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        interface Animal {
            public function makeSound();
        }
        class Cat implements Animal{
            public function makeSound()
            {
                echo "Meow <br>";
            }
        }
        class Dog implements Animal {
            public function makeSound()
            {
                echo "Bark <br>";
            }
        }
        class Mouse implements Animal{
            public function makeSound()
            {
                echo "Squeak";
            }
        }
        // Create a list of animal
        $cat = new Cat();
        $dog = new Dog();
        $mouse = new Mouse();
        $animals = array($cat, $dog, $mouse);
        foreach($animals as $animal){
            $animal-> makeSound();
        }
    ?>
</body>
</html>