<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class ShopConfigurationTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->shopConfigurations->Get('1',  []);

        $expectedResponseJson = $this->loadFixture('ShopConfigurationGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\ShopConfiguration::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());

            $this->assertPropertyHasTheCorrectType($responseEntity, 'customData', \Scayle\StorefrontApi\Models\CustomData::class);
            $this->assertPropertyHasTheCorrectType($responseEntity, 'properties', \Scayle\StorefrontApi\Models\ShopProperties::class);



    }

}