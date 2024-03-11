<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgetPassword4 extends Mailable
{
    use Queueable, SerializesModels;

    protected $User;
    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        // $this->User = $User;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Forget Password4',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {

        return new Content(
            markdown: 'Auth.EmailPass',
            with: [
                'user' => $this->User,
            ],
        );
    }
    // public function build()
    // {
    //     return $this->subject('Password Reset Request ')
    //         ->view('auth.EmailPass', [
    //             'token' => $this->token,
    //             'email' => $this->email,
    //         ]);
    // }
    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
