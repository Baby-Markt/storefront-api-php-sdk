<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class PromotionService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\PromotionsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'promotions', $combinedOptions, \Scayle\StorefrontApi\Models\PromotionsResponse::class);
     }

}
