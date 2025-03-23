<!DOCTYPE html>
<html>

<body>
    <?php
    class Car
    {
        public $name;
        public $color;
        protected $cartype;            //Access modifiers

        function __construct($name, $cartype = "Petrol")
        {
            $this->name = $name;
            $this->cartype = $cartype;
        }
        function __destruct()
        {
            echo "<br>Script has ended!";
        }
        public function Display()
        {
            echo "<br>{$this->name} is a {$this->color} car!";
            echo "<br>This Car is of type {$this->cartype}";
        }
    }

    //Inheritance
    class Hatback extends Car
    {
        public $seatingCount;
        public function DisplaySeatingCapacity()
        {
            echo "<br>This hatchback is a {$this->seatingCount} seater";
            echo "<br>This Car is of type {$this->cartype}";
        }
    }

    $bmw = new Car("BMW");
    //$bmw->$name = "BMW";
    $bmw->color = "Blue";
    $bmw->Display();

    $kwid = new Hatback("Kwid", "Electric");
    $kwid->color = "green";
    $kwid->seatingCount = 4;
    $kwid->DisplaySeatingCapacity();

    ?>
</body>

</html>