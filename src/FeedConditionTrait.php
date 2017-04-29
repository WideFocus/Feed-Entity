<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Implements FeedConditionInterface.
 */
trait FeedConditionTrait
{
    /**
     * @var string
     */
    private $conditionId;

    /**
     * @var string
     */
    private $parentId;

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
    private $operator = '';

    /**
     * @var ParameterBagInterface
     */
    private $constraints;

    /**
     * @var FeedConditionInterface[]
     */
    private $children = [];

    /**
     * Get the condition id.
     *
     * @return string|null
     */
    public function getConditionId()
    {
        return $this->conditionId;
    }

    /**
     * Set the condition id.
     *
     * @param string $conditionId
     *
     * @return void
     */
    public function setConditionId(string $conditionId)
    {
        $this->conditionId = $conditionId;
    }

    /**
     * Get the parent id.
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set the parent id.
     *
     * @param string $parentId
     *
     * @return void
     */
    public function setParentId(string $parentId)
    {
        $this->parentId = $parentId;
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
     * Get the operator.
     *
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * Set the operator.
     *
     * @param string $operator
     *
     * @return void
     */
    public function setOperator(string $operator)
    {
        $this->operator = $operator;
    }

    /**
     * Get the constraints.
     *
     * @return ParameterBagInterface
     */
    public function getConstraints(): ParameterBagInterface
    {
        return $this->constraints;
    }

    /**
     * Set the constraints
     *
     * @param ParameterBagInterface $constraints
     *
     * @return void
     */
    public function setConstraints(ParameterBagInterface $constraints)
    {
        $this->constraints = $constraints;
    }

    /**
     * Get the children.
     *
     * @return void[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Set the children.
     *
     * @param FeedConditionInterface[] ...$children
     *
     * @return void
     */
    public function setChildren(FeedConditionInterface ...$children)
    {
        $this->children = $children;
    }
}
