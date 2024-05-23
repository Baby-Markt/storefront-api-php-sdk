<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property array $assets 
 * @property string $name 
 * @property string $type 
 * @property string $visibleFrom 
 * @property string $visibleTo 
 * @property array $options 
 * @property NavigationItemExtraFilter $extraFilters 
 * @property Category $category 
 * @property NavigationItem[] $children 
 * @property array $customData 
 */
class NavigationItem extends ApiObject
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