<?php
/**
 * Copyright WideFocus.
 * http://widefocus.net
 */

namespace WideFocus\Feed\Entity;

use DateTimeInterface;
use WideFocus\Feed\Entity\Condition\FeedConditionInterface;
use WideFocus\Feed\Entity\Field\FeedFieldInterface;
use WideFocus\Feed\Entity\Writer\FeedWriterParametersInterface;
use WideFocus\Feed\Entity\Source\FeedSourceParametersInterface;

/**
 * Contains all the information needed to write a feed.
 */
interface FeedInterface
{
    /**
     * Get the feed id.
     *
     * @return string
     */
    public function getFeedId(): string;

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return FeedInterface
     */
    public function setFeedId(string $feedId): FeedInterface;

    /**
     * Get the feed name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set the feed name.
     *
     * @param string $name
     *
     * @return FeedInterface
     */
    public function setName(string $name): FeedInterface;

    /**
     * Get the writer type.
     *
     * @return string
     */
    public function getWriterType(): string;

    /**
     * Set the writer type
     *
     * @param string $writerType
     *
     * @return FeedInterface
     */
    public function setWriterType(string $writerType): FeedInterface;

    /**
     * Get the source type.
     *
     * @return string
     */
    public function getSourceType(): string;

    /**
     * Set the source type.
     *
     * @param string $sourceType
     *
     * @return FeedInterface
     */
    public function setSourceType(string $sourceType): FeedInterface;

    /**
     * Check whether the feed is active.
     *
     * @return bool
     */
    public function isActive(): bool;

    /**
     * Set whether the feed is active.
     *
     * @param bool $isActive
     *
     * @return FeedInterface
     */
    public function setIsActive(bool $isActive): FeedInterface;

    /**
     * Get the creation date and time.
     *
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface;

    /**
     * Set the creation date and time.
     *
     * @param DateTimeInterface $createdAt
     *
     * @return FeedInterface
     */
    public function setCreatedAt(
        DateTimeInterface $createdAt
    ): FeedInterface;

    /**
     * Get the update date and time.
     *
     * @return DateTimeInterface
     */
    public function getUpdatedAt(): DateTimeInterface;

    /**
     * Set the update date and time.
     *
     * @param DateTimeInterface $updatedAt
     *
     * @return FeedInterface
     */
    public function setUpdatedAt(
        DateTimeInterface $updatedAt
    ): FeedInterface;

    /**
     * Get the conditions.
     *
     * @return FeedConditionInterface[]
     */
    public function getConditions(): array;

    /**
     * Set the conditions.
     *
     * @param FeedConditionInterface[] $conditions
     *
     * @return FeedInterface
     */
    public function setConditions(array $conditions): FeedInterface;

    /**
     * Get the feed fields.
     *
     * @return FeedFieldInterface[]
     */
    public function getFields(): array;

    /**
     * Set the feed fields.
     *
     * @param FeedFieldInterface[] $fields
     *
     * @return FeedInterface
     */
    public function setFields(array $fields): FeedInterface;

    /**
     * Get the feed writer parameters.
     *
     * @return FeedWriterParametersInterface
     */
    public function getWriterParameters(): FeedWriterParametersInterface;

    /**
     * Set the feed writer parameters.
     *
     * @param FeedWriterParametersInterface $parameters
     *
     * @return FeedInterface
     */
    public function setWriterParameters(
        FeedWriterParametersInterface $parameters
    ): FeedInterface;

    /**
     * Get the feed source parameters.
     *
     * @return FeedSourceParametersInterface
     */
    public function getSourceParameters(): FeedSourceParametersInterface;

    /**
     * Set the feed source parameters.
     *
     * @param FeedSourceParametersInterface $parameters
     *
     * @return FeedInterface
     */
    public function setSourceParameters(
        FeedSourceParametersInterface $parameters
    ): FeedInterface;
}
