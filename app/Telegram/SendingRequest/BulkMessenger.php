<?php


namespace App\Telegram\SendingRequest;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Message\Message;

class BulkMessenger
{
    public function __invoke(Nutgram $bot): void
    {
        $chats = [1305723427,-1001400489128];

        $bot->getBulkMessenger()
        ->setChats($chats)
        ->setText('Hello!')
        ->setOpt([/* optional parameters */])
        ->startSync();
    }
}