<?php
    class Rectangle extends Shape {

        public $width;
        public $height;
        


        public function draw(SvgRenderer $renderer)
        {
            $renderer->drawRectangle($this->x,$this->y, $this->width, $this->height,$this->color,$this->opacity);
            # code...
        }

        public function setLocation($x, $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function setSize($width, $height){
            $this->height = $height;
            $this->widthy = $width;
        }
        public function setColor($color){
            $this->color = $color;
}
        public function setOpacity($opacity){

            $this->opacity = $opacity;
        }
    }
 ?>
