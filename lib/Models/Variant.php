<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property array<string, AdvancedAttribute> $advancedAttributes 
 * @property string $appliedPricePromotionKey 
 * @property array<string, Attribute> $attributes 
 * @property LowestPriorPrice $lowestPriorPrice 
 * @property Price $price 
 * @property int $productId 
 * @property string $referenceKey 
 * @property Timestamp $firstLiveAt 
 * @property Stock $stock 
 * @property array<string, CustomData> $customData 
 * @property Merchant $merchant 
 * @property Timestamp $createdAt 
 * @property Timestamp $updatedAt 
 */
class Variant extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'price' => \Scayle\StorefrontApi\Models\Price::class,
		'stock' => \Scayle\StorefrontApi\Models\Stock::class,
    ];

    protected $collectionClassMap = [
        'attributes' => \Scayle\StorefrontApi\Models\Attribute::class,
        'advancedAttributes' => \Scayle\StorefrontApi\Models\AdvancedAttribute::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}