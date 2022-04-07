<?php

/*
 * This file is part of davwheat/session-keepalive.
 *
 * Copyright (c) 2022 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\SessionKeepalive;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js'),

    (new Extend\Routes('api'))
        ->post('/csrf-keepalive', 'davwheat-session-keepalive.csrf-keepalive', Api\Controller\RefreshCsrfToken::class),

    (new Extend\ApiSerializer(\Flarum\Api\Serializer\ForumSerializer::class))
        ->attributes(ForumAttributes::class),
];
