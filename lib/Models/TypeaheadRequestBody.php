<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string|int $fuzziness The fuzziness parameter can enable some typo tolerance. Available values are 0, 1, 2, and auto. Defaults to auto. Note: The value set in the SCAYLE Panel will not impact this search.
 * @property int $categoryId The `categoryId` parameter can filter by category ID.
 * @property int $limit The `limit` parameter allows limiting the number of suggested products returned.
 * @property string $term The `term` parameter allows you to query for any entity with a full or partial match with the given term.
 */
class TypeaheadRequestBody extends ApiObject
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