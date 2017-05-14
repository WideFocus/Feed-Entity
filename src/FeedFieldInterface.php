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
