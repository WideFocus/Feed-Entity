<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Contains information about a filter used to alter the contents of a
 * feed field.
 */
interface FeedFieldFilterInterface
{
    /**
     * Get the filter type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Set the filter type.
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type);

    /**
     * Get the parameters.
     *
     * @return ParameterBagInterface
     */
    public function getParameters(): ParameterBagInterface;

    /**
     * Set the parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setParameters(ParameterBagInterface $parameters);

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
}
