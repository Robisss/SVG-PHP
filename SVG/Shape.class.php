<?php
    class Shape {
        public $height;
        public $width;
        public $x;
        public $y;
        public $color;
        public $opacity;
        public $radius;

        public function setRadius($radius){
            $this->$radius;
        }

        public function setLocation($x, $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function setColor($color){
            $this->color = $color;
}
        public function setOpacity($opacity){

            $this->opacity = $opacity;
        }
    }
 ?>
