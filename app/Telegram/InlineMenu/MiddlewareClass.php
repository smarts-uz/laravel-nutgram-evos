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

class MiddlewareClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsni tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Passing data', callback_data: 'passing'),
                    InlineKeyboardButton::make('Before & After', callback_data: 'before_after')
                )
                ->addRow(
                    InlineKeyboardButton::make('Skipping global middlewares', callback_data: 'global'),
                    InlineKeyboardButton::make('OOP', callback_data: 'oop')
                )
                ->addRow(
                    InlineKeyboardButton::make('Get current handlers ', callback_data: 'current'),
                    InlineKeyboardButton::make('Grouping', callback_data: 'grouping')
                )
                ->addRow(
                    InlineKeyboardButton::make('Flow', callback_data: 'flow'),
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),
                )
        ]);
    }
}
