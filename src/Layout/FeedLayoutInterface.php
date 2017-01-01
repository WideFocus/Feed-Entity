<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Layout;

/**
 * Contains information about how the feed should be formatted.
 * The properties of the layout can differ for each writer.
 */
interface FeedLayoutInterface
{
    /**
     * Get the layout id.
     *
     * @return int
     */
    public function getLayoutId(): int;

    /**
     * Set the layout id.
     *
     * @param int $layoutId
     *
     * @return FeedLayoutInterface
     */
    public function setLayoutId(int $layoutId): FeedLayoutInterface;
    
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
     * @return FeedLayoutInterface
     */
    public function setFeedId(int $feedId): FeedLayoutInterface;
}
