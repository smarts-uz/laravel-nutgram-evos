<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Telegram\MainClass;


use App\Interface\MenuInterface;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;
class MainClass
{


   public function __invoke(Nutgram $bot):void
   {
       $kb = ['reply_markup'=>[
           'keyboard' => [
               [
                   ['text' =>'Introduction'],
                   ['text' => 'Getting Updates']
               ],
               [
                   ['text' => 'Sending Requests'],
                   ['text' => 'Handlers']
               ],
               [
                    ['text' => 'Middleware'],
                    ['text' => 'Keyboards']
               ],
               [
                   ['text' => 'Conversations'],
                   ['text' => 'Inline Menu']
               ],
               [
                   ['text' => 'Extend'],
                   ['text' => 'Bulk Messenger']
               ],
               [
                    ['text' => 'Testing']
               ]
           ], 'resize_keyboard' => true
       ]];
    $bot->sendMessage('Bo\'limni tanlang', $kb);
   }
}
