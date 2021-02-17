<?php

function FibonacciNumbers($number) {
    static $cache = [0,1];
    $count = count($cache);
    if ($number > $count-1) {
      for ($i = 2; $i <= $number; $i++) {
          $cache[$i] = $cache[$i-1] + $cache[$i-2];
      }
    }
    
    $result = $cache[$number];
    return $result;
    
}

for ($i = 0; $i <= 64; $i++) {
	echo FibonacciNumbers($i) . "; ";
}

class Rectangle {
  protected int $width;
  protected int $height;
  
  public function __construct() {
      $this->width = rand(1, 1000);
      $this->height = rand(1, 1000);
  }
  
  public function area(){
      return $this->width * $this->height;
  }
}

class Circle {
  protected int $radius;
  
  public function __construct() {
      $this->radius = rand(1, 1000);
  }
  
  function area(){
      return ($this->radius ** 2) * M_PI;
  }
}

class Triangle {
  protected int $a;
  protected int $b;
  protected int $c;
  
  public function __construct() {
      $this->a = rand(1, 1000);
      $this->b = rand(1, 1000);
      $this->c = rand(abs($this->a - $this->b) + 1, ($this->a + $this->b) - 1);
  }
  
  function area(){
      $p = ($this->a + $this->b + $this->c) / 2;
      return sqrt($p * ($p-$this->a) * ($p-$this->b) * ($p-$this->c));
  }
}
$objects = array(new Rectangle(), new Circle(), new Triangle());
$objectToFile = serialize($objects);

file_put_contents("object", $objectToFile);
$fileToObject = unserialize(file_get_contents("object"));

for ($i=0; $i < count($fileToObject); $i++) { 
  $new[$i] = $fileToObject[$i]->area();
}

rsort($new);
for ($i=0; $i < count($new); $i++) { 
  echo "<br>" . $new[$i] . ";";
}
?>

