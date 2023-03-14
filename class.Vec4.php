<?php
class Vec4 {
  
  public $x, $y, $z, $w;
  
  public function __construct($x, $y, $z, $w) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
    $this->w = $w;
  }
  
  public function add(Vec4 $v):Vec4 {
    return new Vec4(
      $this->x + $v->x,
      $this->y + $v->y,
      $this->z + $v->z,
      $this->w + $v->w
    );
  }
  
  public function _add(Vec4 $v):void {
    $this->x += $v->x;
    $this->y += $v->y;
    $this->z += $v->z;
    $this->w += $v->w;
  }
  
  public function sub(Vec4 $v):Vec4 {
    return new Vec4(
      $this->x - $v->x,
      $this->y - $v->y,
      $this->z - $v->z,
      $this->w - $v->w
    );
  }
  
  public function _sub(Vec4 $v):void {
    $this->x -= $v->x;
    $this->y -= $v->y;
    $this->z -= $v->z;
    $this->w -= $v->w;
  }
  
  public function mul($scalar):Vec4 {
    return new Vec4(
      $this->x * $scalar,
      $this->y * $scalar,
      $this->z * $scalar,
      $this->w * $scalar
    );
  }
  
  public function _mul($scalar):void {
    $this->x *= $scalar;
    $this->y *= $scalar;
    $this->z *= $scalar;
    $this->w *= $scalar;
  }
  
  public function div($scalar):Vec4 {
    return new Vec4(
      $this->x / $scalar,
      $this->y / $scalar,
      $this->z / $scalar,
      $this->w / $scalar
    );
  }
  
  public function _div($scalar):void {
    $this->x /= $scalar;
    $this->y /= $scalar;
    $this->z /= $scalar;
    $this->w /= $scalar;
  }
  
  public function lerp(Vec4 $v, $value):Vec4 {
    return new Vec4(
      lerp($this->x, $v->x, $value),
      lerp($this->y, $v->y, $value),
      lerp($this->z, $v->z, $value),
      lerp($this->w, $v->w, $value)
    );
  }
  
  public function dot(Vec4 $v):float {
    return $this->x * $v->x + $this->y * $this->y + $this->z * $this->z + $this->w * $this->w;
  }
  
  public function mag():float {
    return sqrt($this->dot($this));
  }
  
  public function normal():Vec4 {
    return $this->div($this->mag());
  }
  
  public function normalize():void {
    $this->_div($this->mag());
  }
  
  public function __toString() {
    return 'Vec4('.$this->x.', '.$this->y.', '.$this->z.', '.$this->w.')';
  }
  
}
?>