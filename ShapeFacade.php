<?php

class ShapeFacade{
        private $square;
        private $circle;
        private $retangle;

        public function __constract(){
                $this->square = new     Square();
                $this->circle = new Circle();
                $this->retangle = new Retangel();
        }

        public function drawSquare(){
                $this->square->draw();
        }

        public function drawCircle(){
                $this->circle->draw();
        }

        public function drawRetangle(){
                $this->retangle->draw();
        }
}