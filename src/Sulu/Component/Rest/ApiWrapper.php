<?php

/*
 * This file is part of the Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Rest;

use JMS\Serializer\Annotation\Exclude;

/**
 * The abstract base class for an API object, which wraps another entity.
 */
class ApiWrapper
{
    /**
     * the entity which is wrapped by this class.
     *
     * @var object
     * @Exclude
     */
    protected $entity;

    /**
     * the locale in which the wrapped entity should be expressed.
     *
     * @var string
     * @Exclude
     */
    protected $locale;

    public function getEntity()
    {
        return $this->entity;
    }
}
