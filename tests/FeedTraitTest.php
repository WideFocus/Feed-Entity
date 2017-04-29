<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use WideFocus\Feed\Entity\FeedConditionInterface;
use WideFocus\Feed\Entity\FeedFieldInterface;
use WideFocus\Feed\Entity\FeedInterface;
use WideFocus\Feed\Entity\FeedTrait;
use WideFocus\Parameters\ParameterBagInterface;

/**
 * @coversDefaultClass \WideFocus\Feed\Entity\FeedTrait
 */
class FeedTraitTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getFeedId
     * @covers ::setFeedId
     * @covers ::getName
     * @covers ::setName
     * @covers ::isActive
     * @covers ::setIsActive
     * @covers ::getCreatedAt
     * @covers ::setCreatedAt
     * @covers ::getUpdatedAt
     * @covers ::setUpdatedAt
     * @covers ::getSourceType
     * @covers ::setSourceType
     * @covers ::getSourceParameters
     * @covers ::setSourceParameters
     * @covers ::getWriterType
     * @covers ::setWriterType
     * @covers ::getWriterParameters
     * @covers ::setWriterParameters
     * @covers ::getConditions
     * @covers ::setConditions
     * @covers ::getFields
     * @covers ::setFields
     */
    public function testAccess()
    {
        /** @var FeedInterface $feed */
        $feed = $this->getMockForTrait(FeedTrait::class);

        $this->assertNull($feed->getFeedId());

        $feed->setFeedId(42);
        $this->assertEquals(42, $feed->getFeedId());

        $feed->setName('foo_name');
        $this->assertEquals('foo_name', $feed->getName());

        $feed->setIsActive(true);
        $this->assertTrue($feed->isActive());

        $feed->setIsActive(false);
        $this->assertFalse($feed->isActive());
        
        $created = $this->createMock(DateTime::class);
        $feed->setCreatedAt($created);
        $this->assertSame($created, $feed->getCreatedAt());

        $updated = $this->createMock(DateTime::class);
        $feed->setUpdatedAt($updated);
        $this->assertSame($updated, $feed->getUpdatedAt());

        $feed->setSourceType('foo_source_type');
        $this->assertEquals('foo_source_type', $feed->getSourceType());
        
        $sourceParameters = $this->createMock(ParameterBagInterface::class);
        $feed->setSourceParameters($sourceParameters);
        $this->assertSame($sourceParameters, $feed->getSourceParameters());

        $feed->setWriterType('foo_writer_type');
        $this->assertEquals('foo_writer_type', $feed->getWriterType());

        $writerParameters = $this->createMock(ParameterBagInterface::class);
        $feed->setWriterParameters($writerParameters);
        $this->assertSame($writerParameters, $feed->getWriterParameters());

        $conditions = [
            $this->createMock(FeedConditionInterface::class),
            $this->createMock(FeedConditionInterface::class)
        ];
        $feed->setConditions(...$conditions);
        $this->assertSame($conditions, $feed->getConditions());

        $fields = [
            $this->createMock(FeedFieldInterface::class),
            $this->createMock(FeedFieldInterface::class)
        ];
        $feed->setFields(...$fields);
        $this->assertSame($fields, $feed->getFields());
    }
}
