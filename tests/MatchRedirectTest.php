<?php

namespace Scayle\StorefrontApi;

use Scayle\StorefrontApi\Models\Identifier;

class MatchRedirectTest extends BaseApiTestCase
{
    public function testMatch()
    {
        $expectedRequestJson = $this->loadFixture('MatchRedirectMatchRequest.json');

        $requestEntity = new \Scayle\StorefrontApi\Models\MatchRedirectBody($expectedRequestJson);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedRequestJson), $requestEntity->toJson());

        $responseEntity = $this->api->matchRedirects->Match($requestEntity,  []);

        $expectedResponseJson = $this->loadFixture('MatchRedirectMatchResponse.json');
        $this->assertInstanceOf(\Scayle\StorefrontApi\Models\MatchRedirect::class, $responseEntity);
        $this->assertJsonStringEqualsJsonString(json_encode($expectedResponseJson), $responseEntity->toJson());




    }

}