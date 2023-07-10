<?php


namespace App\Telegram\SendingRequest;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Attributes\ParseMode;

use SergiX44\Nutgram\Telegram\Types\Message\Message;

class FormattingOptions
{
    public function __invoke(Nutgram $bot)
    {
      $message = $bot->sendMessage('* Hi Xasan*', [
         
            'parse_mode' => ParseMode::MARKDOWN,
        ]);

        $message = $bot->sendMessage('<i>Hi  Xusan</i>', [
    
          'parse_mode' => ParseMode::HTML,
        ]);
    }
}
