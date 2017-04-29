<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

use PHPUnit\Framework\TestCase;
use WideFocus\Feed\Entity\FeedInterface;
use WideFocus\Feed\Entity\FeedScheduleInterface;
use WideFocus\Feed\Entity\FeedScheduleTrait;

/**
 * @coversDefaultClass \WideFocus\Feed\Entity\FeedScheduleTrait
 */
class FeedScheduleTraitTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getScheduleId
     * @covers ::setScheduleId
     * @covers ::getFeedId
     * @covers ::setFeedId
     * @covers ::getExpression
     * @covers ::setExpression
     * @covers ::isActive
     * @covers ::setIsActive
     * @covers ::getFeed
     * @covers ::setFeed
     */
    public function testAccess()
    {
        /** @var FeedScheduleInterface $schedule */
        $schedule = $this->getMockForTrait(FeedScheduleTrait::class);

        $this->assertNull($schedule->getScheduleId());
        $this->assertNull($schedule->getFeedId());

        $schedule->setScheduleId(42);
        $this->assertEquals(42, $schedule->getScheduleId());

        $schedule->setFeedId(43);
        $this->assertEquals(43, $schedule->getFeedId());

        $schedule->setExpression('foo_expression');
        $this->assertEquals('foo_expression', $schedule->getExpression());

        $schedule->setIsActive(true);
        $this->assertTrue($schedule->isActive());

        $schedule->setIsActive(false);
        $this->assertFalse($schedule->isActive());

        $feed = $this->createMock(FeedInterface::class);
        $schedule->setFeed($feed);
        $this->assertSame($feed, $schedule->getFeed());
    }
}
