<?php

require_once "./Shape.php";
require_once "./Square.php";
require_once "./Circle.php";
require_once "./Retangle.php";
require_once "./ShapeFacade.php";

class User_Two{
        public function __constract(){

                /*
                $square = new Square();
                $circle  = new Circle();
                $retangle = new Retangle();

                $square->draw();
                echo "<br/>";
                $circle->draw();
                echo "<br/>";
                $retangle->draw();
                */

                $obj = new ShapeFacade();
                $obj->drawSquare();
                echo "<br/>";
                $obj->drawCircle();
                echo "<br/>";
                $obj->drawRetangle();
                echo "<br/>";
        }
}