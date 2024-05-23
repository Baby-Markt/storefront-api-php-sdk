<?php

namespace Scayle\StorefrontApi\Models;

/**
 * @property string $id The unique identifier of the promotion
 * @property string $name Promotion name
 * @property array $schedule Promotion's initial and end date, formatted according to RFC 3339.
 * @property bool $isActive Promotion's status
 * @property AutomaticDiscountEffect|BuyXGetYEffect $effect 
 * @property Condition[] $conditions Promotion's conditions
 * @property array $customData Promotion's custom data
 * @property float $priority The priority of the promotion compared to other promotions.
This can be used to decide which promotion to apply if there is a conflict between two.

 * @property Tier[] $tiers 
 */
class Promotion extends ApiObject
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