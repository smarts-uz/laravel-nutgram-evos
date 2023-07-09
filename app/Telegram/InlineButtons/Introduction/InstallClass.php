<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Telegram\InlineButtons\Introduction;

use SergiX44\Nutgram\Nutgram;

class InstallClass
{
    public function __invoke(Nutgram $bot):void
    {

       $bot->answerCallbackQuery([
            'text' => 'Darslar tez kunda yuklanadi'
        ]);
    }
}
