<?php

namespace App\Notifications;


use Illuminate\Support\Carbon;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class UserVerifyEmail extends VerifyEmail
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $verificationUrl = $this->verificationUrl($notifiable);        

        return $this->buildMailMessage($verificationUrl);
    }

    protected function buildMailMessage($url)
    {
        return (new MailMessage)
            ->subject(Lang::get('Verify Email Address'))
            ->greeting(Lang::get('Welcome to '.config('app.name')))
            ->line(Lang::get('You\'re in the right place. We offer smart investment opportunities designed to help you grow your portfolio.'))
            ->line(Lang::get('Backed by real-time market insights and next-gen technology, we\'ve consistently delivered strong returns to our investors.'))
            ->line(Lang::get('To get started, please verify your email to secure your account and access personalized services.'))            
            ->action(Lang::get('Verify your email'), $url)
            ->line(Lang::get('If you didn\'t create this account, no action is needed and you can safely ignore this message.'));
    }

    protected function verificationUrl($notifiable)
    {                
         // Generate the original signed URL
        $signedUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );

        // Create a short token
        $token = Str::random(40);

        // Store the signed URL in cache using the token
        Cache::put("email_verification:{$token}", $signedUrl, now()->addMinutes(60));

        // Return a clean short URL
        return url("/v/{$token}");
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
