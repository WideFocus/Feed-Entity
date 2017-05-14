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
     * @return FeedConditionInterface[]
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
