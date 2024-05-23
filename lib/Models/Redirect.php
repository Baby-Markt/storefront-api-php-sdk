<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id The unique identifier of the redirect
 * @property string $source The source URL for the redirect
 * @property string $target The target URL for the redirect
 * @property int $statusCode The status code for the redirect
 * @property int $priority The priority for the redirect
 * @property bool $isRegex The flag if the source is a regex
 */
class Redirect extends ApiObject
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