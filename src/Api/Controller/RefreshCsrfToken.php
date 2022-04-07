<?php

namespace Davwheat\CsrfAutoRefresh\Api\Controller;

use Davwheat\CsrfAutoRefresh\Api\Serializer\CsrfTokenSerializer;
use Flarum\Api\Controller\AbstractShowController;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;

class RefreshCsrfToken extends AbstractShowController
{
    /**
     * {@inheritdoc}
     */
    public $serializer = CsrfTokenSerializer::class;

    /**
     * {@inheritdoc}
     */
    public function data(ServerRequestInterface $request, Document $document)
    {
        $csrfToken = $request->getAttribute('session')->token();

        return ['token' => $csrfToken];
    }
}
