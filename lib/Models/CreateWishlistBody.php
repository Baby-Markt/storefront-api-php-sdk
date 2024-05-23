<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $variantId Variant ID to add to the wishlist.
 * @property int $productId Product ID to add to the wishlist. When provided, the first found in-stock variant of the product will be added.
 * @property array<string, CustomData> $customData 
 * @property int $quantity The quantity for the variant.
 */
class CreateWishlistBody extends ApiObject
{
    protected $defaultValues = [
        'quantity' => '1',
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