<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class PromotionTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->promotions->Get( []);

        $expectedResponseJson = $this->loadFixture('PromotionGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\PromotionsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}