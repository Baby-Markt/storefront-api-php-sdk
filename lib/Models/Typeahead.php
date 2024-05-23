<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property BrandOrCategorySuggestion|ProductSuggestion $suggestions 
 * @property BrandOrCategorySuggestion $topMatch 
 */
class Typeahead extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'topMatch' => \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collectionClassMap = [
        'suggestions' => \Scayle\StorefrontApi\Models\TypeaheadSuggestion::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}