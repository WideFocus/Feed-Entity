<?php
/**
 * Copyright WideFocus.
 * http://widefocus.net
 */

namespace WideFocus\Feed\Entity;

use WideFocus\Parameters\ParameterBagInterface;

/**
 * Contains all the information needed to write a feed.
 */
interface FeedInterface
{
    /**
     * Get the source type.
     *
     * @return string
     */
    public function getSourceType(): string;

    /**
     * Set the source type.
     *
     * @param string $sourceType
     *
     * @return void
     */
    public function setSourceType(string $sourceType);

    /**
     * Get the feed source parameters.
     *
     * @return ParameterBagInterface
     */
    public function getSourceParameters(): ParameterBagInterface;

    /**
     * Set the feed source parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setSourceParameters(ParameterBagInterface $parameters);

    /**
     * Get the writer type.
     *
     * @return string
     */
    public function getWriterType(): string;

    /**
     * Set the writer type
     *
     * @param string $writerType
     *
     * @return void
     */
    public function setWriterType(string $writerType);

    /**
     * Get the feed writer parameters.
     *
     * @return ParameterBagInterface
     */
    public function getWriterParameters(): ParameterBagInterface;

    /**
     * Set the feed writer parameters.
     *
     * @param ParameterBagInterface $parameters
     *
     * @return void
     */
    public function setWriterParameters(ParameterBagInterface $parameters);

    /**
     * Get the conditions.
     *
     * @return FeedConditionInterface[]
     */
    public function getConditions(): array;

    /**
     * Set the conditions.
     *
     * @param FeedConditionInterface[] ...$conditions
     *
     * @return void
     */
    public function setConditions(FeedConditionInterface ...$conditions);

    /**
     * Get the feed fields.
     *
     * @return FeedFieldInterface[]
     */
    public function getFields(): array;

    /**
     * Set the feed fields.
     *
     * @param FeedFieldInterface[] ...$fields
     *
     * @return void
     */
    public function setFields(FeedFieldInterface ...$fields);
}
