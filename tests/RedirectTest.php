<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class RedirectTest extends BaseApiTestCase
{
    public function testGet()
    {
        $responseEntity = $this->api->redirects->Get( []);

        $expectedResponseJson = $this->loadFixture('RedirectGetResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\RedirectsResponse::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}