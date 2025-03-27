<!DOCTYPE html>
<html>

<body>
    <?php
    class Car
    {
        const DESTRUCT_MSG = "<br>Destroying Car class!";
        public $name;
        public $color;
        protected $cartype;            //Access modifiers for properties
        private $baseColor;

        function __construct($name, $cartype = "Petrol")
        {
            $this->name = $name;
            $this->cartype = $cartype;
        }
        function __destruct()
        {
            echo self::DESTRUCT_MSG; //constant called from inside the class
        }
        private function setBaseColor()
        {
            $this->baseColor = "white";
        }
        public function Display()
        {
            $this->setBaseColor();
            echo "<br>Base color of any car is {$this->baseColor}!";
            echo "<br>{$this->name} is a {$this->color} car!";
            echo "<br>This Car is of type {$this->cartype}";
        }
    }

    //Inheritance
    class Hatback extends Car
    {
        const MSG = "Thank you for visiting Hatchback calss!"; //Constant
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
    echo Hatback::MSG;  //Accessing constant from out class

    //array of objects
    $cars = array($bmw, $kwid);
    echo "<br>The cars in our inventory:";
    foreach ($cars as $x) {
        echo "<br>{$x->name}";
    }

    ?>
</body>

</html>