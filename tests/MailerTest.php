<?php

use PHPUnit\Framework\TestCase;

class MailerTest extends TestCase
{
  public function testSendMessageReturnsTrue()
  {
    $this->assertTrue(App\Mailer::send("dev@example.com","Hello!"));
  }

  public function testInvaliudArgumentExceptionIfmailIsEmpty()
  {
    $this->expectException(InvalidArgumentException::class);

    App\Mailer::send("","");
  }
}