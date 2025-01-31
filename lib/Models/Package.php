<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $carrierKey The carrier key which will deliver the package
 * @property DeliveryDate $deliveryDate 
 */
class Package extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}