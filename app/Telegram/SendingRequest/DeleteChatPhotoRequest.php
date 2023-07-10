<?php

namespace App\Telegram\SendingRequest;
use SergiX44\Nutgram\Nutgram;

class DeleteChatPhotoRequest
{
    public function __invoke(Nutgram $bot)
    {

        
        $bot->deleteChatPhoto(-1001400489128);
    }
}