<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\AddressManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ShipmentSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('uid')
                ->setDefault(function ($entity, $attribute) {
                    return $attribute->getManager()->getRepository()->generateUid();
                }),
            Attributes\TextAttribute::make('label'),
            Attributes\TextAttribute::make('status'),
            Attributes\BelongsToAttribute::make('sender_id')
                ->setRelationName('sender')
                ->setRelationManager(AddressManager::class),
            Attributes\BelongsToAttribute::make('recipient_id')
                ->setRelationName('recipient')
                ->setRelationManager(AddressManager::class),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
