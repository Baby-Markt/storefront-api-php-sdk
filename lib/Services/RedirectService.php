<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class RedirectService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\RedirectsResponse
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function get($options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('get', 'redirects', $combinedOptions, \Scayle\StorefrontApi\Models\RedirectsResponse::class);
     }

}
