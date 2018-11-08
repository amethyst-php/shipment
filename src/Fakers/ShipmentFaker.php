<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ShipmentFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('label', $faker->name);
        $bag->set('status', $faker->name);
        $bag->set('sender', AddressFaker::make()->parameters()->toArray());
        $bag->set('recipient', AddressFaker::make()->parameters()->toArray());

        return $bag;
    }
}
