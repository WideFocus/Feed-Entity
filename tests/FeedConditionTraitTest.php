<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

use PHPUnit\Framework\TestCase;
use WideFocus\Feed\Entity\FeedConditionInterface;
use WideFocus\Feed\Entity\FeedConditionTrait;
use WideFocus\Parameters\ParameterBagInterface;

/**
 * @coversDefaultClass \WideFocus\Feed\Entity\FeedConditionTrait
 */
class FeedConditionTraitTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getType
     * @covers ::setType
     * @covers ::getName
     * @covers ::setName
     * @covers ::getOperator
     * @covers ::setOperator
     * @covers ::getConstraints
     * @covers ::setConstraints
     * @covers ::getChildren
     * @covers ::setChildren
     */
    public function testAccess()
    {
        /** @var FeedConditionInterface $condition */
        $condition = $this->getMockForTrait(FeedConditionTrait::class);

        $condition->setType('foo_type');
        $this->assertEquals('foo_type', $condition->getType());

        $condition->setName('foo_name');
        $this->assertEquals('foo_name', $condition->getName());

        $condition->setOperator('foo_operator');
        $this->assertEquals('foo_operator', $condition->getOperator());

        $constraints = $this->createMock(ParameterBagInterface::class);
        $condition->setConstraints($constraints);
        $this->assertSame($constraints, $condition->getConstraints());

        $children = [
            $this->createMock(FeedConditionInterface::class),
            $this->createMock(FeedConditionInterface::class)
        ];
        $condition->setChildren(...$children);
        $this->assertEquals($children, $condition->getChildren());
    }
}
