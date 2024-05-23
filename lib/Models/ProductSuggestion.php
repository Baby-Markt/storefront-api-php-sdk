<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $suggestion 
 * @property Product $product 
 */
class ProductSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'product' => \Scayle\StorefrontApi\Models\Product::class,
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