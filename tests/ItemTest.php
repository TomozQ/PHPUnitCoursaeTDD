<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
  public function testDescriptionIsNotEmpty()
  {
    $item = new App\Item;

    $this->assertNotEmpty($item->getDescription());
  } 

  public function testIdisAnItenger()
  {
    $item = new App\ItemChild;

    $this->assertIsInt($item->getId());
  }

  public function testTokenIsAString()
  {
    $item = new App\Item;

    $reflector = new ReflectionClass(App\Item::class);
    
    $method = $reflector->getMethod("getToken");
    $method->setAccessible(true);

    $result = $method->invoke($item);

    $this->assertIsString($result);
  }
}