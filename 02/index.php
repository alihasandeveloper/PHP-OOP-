<?php

class Foo {

    public $color;

    public function set_color($color) {
        $this->color = $color;
    }

    public function get_color () {
        return $this->color;
    }
}

$obj = new Foo();
$obj->set_color(color: "Red");
echo($obj->get_color());



