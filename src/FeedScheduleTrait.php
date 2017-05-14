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
    private $expression = '';

    /**
     * @var FeedInterface
     */
    private $feed;

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
