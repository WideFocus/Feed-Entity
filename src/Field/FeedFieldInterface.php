<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Field;

/**
 * Contains information about a field that is used in a feed.
 */
interface FeedFieldInterface
{
    /**
     * Get the field id.
     *
     * @return int
     */
    public function getFieldId(): int;

    /**
     * Set the field id.
     *
     * @param int $fieldId
     *
     * @return FeedFieldInterface
     */
    public function setFieldId(int $fieldId): FeedFieldInterface;

    /**
     * Get the feed id.
     *
     * @return int
     */
    public function getFeedId(): int;

    /**
     * Set the feed id.
     *
     * @param int $feedId
     *
     * @return FeedFieldInterface
     */
    public function setFeedId(int $feedId): FeedFieldInterface;

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
     * Get the code.
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Set the code.
     *
     * @param string $code
     *
     * @return FeedFieldInterface
     */
    public function setCode(string $code): FeedFieldInterface;

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
     * Get the sort order.
     *
     * @return string
     */
    public function getSortOrder(): string;

    /**
     * Set the sort order.
     *
     * @param string $sortOrder
     *
     * @return FeedFieldInterface
     */
    public function setSortOrder(string $sortOrder): FeedFieldInterface;

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
