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
        public function Display()
        {
            echo "{$this->name} is a {$this->color} car!";
        }
    }

    class Hatback extends car
    {
        public $seatingCount;
        public function DisplaySeatingCapacity()
        {
            echo "<span>This hatchback is a {$this->seatingCount} seater";
        }
    }

    $bmw = new Car("BMW");
    //$bmw->$name = "BMW";
    $bmw->color = "Blue";
    $bmw->Display();

    $kwid = new Hatback("Kwid");
    $kwid->color = "green";
    $kwid->seatingCount = 4;
    $kwid->DisplaySeatingCapacity();

    ?>
</body>

</html>