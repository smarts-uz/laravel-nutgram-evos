<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\Telegram\Testing;



use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class TestingClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsani tanlang', [
                'reply_markup' => InlineKeyboardMarkup::make()
                    ->addRow(
                        InlineKeyboardButton::make('Introduction', callback_data: 'test_introduction'),
                        InlineKeyboardButton::make('Hearing updates', callback_data: 'hearing_updates')
                    )
                    ->addRow(
                        InlineKeyboardButton::make('Mock incoming responses', callback_data: 'test_responses'),
                        InlineKeyboardButton::make('Available Assertions', callback_data: 'available_assertions')
                    )
                    ->addRow(
                        InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),

                    )
            ]
        );
    }
}

