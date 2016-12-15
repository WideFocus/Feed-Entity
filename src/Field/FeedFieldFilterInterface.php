<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Field;

/**
 * Contains information about a filter used to alter the contents of a
 * feed field.
 */
interface FeedFieldFilterInterface
{
    /**
     * Get the filter id.
     *
     * @return int
     */
    public function getFilterId(): int;

    /**
     * Set the filter id.
     *
     * @param int $filterId
     *
     * @return FeedFieldFilterInterface
     */
    public function setFilterId(int $filterId): FeedFieldFilterInterface;

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
     * @return FeedFieldFilterInterface
     */
    public function setFieldId(int $fieldId): FeedFieldFilterInterface;

    /**
     * Get the filter type.
     *
     * @return string
     */
    public function getFilterType(): string;

    /**
     * Set the filter type.
     *
     * @param string $filterType
     *
     * @return FeedFieldFilterInterface
     */
    public function setFilterType($filterType): FeedFieldFilterInterface;

    /**
     * Get the sort order.
     *
     * @return int
     */
    public function getSortOrder(): int;

    /**
     * Set the sort order.
     *
     * @param string $sortOrder
     *
     * @return FeedFieldFilterInterface
     */
    public function setSortOrder(string $sortOrder): FeedFieldFilterInterface;

    /**
     * Get the parameters.
     *
     * @return FeedFieldFilterParameterInterface[]
     */
    public function getParameters(): array;

    /**
     * Set the parameters.
     *
     * @param FeedFieldFilterParameterInterface[] $parameters
     *
     * @return FeedFieldFilterInterface
     */
    public function setParameters(array $parameters): FeedFieldFilterInterface;
}
