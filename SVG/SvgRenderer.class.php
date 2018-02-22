<?php
class SvgRenderer {
    public $elements;
    //buna iskviestas vos tik sukuriamas SvgRenderer objektas
    function __construct(){
            $this->elements = [];
    }

    //Draws rectangle
    public function drawRectangle ($x, $y, $width, $height, $color, $opacity) {
    $svg = '<rect x="'.$x.'"Y="'.$y.'"width ="'.$width.'"height ="'.$height.'"color = "'.$color.'"opacity = "'.$opacity.'"/>';
    //echo $svg;
    array_push($this->elements, $svg);
}

//Draws circle
public function drawCircle ($radius, $color, $opacity) {
$svg = '<circle radius="'.$radius.'"color = "'.$color.'"opacity = "'.$opacity.'"/>';
//echo $svg;
array_push($this->elements, $svg);
}

    //runs graphic engine
    public function run(){
        //echo "engine is running...";
        $svg = '<svg width ="500" height = "500">';
        $svg .= implode('',$this->elements);
        $svg .= '</svg>';
        print_R($this->elements);
    }

}
?>
