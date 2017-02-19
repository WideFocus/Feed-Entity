<?php
/**
 * Copyright WideFocus. See LICENSE.txt.
 * https://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Writer;

use IteratorAggregate;

/**
 * Contains information about how the feed should be formatted by a writer.
 * The parameters of a writer can differ for each writer.
 */
interface FeedWriterParametersInterface extends IteratorAggregate
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
     * @return FeedWriterParametersInterface
     */
    public function setParametersId(string $parametersId): FeedWriterParametersInterface;

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
     * @return FeedWriterParametersInterface
     */
    public function setFeedId(string $feedId): FeedWriterParametersInterface;
}
