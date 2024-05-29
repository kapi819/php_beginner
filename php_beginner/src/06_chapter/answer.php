<?php
class Runteq {
    # === 以下に記載 ===
    private $name;
    
    public function __construct($name = 'らんてくん'){
      $this->name = $name;
    }
    
    public function name() {
      return $name;
    }
    
    public function decide() {
      return "{$this->name}はRUNTEQで学習してエンジニアになるぞ！";
    }
}

$runteq = new Runteq();
print $runteq->decide();

$runteqWithName = new Runteq('ロボらんてくん');
print $runteqWithName->decide();
?>

<?php
class Earth {
    public static function cleanse() {
        return '地球はキレイになりました';
    }
}

print Earth::cleanse();
?>

<?php
class Shape {
    # === 以下に記載 ===
    private $bottom;
    private $height;
    
    public function __construct($bottom, $height) {
      $this->bottom = $bottom;
      $this->height = $height;
    }
    
    private function triangleCalculate() {
      return ($this->bottom) * ($this->height) / 2;
    }
    
    private function squareCalculate() {
      return ($this->bottom) * ($this->height);
    }
    
    public function report() {
      return "底辺{$this->bottom}、高さ{$this->height}の場合、三角形の面積は{$this->triangleCalculate()} 四角形の面積は{$this->squareCalculate()}";
    }
}

$shape = new Shape(10, 5);
print $shape->report();
?>

<?php
class Engineer { 
    protected $name;

    function __construct($name) {
        $this->name = $name;
    }
}

class BackendEngineer extends Engineer {
    public function identify() {
        return "{$this->name}はバックエンドエンジニアです";
    }
}

$engineer = new BackendEngineer('らんてくん');
print $engineer->identify();
?>

$engineer = new BackendEngineer('らんてくん');
print $engineer->identify();
?>
