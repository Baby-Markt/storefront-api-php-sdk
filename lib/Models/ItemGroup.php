<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $id A unique identifier for the item group which should be used for all basket items of the item group.

Any string based identifier can be chosen and it only has to be unique within the current basket.

 * @property bool $isMainItem Whether or not the current item is the main item within the item group.
This property can be used for display purposes to only show the main item within the Checkout.

 * @property bool $isRequired Whether or not the item is required to be present for the item group.
When you delete an item from your basket which is required for the item group, all other items assigned to the item group will also be deleted.

 */
class ItemGroup extends ApiObject
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