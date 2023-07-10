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


use App\Telegram\InlineButtons\Handlers\AutomaticallyRegisterBotCommandsClass;
use App\Telegram\InlineButtons\Handlers\AvailableHandlersClass;
use App\Telegram\InlineButtons\Handlers\ConceptClass;
use App\Telegram\InlineButtons\Handlers\HandlersPriorityClass;
use App\Telegram\InlineButtons\Handlers\OOPClass;
use App\Telegram\InlineButtons\Handlers\PersistingDataClass;
use App\Telegram\InlineButtons\Handlers\SpecificSpecialHandlersClass;
use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class HandlerClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsni tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Concept', callback_data: 'concept'),
                    InlineKeyboardButton::make('Available Handlers', callback_data: 'available')
                )
                ->addRow(
                    InlineKeyboardButton::make('Specific & Special Handlers', callback_data: 'specific'),
                    InlineKeyboardButton::make('Handlers Priority', callback_data: 'priority')
                )
                ->addRow(
                    InlineKeyboardButton::make('Automatically register bot commands', callback_data: 'automatic'),
                    InlineKeyboardButton::make('OOP', callback_data: 'oop')
                )
                ->addRow(
                    InlineKeyboardButton::make('Persisting data', callback_data: 'persisting'),
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),
                )
        ]);

        $bot->onCallbackQueryData('concept', ConceptClass::class);
        $bot->onCallbackQueryData('available', AvailableHandlersClass::class);
        $bot->onCallbackQueryData('specific', SpecificSpecialHandlersClass::class);
        $bot->onCallbackQueryData('priority', HandlersPriorityClass::class);
        $bot->onCallbackQueryData('automatic', AutomaticallyRegisterBotCommandsClass::class);
        $bot->onCallbackQueryData('oop', OOPClass::class);
        $bot->onCallbackQueryData('persisting', PersistingDataClass::class);
    }
}
