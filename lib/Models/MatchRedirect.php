<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $source The source URL for the redirect
 * @property string $target The target URL for the redirect
 * @property int $statusCode The status code for the redirect
 */
class MatchRedirect extends ApiObject
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