<?php
class Vec3 {
  
  public float $x, $y, $z;
  
  public function __construct($x, $y, $z) {
    $this->x = $x;
    $this->y = $y;
    $this->z = $z;
  }
  
  public function add(Vec3 $v):Vec3 {
    return new Vec3(
      $this->x + $v->x,
      $this->y + $v->y,
      $this->z + $v->z
    );
  }
  
  public function _add(Vec3 $v):void {
    $this->x += $v->x;
    $this->y += $v->y;
    $this->z += $v->z;
  }
  
  public function sub(Vec3 $v):Vec3 {
    return new Vec3(
      $this->x - $v->x,
      $this->y - $v->y,
      $this->z - $v->z
    );
  }
  
  public function _sub(Vec3 $v):void {
    $this->x -= $v->x;
    $this->y -= $v->y;
    $this->z -= $v->z;
  }
  
  public function mul($scalar):Vec3 {
    return new Vec3(
      $this->x * $scalar,
      $this->y * $scalar,
      $this->z * $scalar
    );
  }
  
  public function _mul($scalar):void {
    $this->x *= $scalar;
    $this->y *= $scalar;
    $this->z *= $scalar;
  }
  
  public function div($value):Vec3 {
    return new Vec3(
      $this->x / $value,
      $this->y / $value,
      $this->z / $value
    );
  }
  
  public function _div($scalar):void {
    $this->x /= $scalar;
    $this->y /= $scalar;
    $this->z /= $scalar;
  }
  /*  TODO: lerp function
  public function lerp(Vec3 $v, $value):Vec3 {
    return new Vec3(
      lerp($this->x, $v->x, $value),
      lerp($this->y, $v->y, $value),
      lerp($this->z, $v->z, $value)
    );
  }
  */
  public function dot(Vec3 $v):float {
    return $this->x * $v->x + $this->y * $v->y + $this->z * $v->z;
  }
  
  public function cross(Vec3 $v):Vec3 {
    return new Vec3(
      $this->y * $v->z - $this->z * $v->y,
      $this->z * $v->x - $this->x * $v->z,
      $this->x * $v->y - $this->y * $v->x
    );
  }
  
  public function mag():float {
    return sqrt($this->dot($this));
  }
  
  public function normal():Vec3 {
    return $this->div($this->mag());
  }
  
  public function normalize():void {
    $this->_div($this->mag());
  }
  
  public function __toString() {
    return 'Vec3('.$this->x.', '.$this->y.', '.$this->z.')';
  }
  
}
?>
