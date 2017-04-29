<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

/**
 * Contains information about a field that is used in a feed.
 */
interface FeedFieldInterface
{
    /**
     * Get the field id.
     *
     * @return string|null
     */
    public function getFieldId();

    /**
     * Set the field id.
     *
     * @param string $fieldId
     *
     * @return void
     */
    public function setFieldId(string $fieldId);

    /**
     * Get the feed id.
     *
     * @return string|null
     */
    public function getFeedId();

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return void
     */
    public function setFeedId(string $feedId);

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
     * @return void
     */
    public function setType(string $type);

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
     * @return void
     */
    public function setName(string $name);

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
     * @return void
     */
    public function setLabel(string $label);

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
     * @return void
     */
    public function setSortOrder(int $sortOrder);

    /**
     * Get the filters.
     *
     * @return FeedFieldFilterInterface[]
     */
    public function getFilters(): array;

    /**
     * Set the filters.
     *
     * @param FeedFieldFilterInterface[] ...$filters
     *
     * @return void
     */
    public function setFilters(FeedFieldFilterInterface ...$filters);
}
