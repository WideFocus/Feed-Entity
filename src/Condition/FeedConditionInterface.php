<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Condition;

/**
 * Contains information about how to validate a feed item.
 */
interface FeedConditionInterface
{
    /**
     * Get the condition id.
     *
     * @return int
     */
    public function getConditionId(): int;

    /**
     * Set the condition id.
     *
     * @param int $conditionId
     *
     * @return FeedConditionInterface
     */
    public function setConditionId(int $conditionId): FeedConditionInterface;

    /**
     * Get the parent id.
     *
     * @return int
     */
    public function getParentId(): int;

    /**
     * Set the parent id.
     *
     * @param int $parentId
     *
     * @return FeedConditionInterface
     */
    public function setParentId(int $parentId): FeedConditionInterface;

    /**
     * Get the feed id.
     *
     * @return int
     */
    public function getFeedId(): int;

    /**
     * Set the feed id.
     *
     * @param int $feedId
     *
     * @return FeedConditionInterface
     */
    public function setFeedId(int $feedId): FeedConditionInterface;

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
     * Get the code.
     *
     * @return string
     */
    public function getCode(): string;

    /**
     * Set the code.
     *
     * @param string $code
     *
     * @return FeedConditionInterface
     */
    public function setCode(string $code): FeedConditionInterface;

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
     * @return FeedConditionInterface
     */
    public function setValue(string $value): FeedConditionInterface;

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
