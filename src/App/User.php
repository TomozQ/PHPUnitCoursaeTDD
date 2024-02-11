<?php

namespace App;

/**
 * User
 * 
 * An example user class
 */
class User
{
  /**
   * Email address
   * @var string
   */
  public $email;

  protected $mailer;

  /**
   * Constructor
   * 
   * @param string $email The user's email
   * 
   * @return void
   */
  public function __construct(string $email)
  {
    $this->email = $email;
  }

  public function setMailer(Mailer $mailer)
  {
    $this->mailer = $mailer;
  }

  /**
   * Send the user a message
   * @param string $message The message
   * 
   * @return boolean
   */
  public function notify(string $message)
  {
    return $this->mailer::send($this->email, $message);
  }
}