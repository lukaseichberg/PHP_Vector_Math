<?php
class Vec2 {
  
  public $x, $y;
  
  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }
  
  public function add(Vec2 $v):Vec2 {
    return new Vec2(
      $this->x + $v->x,
      $this->y + $v->y
    );
  }
  
  public function _add(Vec2 $v):void {
    $this->x += $v->x;
    $this->y += $v->y;
  }
  
  public function sub(Vec2 $v):Vec2 {
    return new Vec2(
      $this->x - $v->x,
      $this->y - $v->y
    );
  }
  
  public function _sub(Vec2 $v):void {
    $this->x -= $v->x;
    $this->y -= $v->y;
  }
  
  public function mul($scalar):Vec2 {
    return new Vec2(
      $this->x * $scalar,
      $this->y * $scalar
    );
  }
  
  public function _mul($scalar):void {
    $this->x *= $scalar;
    $this->y *= $scalar;
  }
  
  public function div($scalar):Vec3 {
    return new Vec2(
      $this->x / $scalar,
      $this->y / $scalar
    );
  }
  
  public function _div($scalar):void {
    $this->x /= $scalar;
    $this->y /= $scalar;
  }
  
  public function lerp(Vec2 $v, $value) {
    return new Vec2(
      lerp($this->x, $v->x, $value),
      lerp($this->y, $v->y, $value)
    );
  }
  
  public function dot(Vec2 $v):float {
    return $this->x * $v->x + $this->y * $v->y;
  }
  
  public function mag():float {
    return sqrt($this->dot($this));
  }
  
  public function normal() {
    return $this->div($this->mag());
  }
  
  public function normalize() {
    $this->_div($this->mag());
  }
  
  public function __toString() {
    return 'Vec2('.$this->x.', '.$this->y.')';
  }
  
}
?>