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
     * Get the condition id.
     *
     * @return string
     */
    public function getConditionId(): string;

    /**
     * Set the condition id.
     *
     * @param string $conditionId
     *
     * @return FeedConditionInterface
     */
    public function setConditionId(
        string $conditionId
    ): FeedConditionInterface;

    /**
     * Get the parent id.
     *
     * @return string
     */
    public function getParentId(): string;

    /**
     * Set the parent id.
     *
     * @param string $parentId
     *
     * @return FeedConditionInterface
     */
    public function setParentId(string $parentId): FeedConditionInterface;

    /**
     * Get the feed id.
     *
     * @return string
     */
    public function getFeedId(): string;

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return FeedConditionInterface
     */
    public function setFeedId(string $feedId): FeedConditionInterface;

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
     * @return FeedConditionInterface
     */
    public function setType(string $type): FeedConditionInterface;

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
     * @return FeedConditionInterface
     */
    public function setName(string $name): FeedConditionInterface;

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
     * @return FeedConditionInterface
     */
    public function setConstraints(
        ParameterBagInterface $constraints
    ): FeedConditionInterface;

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
     * @return FeedConditionInterface
     */
    public function setOperator(string $operator): FeedConditionInterface;

    /**
     * Get the children.
     *
     * @return FeedConditionInterface[]
     */
    public function getChildren(): array;

    /**
     * Set the children.
     *
     * @param FeedConditionInterface[] $children
     *
     * @return FeedConditionInterface
     */
    public function setChildren(array $children): FeedConditionInterface;
}
