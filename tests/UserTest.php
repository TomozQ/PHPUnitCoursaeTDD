<?php

use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
  public function tearDown(): void
  {
    Mockery::close();
  }

  public function testNotifyReturnTrue()
  {
    $user = new App\User('dave@example.com');

    $mock = Mockery::mock('alias:Mailer');

    $mock->shouldReceives('send')
          ->once()
          ->with($user->email, 'Hello')
          ->andReturn(true);
    
    $this->assertTrue($user->notify('Hello'));
  }
}