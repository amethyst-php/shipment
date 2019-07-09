<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ShipmentFaker;
use Amethyst\Managers\ShipmentManager;
use Amethyst\Tests\BaseTest;
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
