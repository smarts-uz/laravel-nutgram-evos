<?php
/** @var SergiX44\Nutgram\Nutgram $bot */

use App\Telegram\Commands\Startsection;
use App\Telegram\InlineButtons\InstallClass;
use App\Telegram\InlineMenu\BulkMessengerClass;
use App\Telegram\InlineMenu\ConversationClass;
use App\Telegram\InlineMenu\ExtendClass;
use App\Telegram\InlineMenu\GettingUpdateClass;
use App\Telegram\InlineMenu\HandlerClass;
use App\Telegram\InlineMenu\InlineMenuClass;
use App\Telegram\InlineMenu\IntroductionClass;
use App\Telegram\InlineMenu\KeyboardClass;
use App\Telegram\InlineMenu\MiddlewareClass;
use App\Telegram\InlineMenu\SendingRequestClass;
use App\Telegram\MainClass\MainClass;
use App\Telegram\Testing\TestingClass;
use SergiX44\Nutgram\Nutgram;

/*
|--------------------------------------------------------------------------
| Nutgram Handlers
|--------------------------------------------------------------------------
|
| Here is where you can register telegram handlers for Nutgram. These
| handlers are loaded by the NutgramServiceProvider. Enjoy!
|
*/

$bot->onCommand('start', MainClass::class );

$bot->onText('Introduction', [IntroductionClass::class, 'sections'] );
$bot->onText('Getting Updates', [GettingUpdateClass::class, 'sections']);
$bot->onText('Sending Requests', [SendingRequestClass::class, 'sections']);
$bot->onText('Handlers', [HandlerClass::class, 'sections']);
$bot->onText('Middleware', [MiddlewareClass::class, 'sections']);
$bot->onText('Keyboards', [KeyboardClass::class, 'sections']);
$bot->onText('Conversations', [ConversationClass::class, 'sections']);
$bot->onText('Inline Menu', [InlineMenuClass::class, 'sections']);
$bot->onText('Extend', [ExtendClass::class, 'sections']);
$bot->onText('Bulk Messenger', [BulkMessengerClass::class, 'sections']);
$bot->onText('Testing', [TestingClass::class, 'sections']);

// Inline buttons clicked

//$bot->onText('Install', [InstallClass::class, 'btns']);
