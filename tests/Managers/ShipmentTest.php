<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ShipmentFaker;
use Railken\Amethyst\Managers\ShipmentManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ShipmentTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ShipmentManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ShipmentFaker::class;
}
