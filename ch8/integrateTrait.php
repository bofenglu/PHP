<?php
trait Hello {
  public function sayHello() {
      echo 'Hello ';
  }
}
trait world {
    public function sayWorld() {
        echo 'World';
    }
}
trait HelloWorld{
    use Hello, World;
}
class MyWorld{
    use HelloWorld;
}
class MyWorld{
    use HelloWorld;
}
$world = new MyWorld();
echo $world->sayHello() . " " . $world->sayWorld(); //Hello World
?>
