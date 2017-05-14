<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Implements FeedInterface.
 */
trait FeedTrait
{
    /**
     * @var string
     */
    private $sourceType = '';

    /**
     * @var ParameterBagInterface
     */
    private $sourceParameters;

    /**
     * @var string
     */
    private $writerType = '';

    /**
     * @var ParameterBagInterface
     */
    private $writerParameters;

    /**
     * @var FeedFieldInterface[]
     */
    private $fields = [];

    /**
     * @var FeedConditionInterface[]
     */
    private $conditions = [];

    /**
     * Get the source type.
     *
     * @return string
     */
    public function getSourceType(): string
    {
        return $this->sourceType;
    }

    /**
     * Set the source type.
     *
     * @param string $sourceType
     *
     * @return void
     */
    public function setSourceType(string $sourceType)
    {
        $this->sourceType = $sourceType;
    }

    /**
     * Get the feed source parameters.
     *
     * @return ParameterBagInterface
     */
    public function getSourceParameters(): ParameterBagInterface
    {
        return $this->sourceParameters;
    }

    /**
     * Set the feed source parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setSourceParameters(ParameterBagInterface $parameters)
    {
        $this->sourceParameters = $parameters;
    }

    /**
     * Get the writer type.
     *
     * @return string
     */
    public function getWriterType(): string
    {
        return $this->writerType;
    }

    /**
     * Set the writer type
     *
     * @param string $writerType
     *
     * @return void
     */
    public function setWriterType(string $writerType)
    {
        $this->writerType = $writerType;
    }

    /**
     * Get the feed writer parameters.
     *
     * @return ParameterBagInterface
     */
    public function getWriterParameters(): ParameterBagInterface
    {
        return $this->writerParameters;
    }

    /**
     * Set the feed writer parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setWriterParameters(ParameterBagInterface $parameters)
    {
        $this->writerParameters = $parameters;
    }

    /**
     * Get the conditions.
     *
     * @return FeedConditionInterface[]
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * Set the conditions.
     *
     * @param FeedConditionInterface[] ...$conditions
     *
     * @return void
     */
    public function setConditions(FeedConditionInterface ...$conditions)
    {
        $this->conditions = $conditions;
    }

    /**
     * Get the feed fields.
     *
     * @return FeedFieldInterface[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }

    /**
     * Set the feed fields.
     *
     * @param FeedFieldInterface[] ...$fields
     *
     * @return void
     */
    public function setFields(FeedFieldInterface ...$fields)
    {
        $this->fields = $fields;
    }
}
