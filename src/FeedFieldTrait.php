<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

/**
 * Implements FeedFieldInterface.
 */
trait FeedFieldTrait
{
    /**
     * @var string
     */
    private $fieldId;

    /**
     * @var string
     */
    private $feedId;

    /**
     * @var string
     */
    private $type = '';

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var string
     */
    private $label = '';

    /**
     * @var FeedFieldFilterInterface[]
     */
    private $filters = [];

    /**
     * @var int
     */
    private $sortOrder = 0;

    /**
     * Get the field id.
     *
     * @return string|null
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * Set the field id.
     *
     * @param string $fieldId
     *
     * @return void
     */
    public function setFieldId(string $fieldId)
    {
        $this->fieldId = $fieldId;
    }

    /**
     * Get the feed id.
     *
     * @return string|null
     */
    public function getFeedId()
    {
        return $this->feedId;
    }

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return void
     */
    public function setFeedId(string $feedId)
    {
        $this->feedId = $feedId;
    }

    /**
     * Get the type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * Get the name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the label.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * Set the label.
     *
     * @param string $label
     *
     * @return void
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    /**
     * Get the filters.
     *
     * @return FeedFieldFilterInterface[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * Set the filters.
     *
     * @param FeedFieldFilterInterface[] ...$filters
     *
     * @return void
     */
    public function setFilters(FeedFieldFilterInterface ...$filters)
    {
        $this->filters = $filters;
    }

    /**
     * Get the sort order.
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    /**
     * Set the sort order.
     *
     * @param int $sortOrder
     *
     * @return void
     */
    public function setSortOrder(int $sortOrder)
    {
        $this->sortOrder = $sortOrder;
    }
}
