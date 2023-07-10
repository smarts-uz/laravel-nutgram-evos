<?php

namespace App\Telegram\SendingRequest;
use SergiX44\Nutgram\Nutgram;

class LeaveChatRequest
{
    public function __invoke(Nutgram $bot)
    {
        $bot->sendMessage('You leaved chat');
        $bot->leaveChat(-1001400489128);

    }
}