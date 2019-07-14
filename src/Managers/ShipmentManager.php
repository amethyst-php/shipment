<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Shipment                 newEntity()
 * @method \Amethyst\Schemas\ShipmentSchema          getSchema()
 * @method \Amethyst\Repositories\ShipmentRepository getRepository()
 * @method \Amethyst\Serializers\ShipmentSerializer  getSerializer()
 * @method \Amethyst\Validators\ShipmentValidator    getValidator()
 * @method \Amethyst\Authorizers\ShipmentAuthorizer  getAuthorizer()
 */
class ShipmentManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.shipment.data.shipment';
}
