<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property ProductSuggestion $productSuggestion 
 * @property float $score 
 * @property string $type 
 */
class TypeaheadProductSuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'productSuggestion' => \Scayle\StorefrontApi\Models\ProductSuggestion::class,
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