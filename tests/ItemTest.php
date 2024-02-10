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
    $item = new App\Item;

    $this->assertIsInt($item->getId());
  }
}