<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key A unique key identifying the basket.
 * @property BasketItem[] $items 
 * @property Price $cost 
 * @property Package[] $packages 
 * @property ApplicablePromotion[] $applicablePromotions 
 */
class Basket extends ApiObject
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