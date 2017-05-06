<?php
/**
 * ChargebackApi
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\api;

use \ultracart\v2\Configuration;
use \ultracart\v2\ApiClient;
use \ultracart\v2\ApiException;
use \ultracart\v2\ObjectSerializer;

/**
 * ChargebackApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChargebackApi
{

    /**
     * API Client
     *
     * @var \ultracart\v2\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ultracart\v2\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ultracart\v2\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://secure.ultracart.com/rest/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ultracart\v2\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ultracart\v2\ApiClient $apiClient set the API client
     *
     * @return ChargebackApi
     */
    public function setApiClient(\ultracart\v2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidDelete
     *
     * Delete a chargeback
     *
     * @param int $chargeback_dispute_oid The chargeback_dispute_oid to delete. (required)
     * @return \ultracart\v2\models\ChargebackDisputeResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidDelete($chargeback_dispute_oid)
    {
        list($response) = $this->chargebackChargebacksChargebackDisputeOidDeleteWithHttpInfo($chargeback_dispute_oid);
        return $response;
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidDeleteWithHttpInfo
     *
     * Delete a chargeback
     *
     * @param int $chargeback_dispute_oid The chargeback_dispute_oid to delete. (required)
     * @return Array of \ultracart\v2\models\ChargebackDisputeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidDeleteWithHttpInfo($chargeback_dispute_oid)
    {
        // verify the required parameter 'chargeback_dispute_oid' is set
        if ($chargeback_dispute_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chargeback_dispute_oid when calling chargebackChargebacksChargebackDisputeOidDelete');
        }
        // parse inputs
        $resourcePath = "/chargeback/chargebacks/{chargeback_dispute_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

        // path params
        if ($chargeback_dispute_oid !== null) {
            $resourcePath = str_replace(
                "{" . "chargeback_dispute_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($chargeback_dispute_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ChargebackDisputeResponse',
                '/chargeback/chargebacks/{chargeback_dispute_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ChargebackDisputeResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ChargebackDisputeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidGet
     *
     * Retrieve a chargeback
     *
     * @param int $chargeback_dispute_oid The chargeback dispute oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return \ultracart\v2\models\ChargebackDisputeResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidGet($chargeback_dispute_oid, $_expand = null)
    {
        list($response) = $this->chargebackChargebacksChargebackDisputeOidGetWithHttpInfo($chargeback_dispute_oid, $_expand);
        return $response;
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidGetWithHttpInfo
     *
     * Retrieve a chargeback
     *
     * @param int $chargeback_dispute_oid The chargeback dispute oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return Array of \ultracart\v2\models\ChargebackDisputeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidGetWithHttpInfo($chargeback_dispute_oid, $_expand = null)
    {
        // verify the required parameter 'chargeback_dispute_oid' is set
        if ($chargeback_dispute_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chargeback_dispute_oid when calling chargebackChargebacksChargebackDisputeOidGet');
        }
        // parse inputs
        $resourcePath = "/chargeback/chargebacks/{chargeback_dispute_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // path params
        if ($chargeback_dispute_oid !== null) {
            $resourcePath = str_replace(
                "{" . "chargeback_dispute_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($chargeback_dispute_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ChargebackDisputeResponse',
                '/chargeback/chargebacks/{chargeback_dispute_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ChargebackDisputeResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ChargebackDisputeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidPut
     *
     * Update a chargeback
     *
     * @param \ultracart\v2\models\ChargebackDispute $chargeback Chargeback to update (required)
     * @param int $chargeback_dispute_oid The chargeback_dispute_oid to update. (required)
     * @return \ultracart\v2\models\ChargebackDisputeResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidPut($chargeback, $chargeback_dispute_oid)
    {
        list($response) = $this->chargebackChargebacksChargebackDisputeOidPutWithHttpInfo($chargeback, $chargeback_dispute_oid);
        return $response;
    }

    /**
     * Operation chargebackChargebacksChargebackDisputeOidPutWithHttpInfo
     *
     * Update a chargeback
     *
     * @param \ultracart\v2\models\ChargebackDispute $chargeback Chargeback to update (required)
     * @param int $chargeback_dispute_oid The chargeback_dispute_oid to update. (required)
     * @return Array of \ultracart\v2\models\ChargebackDisputeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksChargebackDisputeOidPutWithHttpInfo($chargeback, $chargeback_dispute_oid)
    {
        // verify the required parameter 'chargeback' is set
        if ($chargeback === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chargeback when calling chargebackChargebacksChargebackDisputeOidPut');
        }
        // verify the required parameter 'chargeback_dispute_oid' is set
        if ($chargeback_dispute_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chargeback_dispute_oid when calling chargebackChargebacksChargebackDisputeOidPut');
        }
        // parse inputs
        $resourcePath = "/chargeback/chargebacks/{chargeback_dispute_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

        // path params
        if ($chargeback_dispute_oid !== null) {
            $resourcePath = str_replace(
                "{" . "chargeback_dispute_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($chargeback_dispute_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($chargeback)) {
            $_tempBody = $chargeback;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ChargebackDisputeResponse',
                '/chargeback/chargebacks/{chargeback_dispute_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ChargebackDisputeResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ChargebackDisputeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation chargebackChargebacksGet
     *
     * Retrieve chargebacks
     *
     * @param string $order_id Order Id (optional)
     * @param string $case_number Case number (optional)
     * @param string $status Status (optional)
     * @param string $expiration_dts_start Expiration dts start (optional)
     * @param string $expiration_dts_end Expiration dts end (optional)
     * @param string $chargeback_dts_start Chargeback dts start (optional)
     * @param string $chargeback_dts_end Chargeback dts end (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Max 200) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch chargebacks that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the chargebacks.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return \ultracart\v2\models\ChargebackDisputesResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksGet($order_id = null, $case_number = null, $status = null, $expiration_dts_start = null, $expiration_dts_end = null, $chargeback_dts_start = null, $chargeback_dts_end = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null)
    {
        list($response) = $this->chargebackChargebacksGetWithHttpInfo($order_id, $case_number, $status, $expiration_dts_start, $expiration_dts_end, $chargeback_dts_start, $chargeback_dts_end, $_limit, $_offset, $_since, $_sort, $_expand);
        return $response;
    }

    /**
     * Operation chargebackChargebacksGetWithHttpInfo
     *
     * Retrieve chargebacks
     *
     * @param string $order_id Order Id (optional)
     * @param string $case_number Case number (optional)
     * @param string $status Status (optional)
     * @param string $expiration_dts_start Expiration dts start (optional)
     * @param string $expiration_dts_end Expiration dts end (optional)
     * @param string $chargeback_dts_start Chargeback dts start (optional)
     * @param string $chargeback_dts_end Chargeback dts end (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Max 200) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch chargebacks that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the chargebacks.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return Array of \ultracart\v2\models\ChargebackDisputesResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksGetWithHttpInfo($order_id = null, $case_number = null, $status = null, $expiration_dts_start = null, $expiration_dts_end = null, $chargeback_dts_start = null, $chargeback_dts_end = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null)
    {
        // parse inputs
        $resourcePath = "/chargeback/chargebacks";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($order_id !== null) {
            $queryParams['order_id'] = $this->apiClient->getSerializer()->toQueryValue($order_id);
        }
        // query params
        if ($case_number !== null) {
            $queryParams['case_number'] = $this->apiClient->getSerializer()->toQueryValue($case_number);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
        }
        // query params
        if ($expiration_dts_start !== null) {
            $queryParams['expiration_dts_start'] = $this->apiClient->getSerializer()->toQueryValue($expiration_dts_start);
        }
        // query params
        if ($expiration_dts_end !== null) {
            $queryParams['expiration_dts_end'] = $this->apiClient->getSerializer()->toQueryValue($expiration_dts_end);
        }
        // query params
        if ($chargeback_dts_start !== null) {
            $queryParams['chargeback_dts_start'] = $this->apiClient->getSerializer()->toQueryValue($chargeback_dts_start);
        }
        // query params
        if ($chargeback_dts_end !== null) {
            $queryParams['chargeback_dts_end'] = $this->apiClient->getSerializer()->toQueryValue($chargeback_dts_end);
        }
        // query params
        if ($_limit !== null) {
            $queryParams['_limit'] = $this->apiClient->getSerializer()->toQueryValue($_limit);
        }
        // query params
        if ($_offset !== null) {
            $queryParams['_offset'] = $this->apiClient->getSerializer()->toQueryValue($_offset);
        }
        // query params
        if ($_since !== null) {
            $queryParams['_since'] = $this->apiClient->getSerializer()->toQueryValue($_since);
        }
        // query params
        if ($_sort !== null) {
            $queryParams['_sort'] = $this->apiClient->getSerializer()->toQueryValue($_sort);
        }
        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ChargebackDisputesResponse',
                '/chargeback/chargebacks'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ChargebackDisputesResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ChargebackDisputesResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation chargebackChargebacksPost
     *
     * Insert a chargeback
     *
     * @param \ultracart\v2\models\ChargebackDispute $chargeback Chargeback to insert (required)
     * @return \ultracart\v2\models\ChargebackDisputeResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksPost($chargeback)
    {
        list($response) = $this->chargebackChargebacksPostWithHttpInfo($chargeback);
        return $response;
    }

    /**
     * Operation chargebackChargebacksPostWithHttpInfo
     *
     * Insert a chargeback
     *
     * @param \ultracart\v2\models\ChargebackDispute $chargeback Chargeback to insert (required)
     * @return Array of \ultracart\v2\models\ChargebackDisputeResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function chargebackChargebacksPostWithHttpInfo($chargeback)
    {
        // verify the required parameter 'chargeback' is set
        if ($chargeback === null) {
            throw new \InvalidArgumentException('Missing the required parameter $chargeback when calling chargebackChargebacksPost');
        }
        // parse inputs
        $resourcePath = "/chargeback/chargebacks";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($chargeback)) {
            $_tempBody = $chargeback;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-ultracart-simple-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-ultracart-simple-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\ultracart\v2\models\ChargebackDisputeResponse',
                '/chargeback/chargebacks'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\ChargebackDisputeResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ChargebackDisputeResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 410:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}