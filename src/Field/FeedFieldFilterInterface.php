<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Field;

/**
 * Contains information about a filter used to alter the contents of a
 * feed field.
 */
interface FeedFieldFilterInterface
{
    /**
     * Get the filter id.
     *
     * @return string
     */
    public function getFilterId(): string;

    /**
     * Set the filter id.
     *
     * @param string $filterId
     *
     * @return FeedFieldFilterInterface
     */
    public function setFilterId(string $filterId): FeedFieldFilterInterface;

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
     * @return FeedFieldFilterInterface
     */
    public function setFieldId(string $fieldId): FeedFieldFilterInterface;

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
    public function setFilterType(string $filterType): FeedFieldFilterInterface;

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
     * @return FeedFieldFilterInterface
     */
    public function setSortOrder(int $sortOrder): FeedFieldFilterInterface;

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
