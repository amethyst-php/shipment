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
            'model'      => Railken\Amethyst\Models\Shipment::class,
            'schema'     => Railken\Amethyst\Schemas\ShipmentSchema::class,
            'repository' => Railken\Amethyst\Repositories\ShipmentRepository::class,
            'serializer' => Railken\Amethyst\Serializers\ShipmentSerializer::class,
            'validator'  => Railken\Amethyst\Validators\ShipmentValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\ShipmentAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\ShipmentFaker::class,
            'manager'    => Railken\Amethyst\Managers\ShipmentManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'shipment' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\ShipmentsController::class,
                'router'     => [
                    'as'     => 'shipment.',
                    'prefix' => '/shipments',
                ],
            ],
        ],
    ],
];
