<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Field;

/**
 * Contains information about a parameter that is used by a
 * feed field filter.
 */
interface FeedFieldFilterParameterInterface
{
    /**
     * Get the parameter id.
     *
     * @return int
     */
    public function getParameterId(): int;

    /**
     * Set the parameter id.
     *
     * @param int $parameterId
     *
     * @return FeedFieldFilterParameterInterface
     */
    public function setParameterId(int $parameterId): FeedFieldFilterParameterInterface;

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
     * @return FeedFieldFilterParameterInterface
     */
    public function setFilterId(int $filterId): FeedFieldFilterParameterInterface;

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
     * @return FeedFieldFilterParameterInterface
     */
    public function setName(string $name): FeedFieldFilterParameterInterface;

    /**
     * Get the value.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Set the value.
     *
     * @param string $value
     *
     * @return FeedFieldFilterParameterInterface
     */
    public function setValue(string $value): FeedFieldFilterParameterInterface;
}
