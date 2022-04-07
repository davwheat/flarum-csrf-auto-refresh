<?php

namespace Davwheat\CsrfAutoRefresh\Api\Serializer;

use Flarum\Api\Serializer\AbstractSerializer;
use InvalidArgumentException;

class CsrfTokenSerializer extends AbstractSerializer
{
    /**
     * {@inheritdoc}
     */
    protected $type = 'csrf-auto-refreshes';

    /**
     * {@inheritdoc}
     */
    public function getId($model)
    {
        return 1;
    }

    /**
     * {@inheritdoc}
     *
     * @param CsrfAutoRefresh $model
     * @throws InvalidArgumentException
     */
    protected function getDefaultAttributes($model)
    {
        return [
            'token' => $model['token'],
        ];
    }
}
