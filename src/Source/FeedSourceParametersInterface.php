<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Source;

use IteratorAggregate;

/**
 * Contains information about the source to use for a feed.
 * The parameters of a source can differ for each source.
 */
interface FeedSourceParametersInterface extends IteratorAggregate
{
    /**
     * Get the id of the parameters.
     *
     * @return string
     */
    public function getParametersId(): string;

    /**
     * Set the id of the parameters.
     *
     * @param string $parametersId
     *
     * @return FeedSourceParametersInterface
     */
    public function setParametersId(string $parametersId): FeedSourceParametersInterface;

    /**
     * Get the id of the feed.
     *
     * @return string
     */
    public function getFeedId(): string;

    /**
     * Set the id of the feed.
     *
     * @param string $feedId
     *
     * @return FeedSourceParametersInterface
     */
    public function setFeedId(string $feedId): FeedSourceParametersInterface;
}
