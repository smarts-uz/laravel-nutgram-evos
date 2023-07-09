<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Telegram\InlineMenu;



use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class InlineMenuClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsani tanlang', [
                'reply_markup' => InlineKeyboardMarkup::make()
                    ->addRow(
                        InlineKeyboardButton::make('Methods', callback_data: 'method'),
                        InlineKeyboardButton::make('Example', callback_data: 'example')
                    )
                    ->addRow(
                        InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),

                    )
            ]
        );
    }
}

