<?php

use App\Services\Hook;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
    Hook::addScriptFileToPage(plugin('language-fix')->assets('js/language-fix.js'), ['*'],9999);
};
