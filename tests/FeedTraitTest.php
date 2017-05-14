<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

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
