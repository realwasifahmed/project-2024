<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Address;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $content;

    /**
     * Create a new message instance.
     */
    public function __construct($content)
    {
        $this->$content = $content;
    }

    /**
     * Build the message.
     */
    public function build(): Mailable
    {
        return $this
            ->subject('Welcome To Sound Group')
            ->from(new Address('info@soundgroup.com', 'Sound Group'))
            ->markdown('emails.RegisterMail');
    }

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
