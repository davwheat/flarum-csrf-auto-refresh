<?php

/*
 * This file is part of davwheat/csrf-auto-keepalive.
 *
 * Copyright (c) 2022 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\CsrfAutoKeepalive;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js'),

    (new Extend\Routes('api'))
        ->post('/csrf-keepalive', 'davwheat-csrf-auto-keepalive.csrf-keepalive', Api\Controller\RefreshCsrfToken::class),

    (new Extend\ApiSerializer(\Flarum\Api\Serializer\ForumSerializer::class))
        ->attributes(ForumAttributes::class),
];
