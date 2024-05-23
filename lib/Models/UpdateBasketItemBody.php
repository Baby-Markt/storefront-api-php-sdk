<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $quantity The updated quantity for the basket item.
 * @property string $promotionId Updates the promotion id of the item.

If the 'promotionId' property is not sent in the request no update is performed on the field.
if the value is null then any previous applied promotion will be removed from the item.

 * @property BasketItemCustomData $customData 
 * @property BasketItemDisplayData $displayData 
 * @property ItemGroup $itemGroup 
 */
class UpdateBasketItemBody extends ApiObject
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