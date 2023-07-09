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

class ConversationClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsni tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Concept', callback_data: 'concept'),
                    InlineKeyboardButton::make('Creating Conversations', callback_data: 'creating_conversations')
                )
                ->addRow(
                    InlineKeyboardButton::make('Begin a Conversation', callback_data: 'begin_conversation'),
                    InlineKeyboardButton::make('Funnel Escaping', callback_data: 'funnel_escaping')
                )
                ->addRow(
                    InlineKeyboardButton::make('Middleware ', callback_data: 'con_middleware'),
                    InlineKeyboardButton::make('Ending a conversation', callback_data: 'ending_conversation')
                )
                ->addRow(
                    InlineKeyboardButton::make('Procedural Usage', callback_data: 'procedural_usage'),
                    InlineKeyboardButton::make('Inline Usage', callback_data: 'inline_usage'),
                )
                ->addRow(
                    InlineKeyboardButton::make('Advanced', callback_data: 'advanced'),
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),
                )
        ]);
    }
}
