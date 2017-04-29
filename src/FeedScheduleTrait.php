<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity;

/**
 * Implements FeedScheduleInterface.
 */
trait FeedScheduleTrait
{
    /**
     * @var string
     */
    private $scheduleId;

    /**
     * @var string
     */
    private $feedId;

    /**
     * @var string
     */
    private $expression = '';

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var FeedInterface
     */
    private $feed;

    /**
     * Get the schedule id.
     *
     * @return string|null
     */
    public function getScheduleId()
    {
        return $this->scheduleId;
    }

    /**
     * Set the schedule id.
     *
     * @param string $scheduleId
     *
     * @return void
     */
    public function setScheduleId(string $scheduleId)
    {
        $this->scheduleId = $scheduleId;
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
     * Get the schedule expression.
     *
     * @return string
     */
    public function getExpression(): string
    {
        return $this->expression;
    }

    /**
     * Get the schedule expression
     *
     * @param string $expression
     *
     * @return void
     */
    public function setExpression(string $expression)
    {
        $this->expression = $expression;
    }

    /**
     * Check whether the schedule is active.
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Set whether the schedule is active.
     *
     * @param bool $active
     *
     * @return void
     */
    public function setIsActive(bool $active)
    {
        $this->active = $active;
    }

    /**
     * Get the feed.
     *
     * @return FeedInterface
     */
    public function getFeed(): FeedInterface
    {
        return $this->feed;
    }

    /**
     * Set the feed.
     *
     * @param FeedInterface $feed
     *
     * @return void
     */
    public function setFeed(FeedInterface $feed)
    {
        $this->feed = $feed;
    }
}
