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
