<?php
namespace App\Mail;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class RequestForAccount extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
	 public $userdetails;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $userdetails)
    {
        $this->user = $user;
		$this->userdetails= $userdetails;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->subject('Request for new account')->view('emails.request_for_new_account');
    }
}