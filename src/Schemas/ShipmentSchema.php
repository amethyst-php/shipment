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
            Attributes\TextAttribute::make('tracking_code')
                ->setUnique(true),
            Attributes\TextAttribute::make('label'),
            Attributes\TextAttribute::make('status'),
            Attributes\BelongsToAttribute::make('sender_address_id')
                ->setRelationName('sender_address')
                ->setRelationManager(AddressManager::class),
            Attributes\BelongsToAttribute::make('recipient_address_id')
                ->setRelationName('recipient_address')
                ->setRelationManager(AddressManager::class),
            Attributes\TextAttribute::make('recipient_name'),
            Attributes\TextAttribute::make('recipient_phone'),
            Attributes\LongTextAttribute::make('recipient_notes'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
