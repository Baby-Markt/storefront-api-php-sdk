<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $withTax The lowest price including tax.
 * @property float $relativeDifferenceToPrice The relative difference from the lowest prior price to the current price.

If the value is positive, it means that the current price is higher than the lowest prior price.
If the value is negative, it means that the current price is lower than the lowest prior price.

 */
class LowestPriorPrice extends ApiObject
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