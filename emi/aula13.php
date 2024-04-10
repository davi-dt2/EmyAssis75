<?php

class car {
    public $color;
    public $model;
    public function __construct ($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$mycar = new car ("red", "volvo");

foreach ($mycar as $x => $y) {
    echo "$x: $y <br>";
}

?>