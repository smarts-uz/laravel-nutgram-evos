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

use App\Telegram\InlineButtons\GettingUpdates\CustomaizeClass;
use App\Telegram\InlineButtons\GettingUpdates\PollingClass;
use App\Telegram\InlineButtons\GettingUpdates\RetrievingUpdatesClass;
use App\Telegram\InlineButtons\GettingUpdates\WebhookClass;
use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class GettingUpdateClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsni tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Polling', callback_data: 'polling'),
                    InlineKeyboardButton::make('Webhook', callback_data: 'webhook')
                )
                ->addRow(
                    InlineKeyboardButton::make('Customization', callback_data: 'customization'),
                    InlineKeyboardButton::make('Retrieving updates', callback_data: 'updates')
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),

                )
        ]);

        $bot->onCallbackQueryData('polling', PollingClass::class);
        $bot->onCallbackQueryData('webhook', WebhookClass::class);
        $bot->onCallbackQueryData('customization', CustomaizeClass::class);
        $bot->onCallbackQueryData('updates', RetrievingUpdatesClass::class);
    }
}
