<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property int $id 
 * @property string $key Reference that identifies the attribute
 * @property string $label The label that describes the attribute group will be set according to the shop's language in the SCAYLE Panel.
 * @property bool $multiSelect A flag which determines whether an attribute has a single or possibly multiple values.
 * @property string $type Attribute type
 * @property AttributeValue[] $values The values are a collection of attributes from the attribute group.
 */
class Attribute extends ApiObject
{
    protected $defaultValues = [
        
    ];

    protected $classMap = [
    ];

    protected $collectionClassMap = [
        'values' => \Scayle\StorefrontApi\Models\AttributeValue::class,
    ];

    protected $collection2dClassMap = [
    ];

protected $polymorphic = [
    ];

    protected $polymorphicCollections = [
    ];
}