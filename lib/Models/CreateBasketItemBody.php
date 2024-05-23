<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $quantity The quantity for the variant.
 * @property int $variantId The variant to be added to the basket.
 * @property string $promotionId An optional promotion ID which should be applied to this item.
 * @property BasketItemCustomData $customData 
 * @property BasketItemDisplayData $displayData 
 * @property ItemGroup $itemGroup 
 */
class CreateBasketItemBody extends ApiObject
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