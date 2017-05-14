<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

use PHPUnit\Framework\TestCase;
use WideFocus\Feed\Entity\FeedFieldFilterInterface;
use WideFocus\Feed\Entity\FeedFieldFilterTrait;
use WideFocus\Parameters\ParameterBagInterface;

/**
 * @coversDefaultClass \WideFocus\Feed\Entity\FeedFieldFilterTrait
 */
class FeedFieldFilterTraitTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getType
     * @covers ::setType
     * @covers ::getParameters
     * @covers ::setParameters
     */
    public function testAccess()
    {
        /** @var FeedFieldFilterInterface $filter */
        $filter = $this->getMockForTrait(FeedFieldFilterTrait::class);

        $filter->setType('foo_type');
        $this->assertEquals('foo_type', $filter->getType());

        $parameters = $this->createMock(ParameterBagInterface::class);
        $filter->setParameters($parameters);
        $this->assertSame($parameters, $filter->getParameters());
    }
}
