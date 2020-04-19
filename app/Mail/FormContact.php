<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class FormContact extends Mailable
{
    use Queueable, SerializesModels;

    public $param;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $param)
    {
        $this->param = $param;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->param->email);
        return $this->from($this->param->email, $this->param->nama)
            ->replyTo($this->param->email, $this->param->nama)
            ->subject($this->param->judul_pesan)
            ->view('emails.form_contact')
            ->with([
                'nama' => $this->param->nama,
                'pesan' => $this->param->pesan
            ]);
    }
}
