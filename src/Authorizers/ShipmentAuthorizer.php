<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ShipmentAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'shipment.create',
        Tokens::PERMISSION_UPDATE => 'shipment.update',
        Tokens::PERMISSION_SHOW   => 'shipment.show',
        Tokens::PERMISSION_REMOVE => 'shipment.remove',
    ];
}
