<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $key A key identifying which data is displayed here.
The value is not shown in the Scayle Checkout.

 * @property string $label The label explaining the value which will be displayed in the Scayle Checkout for the Basket Item.
 * @property string $value The value which will be displayed in the Scayle Checkout for the Basket Item.
 */
class DisplayDataValue extends ApiObject
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