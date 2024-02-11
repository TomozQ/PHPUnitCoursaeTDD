<?php

use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
  public function testNotifyReturnsTrue()
  {
    $user = new App\User('dev@example.com');

    // $mailer = new App\Mailer;
    $mailer = $this->createMock(App\Mailer::class);

    $user->setMailer($mailer);

    $this->assertTrue($user->notify('Hello!'));
  }
}