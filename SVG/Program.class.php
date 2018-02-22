<?php
class Program {
    public function run(SvgRenderer $renderer){ //class inection

        echo "Program is running...";

    $rectangle1 = new Rectangle();
  	$rectangle1->setLocation(20, 20);
  	$rectangle1->setSize(100, 100);
  	$rectangle1->setColor('red');
    $rectangle1->setOpacity ('0,5');
    $rectangle1->draw($renderer);

    $circle = new Circle();
  	$circle->setLocation(0,0);
  	$circle->setRadius(100, 100);
  	$circle->setColor('red');
    $circle->setOpacity ('0,7');
    $circle->draw($renderer);

    print_r($rectangle1);
    print_r($circle);
        //
        //$renderer->drawRectangle(50, 50, 50, 50, 'blue', 0.5);
        //$renderer->drawRectangle(50, 10, 40, 60, 'red', 0.7);

        $renderer->run();
    }

    

}
?>
