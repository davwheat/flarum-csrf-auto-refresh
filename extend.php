<?php

/*
 * This file is part of davwheat/csrf-auto-refresh.
 *
 * Copyright (c) 2022 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\CsrfAutoRefresh;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js'),
    (new Extend\Routes('api'))
        ->post('/csrf-refresh', 'davwheat-csrf-auto-refresh.csrf-refresh', Api\Controller\RefreshCsrfToken::class),
];
