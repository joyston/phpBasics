<!DOCTYPE html>
<html>

<body>
    <?php
    class Car
    {
        public $name;
        public $color;
        function Display()
        {
            echo "{$this->name} is a {$this->color} car!";
        }
    }
    $bmw = new Car();
    $bmw->$name = "BMW";
    $bmw->$color = "Blue";
    $bmw->Display();
    ?>
</body>

</html>