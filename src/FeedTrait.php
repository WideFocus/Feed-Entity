<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use DateTimeInterface;
use WideFocus\Parameters\ParameterBagInterface;

/**
 * Implements FeedInterface.
 */
trait FeedTrait
{
    /**
     * @var string
     */
    private $feedId;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * @var DateTimeInterface
     */
    private $updatedAt;

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
     * Get the feed id.
     *
     * @return string|null
     */
    public function getFeedId()
    {
        return $this->feedId;
    }

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return void
     */
    public function setFeedId(string $feedId)
    {
        $this->feedId = $feedId;
    }

    /**
     * Get the feed name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the feed name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Check whether the feed is active.
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Set whether the feed is active.
     *
     * @param bool $active
     *
     * @return void
     */
    public function setIsActive(bool $active)
    {
        $this->active = $active;
    }

    /**
     * Get the creation date and time.
     *
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set the creation date and time.
     *
     * @param DateTimeInterface $createdAt
     *
     * @return void
     */
    public function setCreatedAt(DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Get the update date and time.
     *
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * Set the update date and time.
     *
     * @param DateTimeInterface $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

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
