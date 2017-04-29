<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

/**
 * Contains information about when a feed should be generated.
 */
interface FeedScheduleInterface
{
    /**
     * Get the schedule id.
     *
     * @return string|null
     */
    public function getScheduleId();

    /**
     * Set the schedule id.
     *
     * @param string $scheduleId
     *
     * @return void
     */
    public function setScheduleId(string $scheduleId);

    /**
     * Get the feed id.
     *
     * @return string|null
     */
    public function getFeedId();

    /**
     * Set the feed id.
     *
     * @param string $feedId
     *
     * @return void
     */
    public function setFeedId(string $feedId);

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
     * @return void
     */
    public function setExpression(string $expression);

    /**
     * Check whether the schedule is active.
     *
     * @return bool
     */
    public function isActive(): bool;

    /**
     * Set whether the schedule is active.
     *
     * @param bool $active
     *
     * @return void
     */
    public function setIsActive(bool $active);

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
     * @return void
     */
    public function setFeed(FeedInterface $feed);
}
