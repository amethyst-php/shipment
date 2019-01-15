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
        $bag->set('tracking_code', $faker->name);
        $bag->set('status', $faker->name);
        $bag->set('sender_address', AddressFaker::make()->parameters()->toArray());
        $bag->set('recipient_address', AddressFaker::make()->parameters()->toArray());
        $bag->set('recipient_name', $faker->name);
        $bag->set('recipient_phone', $faker->phoneNumber);
        $bag->set('recipient_notes', $faker->text);

        return $bag;
    }
}
