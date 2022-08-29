<?php

namespace NotificationChannels\ExpoPushNotifications\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ExpoNotificationSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The response from Expo
     * 
     * @var array
     */
    public $response;

    /**
     * The interests where the notification was sent to
     * 
     * @var array
     */
    public $interests;

    /**
     * ExpoNotificationSent constructor.
     *
     * @param  array  $response
     */
    public function __construct(array $interests = array(), array $response = array())
    {
        $this->interests = $interests;
        $this->response = $response;
    }
}
