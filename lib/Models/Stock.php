<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $supplierId 
 * @property int $warehouseId 
 * @property int $quantity 
 * @property bool $isSellableWithoutStock 
 * @property string $expectedAvailabilityAt 
 */
class Stock extends ApiObject
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