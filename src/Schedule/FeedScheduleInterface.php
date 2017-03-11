<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Schedule;

use WideFocus\Feed\Entity\FeedInterface;

/**
 * Contains information about when a feed should be generated.
 */
interface FeedScheduleInterface
{
    /**
     * Get the schedule id.
     *
     * @return string
     */
    public function getScheduleId(): string;

    /**
     * Set the schedule id.
     *
     * @param string $scheduleId
     *
     * @return FeedScheduleInterface
     */
    public function setScheduleId(
        string $scheduleId
    ): FeedScheduleInterface;

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
     * @return FeedScheduleInterface
     */
    public function setFeedId(string $feedId): FeedScheduleInterface;

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
    public function setExpression(
        string $expression
    ): FeedScheduleInterface;

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
