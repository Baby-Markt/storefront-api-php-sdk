<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id The unique identifier of the category.
 * @property string $path The slugs for all `rootlineIds` combined with `/` (e.g., `/women/fashion`).
 * @property string $name The name of the category
 * @property string $slug A short string to describe the current category (usable, for example, in URLs as).
 * @property int $parentId The parent category ID (root-level categories have a parent ID of `0`)
 * @property int[] $rootlineIds The IDs for the path from the topmost root category to the current category, which is included as the last item.
 * @property int[] $childrenIds The child category IDs attached to the current category
 * @property CategoryProperty[] $properties Properties attached to this category.
 * @property bool $isHidden A flag that defines if a category should be displayed by the frontend
 * @property int $depth The nesting level of the category (root-level depth = 1, child nodes = 2, child nodes' children = 3, etc.)
 * @property string[] $supportedFilter A list of filters that can be used for filtering products in the category
 * @property mixed $parent 
 * @property array $shopLevelCustomData Additional category data defined on the shop level
 * @property array $countryLevelCustomData Additional category data defined on the country level
 * @property Category[] $children An array of child category objects.
Returned if requested as `tree format` or using `with`.

 */
class Category extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
		'parent' => \Scayle\StorefrontApi\Models\Category::class,
    ];

    protected $collectionClassMap = [
        'children' => \Scayle\StorefrontApi\Models\Category::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}