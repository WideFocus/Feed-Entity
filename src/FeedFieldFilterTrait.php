<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Implements FeedFieldFilterInterface.
 */
trait FeedFieldFilterTrait
{
    /**
     * @var string
     */
    private $type = '';

    /**
     * @var ParameterBagInterface
     */
    private $parameters;

    /**
     * @var int
     */
    private $sortOrder = 0;

    /**
     * Get the filter type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the filter type.
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * Get the parameters.
     *
     * @return ParameterBagInterface
     */
    public function getParameters(): ParameterBagInterface
    {
        return $this->parameters;
    }

    /**
     * Set the parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setParameters(ParameterBagInterface $parameters)
    {
        $this->parameters = $parameters;
    }
}
