<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Field;

/**
 * Contains information about a parameter that is used by a
 * feed field filter.
 */
interface FeedFieldFilterParameterInterface
{
    /**
     * Get the parameter id.
     *
     * @return string
     */
    public function getParameterId(): string;

    /**
     * Set the parameter id.
     *
     * @param string $parameterId
     *
     * @return FeedFieldFilterParameterInterface
     */
    public function setParameterId(
        string $parameterId
    ): FeedFieldFilterParameterInterface;

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
     * @return FeedFieldFilterParameterInterface
     */
    public function setFilterId(
        string $filterId
    ): FeedFieldFilterParameterInterface;

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
    public function setName(
        string $name
    ): FeedFieldFilterParameterInterface;

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
    public function setValue(
        string $value
    ): FeedFieldFilterParameterInterface;
}
