<?php

namespace App\Telegram\SendingRequest;
use SergiX44\Nutgram\Nutgram;

class SetPhotoRequest
{
    public function __invoke(Nutgram $bot)
    {

        $voice = fopen('public/img/logo.png', 'r+');
        $bot->setChatPhoto(-1001400489128,$voice);
    }
}