<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Data\Source;

/**
 * Contains information about the source to use for a feed.
 * The properties of the source can differ for each source.
 */
interface FeedSourceInterface
{
    /**
     * Get the id of the source.
     *
     * @return int
     */
    public function getSourceId(): int;

    /**
     * Set the id of the source.
     *
     * @param int $sourceId
     *
     * @return FeedSourceInterface
     */
    public function setSourceId(int $sourceId): FeedSourceInterface;

    /**
     * Get the id of the feed.
     *
     * @return int
     */
    public function getFeedId(): int;

    /**
     * Set the id of the feed.
     *
     * @param int $feedId
     *
     * @return FeedSourceInterface
     */
    public function setFeedId(int $feedId): FeedSourceInterface;
}
