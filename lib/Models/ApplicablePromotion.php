<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $itemId The Basket Item ID to which the promotion should be applied. This can be null in case of a `bux_x_get_y` effect where the free item is not in the basket yet.
 * @property Promotion $promotion 
 */
class ApplicablePromotion extends ApiObject
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