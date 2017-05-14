<?php
/**
 * Copyright WideFocus. All rights reserved.
 * http://www.widefocus.net
 */

namespace WideFocus\Feed\Entity\Tests;

use PHPUnit\Framework\TestCase;
use WideFocus\Feed\Entity\FeedFieldFilterInterface;
use WideFocus\Feed\Entity\FeedFieldInterface;
use WideFocus\Feed\Entity\FeedFieldTrait;

/**
 * @coversDefaultClass \WideFocus\Feed\Entity\FeedFieldTrait
 */
class FeedFieldTraitTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::getType
     * @covers ::setType
     * @covers ::getName
     * @covers ::setName
     * @covers ::getLabel
     * @covers ::setLabel
     * @covers ::getFilters
     * @covers ::setFilters
     */
    public function testAccess()
    {
        /** @var FeedFieldInterface $field */
        $field = $this->getMockForTrait(FeedFieldTrait::class);

        $field->setType('foo_type');
        $this->assertEquals('foo_type', $field->getType());

        $field->setName('foo_name');
        $this->assertEquals('foo_name', $field->getName());

        $field->setLabel('foo_label');
        $this->assertEquals('foo_label', $field->getLabel());

        $filters = [
            $this->createMock(FeedFieldFilterInterface::class),
            $this->createMock(FeedFieldFilterInterface::class)
        ];
        $field->setFilters(...$filters);
        $this->assertEquals($filters, $field->getFilters());
    }
}
