<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property BrandOrCategorySuggestion $brandOrCategorySuggestion 
 * @property float $score 
 * @property string $type 
 */
class TypeaheadBrandOrCategorySuggestion extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'brandOrCategorySuggestion' => \Scayle\StorefrontApi\Models\BrandOrCategorySuggestion::class,
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