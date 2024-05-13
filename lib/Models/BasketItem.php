<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key A unique key for the basket item which can be used for updating or deleting it.
 * @property int $packageId The package in which the basket item will be send.

Corresponds to a package id in the `packages` list of a `Basket`.

 * @property int $quantity The quantity of the item.
 * @property int $availableQuantity The total available quantity for the variant which can be added to the basket.
 * @property string $status The status of the basket item, either it is 'available' which means in stock
or it's unavailable meaning it's out of stock.

 * @property Variant $variant 
 * @property Product $product 
 * @property BasketItemPrice $price 
 * @property LowestPriorPrice $lowestPriorPrice 
 * @property string $promotionId The promotion which will be applied to the item.
 * @property ItemGroup $itemGroup 
 * @property BasketItemCustomData $customData 
 * @property BasketItemDisplayData $displayData 
 * @property DeliveryForecast $deliveryForecast 
 * @property BasketItemPromotion $promotion 
 */
class BasketItem extends ApiObject
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