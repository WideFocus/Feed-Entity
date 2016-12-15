<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Schedule;

use WideFocus\Feed\Data\FeedInterface;

/**
 * Contains information about when a feed should be generated.
 */
interface FeedScheduleInterface
{
    /**
     * Get the schedule id.
     *
     * @return int
     */
    public function getScheduleId(): int;

    /**
     * Set the schedule id.
     *
     * @param int $scheduleId
     *
     * @return FeedScheduleInterface
     */
    public function setScheduleId(int $scheduleId): FeedScheduleInterface;

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
     * @return FeedScheduleInterface
     */
    public function setFeedId($feedId): FeedScheduleInterface;

    /**
     * Get the schedule expression.
     *
     * @return string
     */
    public function getExpression(): string;

    /**
     * Get the schedule expression
     *
     * @param string $expression
     *
     * @return FeedScheduleInterface
     */
    public function setExpression(string $expression): FeedScheduleInterface;

    /**
     * Check whether the schedule is active.
     *
     * @return bool
     */
    public function isActive(): bool;

    /**
     * Set whether the schedule is active.
     *
     * @param bool $isActive
     *
     * @return FeedScheduleInterface
     */
    public function setIsActive(bool $isActive): FeedScheduleInterface;

    /**
     * Get the feed.
     *
     * @return FeedInterface
     */
    public function getFeed(): FeedInterface;

    /**
     * Set the feed.
     *
     * @param FeedInterface $feed
     *
     * @return FeedScheduleInterface
     */
    public function setFeed(FeedInterface $feed): FeedScheduleInterface;
}
