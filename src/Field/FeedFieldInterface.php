<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Field;

/**
 * Contains information about a field that is used in a feed.
 */
interface FeedFieldInterface
{
    /**
     * Get the field id.
     *
     * @return string
     */
    public function getFieldId(): string;

    /**
     * Set the field id.
     *
     * @param string $fieldId
     *
     * @return FeedFieldInterface
     */
    public function setFieldId(string $fieldId): FeedFieldInterface;

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
     * @return FeedFieldInterface
     */
    public function setFeedId(string $feedId): FeedFieldInterface;

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Set the type.
     *
     * @param string $type
     *
     * @return FeedFieldInterface
     */
    public function setType(string $type): FeedFieldInterface;

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set the name.
     *
     * @param string $name
     *
     * @return FeedFieldInterface
     */
    public function setName(string $name): FeedFieldInterface;

    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel(): string;

    /**
     * Set the label.
     *
     * @param string $label
     *
     * @return FeedFieldInterface
     */
    public function setLabel(string $label): FeedFieldInterface;

    /**
     * Get the sort order.
     *
     * @return int
     */
    public function getSortOrder(): int;

    /**
     * Set the sort order.
     *
     * @param int $sortOrder
     *
     * @return FeedFieldInterface
     */
    public function setSortOrder(int $sortOrder): FeedFieldInterface;

    /**
     * Get the filters.
     *
     * @return FeedFieldFilterInterface[]
     */
    public function getFilters(): array;

    /**
     * Set the filters.
     *
     * @param FeedFieldFilterInterface[] $filters
     *
     * @return FeedFieldInterface
     */
    public function setFilters(array $filters): FeedFieldInterface;
}
