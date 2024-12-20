<?php

declare(strict_types=1);

/**
 * SPDX-License-Identifier: Apache-2.0
 *
 * The OpenSearch Contributors require contributions made to
 * this file be licensed under the Apache-2.0 license or a
 * compatible open source license.
 *
 * Modifications Copyright OpenSearch Contributors. See
 * GitHub history for details.
 */

namespace OpenSearch\Namespaces;

use OpenSearch\Namespaces\AbstractNamespace;

/**
 * Class IsmNamespace
 *
 * NOTE: This file is autogenerated using util/GenerateEndpoints.php
 */
class IsmNamespace extends AbstractNamespace
{
    /**
     * Adds a policy to an index.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`).
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function addPolicy(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\AddPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Updates the managed index policy to a new policy.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`).
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function changePolicy(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\ChangePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Deletes a policy.
     *
     * $params['policy_id']   = (string)  (Required)
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function deletePolicy(array $params = [])
    {
        $policy_id = $this->extractArgument($params, 'policy_id');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\DeletePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyId($policy_id);

        return $this->performRequest($endpoint);
    }

    /**
     * Checks whether the policy exists.
     *
     * $params['policy_id']   = (string)  (Required)
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return bool
     */
    public function existsPolicy(array $params = []): bool
    {
        $policy_id = $this->extractArgument($params, 'policy_id');

        // manually make this verbose so we can check status code
        $params['client']['verbose'] = true;

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\ExistsPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyId($policy_id);

        return BooleanRequestWrapper::performRequest($endpoint, $this->transport);
    }

    /**
     * Gets the currently applied policy on indexes.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`).
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function explainPolicy(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\ExplainPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Gets the policies.
     *
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getPolicies(array $params = [])
    {
        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\GetPolicies::class);
        $endpoint->setParams($params);

        return $this->performRequest($endpoint);
    }

    /**
     * Gets a policy.
     *
     * $params['policy_id']   = (string)  (Required)
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function getPolicy(array $params = [])
    {
        $policy_id = $this->extractArgument($params, 'policy_id');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\GetPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyId($policy_id);

        return $this->performRequest($endpoint);
    }

    /**
     * Gets the policies.
     *
     * $params['if_primary_term'] = (number) Only perform the operation if the document has this primary term.
     * $params['if_seq_no']       = (integer) Only perform the operation if the document has this sequence number.
     * $params['policyID']        = (string)
     * $params['pretty']          = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']           = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace']     = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']          = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']     = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putPolicies(array $params = [])
    {
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\PutPolicies::class);
        $endpoint->setParams($params);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Creates or updates a policy.
     *
     * $params['policy_id']       = (string)  (Required)
     * $params['if_primary_term'] = (number) Only perform the operation if the document has this primary term.
     * $params['if_seq_no']       = (integer) Only perform the operation if the document has this sequence number.
     * $params['pretty']          = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']           = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace']     = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']          = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path']     = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function putPolicy(array $params = [])
    {
        $policy_id = $this->extractArgument($params, 'policy_id');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\PutPolicy::class);
        $endpoint->setParams($params);
        $endpoint->setPolicyId($policy_id);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

    /**
     * Refresh search analyzers in real time.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`). (Required)
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function refreshSearchAnalyzers(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\RefreshSearchAnalyzers::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }

    /**
     * Removes a policy from an index.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`).
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function removePolicy(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\RemovePolicy::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);

        return $this->performRequest($endpoint);
    }

    /**
     * Retry the failed action for an index.
     *
     * $params['index']       = (string) Comma-separated list of data streams, indexes, and aliases. Supports wildcards (`*`).
     * $params['pretty']      = (boolean) Whether to pretty format the returned JSON response. (Default = false)
     * $params['human']       = (boolean) Whether to return human readable values for statistics. (Default = true)
     * $params['error_trace'] = (boolean) Whether to include the stack trace of returned errors. (Default = false)
     * $params['source']      = (string) The URL-encoded request definition. Useful for libraries that do not accept a request body for non-POST requests.
     * $params['filter_path'] = (any) Used to reduce the response. This parameter takes a comma-separated list of filters. It supports using wildcards to match any field or part of a field’s name. You can also exclude fields with "-".
     *
     * @param array $params Associative array of parameters
     * @return array
     */
    public function retryIndex(array $params = [])
    {
        $index = $this->extractArgument($params, 'index');
        $body = $this->extractArgument($params, 'body');

        $endpoint = $this->endpointFactory->getEndpoint(\OpenSearch\Endpoints\Ism\RetryIndex::class);
        $endpoint->setParams($params);
        $endpoint->setIndex($index);
        $endpoint->setBody($body);

        return $this->performRequest($endpoint);
    }

}