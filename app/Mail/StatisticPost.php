<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class StatisticPost extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Statistic Post',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        $countPosts = count(Post::daily()->get()) ?? '0';
        $countComments = count(Comment::daily()->get()) ?? '0';
        $countLikes = count(Like::daily()->get()) ?? '0';

        return new Content(
            view: 'mail.statistic_post',
            with: [
                'countNewPosts' => $countPosts,
                'countNewComments' => $countComments,
                'countNewLikes' => $countLikes,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
