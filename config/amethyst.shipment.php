<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'shipment' => [
            'table'      => 'amethyst_shipments',
            'comment'    => 'Shipment',
            'model'      => Amethyst\Models\Shipment::class,
            'schema'     => Amethyst\Schemas\ShipmentSchema::class,
            'repository' => Amethyst\Repositories\ShipmentRepository::class,
            'serializer' => Amethyst\Serializers\ShipmentSerializer::class,
            'validator'  => Amethyst\Validators\ShipmentValidator::class,
            'authorizer' => Amethyst\Authorizers\ShipmentAuthorizer::class,
            'faker'      => Amethyst\Fakers\ShipmentFaker::class,
            'manager'    => Amethyst\Managers\ShipmentManager::class,
        ],
    ],
];
