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
     * @covers ::getExpression
     * @covers ::setExpression
     * @covers ::getFeed
     * @covers ::setFeed
     */
    public function testAccess()
    {
        /** @var FeedScheduleInterface $schedule */
        $schedule = $this->getMockForTrait(FeedScheduleTrait::class);

        $schedule->setExpression('foo_expression');
        $this->assertEquals('foo_expression', $schedule->getExpression());

        $feed = $this->createMock(FeedInterface::class);
        $schedule->setFeed($feed);
        $this->assertSame($feed, $schedule->getFeed());
    }
}
