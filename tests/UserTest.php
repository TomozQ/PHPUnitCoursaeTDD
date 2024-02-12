<?php

use PHPUnit\Framework\TestCase;
class UserTest extends TestCase
{
  public function testNotifyReturnsTrue()
  {
    $user = new App\User('dev@example.com');

    // $mailer = new App\Mailer;
    // $mailer = $this->createMock(App\Mailer::class);

    // $mailer->expects($this->once())
    //        ->method('send')
    //        ->willReturn(true);

    // $user->setMailer($mailer);

    $user->setMailerCallable(function() {
      echo "mocked";

      return true;
    });

    $this->assertTrue($user->notify('Hello!'));
  }
}