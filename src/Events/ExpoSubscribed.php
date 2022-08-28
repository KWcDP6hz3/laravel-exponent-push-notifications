<?php

namespace NotificationChannels\ExpoPushNotifications\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExpoSubscribed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The response from Expo
     * 
     * @var string
     */
    public $token;

    /**
     * ExpoSubscribed constructor.
     *
     * @param  string  $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }
}
