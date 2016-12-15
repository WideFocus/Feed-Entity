<?php
/**
 * Copyright WideFocus.
 * http://widefocus.net
 */

namespace WideFocus\Feed\Data;

use DateTimeInterface;
use WideFocus\Feed\Data\Condition\FeedConditionInterface;
use WideFocus\Feed\Data\Field\FeedFieldInterface;
use WideFocus\Feed\Data\Layout\FeedLayoutInterface;
use WideFocus\Feed\Data\Source\FeedSourceInterface;

/**
 * Contains all the information needed to write a feed.
 */
interface FeedInterface
{
    /**
     * Get the feed id.
     *
     * @return integer
     */
    public function getFeedId(): integer;

    /**
     * Set the feed id.
     *
     * @param int $feedId
     *
     * @return FeedInterface
     */
    public function setFeedId(int $feedId): FeedInterface;

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
     * Set the writerType
     *
     * @param string $writerType
     *
     * @return FeedInterface
     */
    public function setWriterType(string $writerType): FeedInterface;

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
    public function setCreatedAt(DateTimeInterface $createdAt): FeedInterface;

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
    public function setUpdatedAt(DateTimeInterface $updatedAt): FeedInterface;

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
     * Get the feed layout.
     *
     * @return FeedLayoutInterface
     */
    public function getLayout(): FeedLayoutInterface;

    /**
     * Set the feed layout.
     *
     * @param FeedLayoutInterface $layout
     *
     * @return FeedInterface
     */
    public function setLayout(FeedLayoutInterface $layout): FeedInterface;

    /**
     * Get the feed source.
     *
     * @return FeedSourceInterface
     */
    public function getSource(): FeedSourceInterface;

    /**
     * Set the feed source.
     *
     * @param FeedSourceInterface $source
     *
     * @return FeedInterface
     */
    public function setSource(FeedSourceInterface $source): FeedInterface;
}
