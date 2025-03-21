<!DOCTYPE html>
<html>

<body>
    <?php
    class Car
    {
        public $name;
        public $color;

        function __construct($name)
        {
            $this->name = $name;
        }
        function __destruct()
        {
            echo "Script has ended!";
        }
        function Display()
        {
            echo "{$this->name} is a {$this->color} car!";
        }
    }
    $bmw = new Car("BMW");
    //$bmw->$name = "BMW";
    $bmw->color = "Blue";
    $bmw->Display();
    ?>
</body>

</html>