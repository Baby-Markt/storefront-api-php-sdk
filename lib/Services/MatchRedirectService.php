<?php

namespace Scayle\StorefrontApi\Services;

use Scayle\StorefrontApi\Exceptions\ApiErrorException;
use Psr\Http\Client\ClientExceptionInterface;

/**
 */
class MatchRedirectService extends AbstractService
{
	/**
	 * Description
	 *
	 * @param \Scayle\StorefrontApi\Models\MatchRedirectBody $model the model to create or update
	 * @param array $options additional options like limit or filters
	 *
	 * @return \Scayle\StorefrontApi\Models\MatchRedirect
     * @throws ClientExceptionInterface
     * @throws ApiErrorException
	 */
	 public function match($model, $options = [])
	 {
         $combinedOptions = $options;

		 return $this->request('post', 'redirects', $combinedOptions, \Scayle\StorefrontApi\Models\MatchRedirect::class, $model);
     }

}
