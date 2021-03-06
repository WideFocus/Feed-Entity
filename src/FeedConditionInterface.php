<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Contains information about how to validate a feed item.
 */
interface FeedConditionInterface
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
     * Get the operator.
     *
     * @return string
     */
    public function getOperator(): string;

    /**
     * Set the operator.
     *
     * @param string $operator
     *
     * @return void
     */
    public function setOperator(string $operator);

    /**
     * Get the constraints.
     *
     * @return ParameterBagInterface
     */
    public function getConstraints(): ParameterBagInterface;

    /**
     * Set the constraints
     *
     * @param ParameterBagInterface $constraints
     *
     * @return void
     */
    public function setConstraints(ParameterBagInterface $constraints);

    /**
     * Get the children.
     *
     * @return FeedConditionInterface[]
     */
    public function getChildren(): array;

    /**
     * Set the children.
     *
     * @param FeedConditionInterface[] ...$children
     *
     * @return void
     */
    public function setChildren(FeedConditionInterface ...$children);
}
