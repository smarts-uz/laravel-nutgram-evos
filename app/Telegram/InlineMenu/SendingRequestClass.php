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

use App\Telegram\InlineButtons\SendingRequests\AvailableClass;
use App\Telegram\InlineButtons\SendingRequests\DownloadingClass;
use App\Telegram\InlineButtons\SendingRequests\FormattingClass;
use App\Telegram\InlineButtons\SendingRequests\UploadingClass;
use SergiX44\Nutgram\Conversations\InlineMenu;
use SergiX44\Nutgram\Nutgram;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardButton;
use SergiX44\Nutgram\Telegram\Types\Keyboard\InlineKeyboardMarkup;

class SendingRequestClass extends InlineMenu
{
    public function sections(Nutgram $bot)
    {
        $bot->sendMessage('Darsni tanlang', [
            'reply_markup' => InlineKeyboardMarkup::make()
                ->addRow(
                    InlineKeyboardButton::make('Uploading', callback_data: 'uploading'),
                    InlineKeyboardButton::make('Downloading', callback_data: 'downloading')
                )
                ->addRow(
                    InlineKeyboardButton::make('Formatting', callback_data: 'formatting'),
                    InlineKeyboardButton::make('Available', callback_data: 'available')
                )
                ->addRow(
                    InlineKeyboardButton::make('Chiqish', callback_data: 'chiqish'),

                )
        ]);

        $bot->onCallbackQueryData('uploading', UploadingClass::class);
        $bot->onCallbackQueryData('downloading', DownloadingClass::class);
        $bot->onCallbackQueryData('formatting', FormattingClass::class);
        $bot->onCallbackQueryData('available', AvailableClass::class);
    }
}
