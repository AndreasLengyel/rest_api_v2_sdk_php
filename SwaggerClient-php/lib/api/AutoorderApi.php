<?php
/**
 * AutoorderApi
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
 * AutoorderApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AutoorderApi
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
     * @return AutoorderApi
     */
    public function setApiClient(\ultracart\v2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAutoOrder
     *
     * Retrieve an auto order
     *
     * @param int $auto_order_oid The auto order oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return \ultracart\v2\models\AutoOrderResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getAutoOrder($auto_order_oid, $_expand = null)
    {
        list($response) = $this->getAutoOrderWithHttpInfo($auto_order_oid, $_expand);
        return $response;
    }

    /**
     * Operation getAutoOrderWithHttpInfo
     *
     * Retrieve an auto order
     *
     * @param int $auto_order_oid The auto order oid to retrieve. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return Array of \ultracart\v2\models\AutoOrderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getAutoOrderWithHttpInfo($auto_order_oid, $_expand = null)
    {
        // verify the required parameter 'auto_order_oid' is set
        if ($auto_order_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auto_order_oid when calling getAutoOrder');
        }
        // parse inputs
        $resourcePath = "/auto_order/auto_orders/{auto_order_oid}";
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
        if ($auto_order_oid !== null) {
            $resourcePath = str_replace(
                "{" . "auto_order_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($auto_order_oid),
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
                '\ultracart\v2\models\AutoOrderResponse',
                '/auto_order/auto_orders/{auto_order_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\AutoOrderResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\AutoOrderResponse', $e->getResponseHeaders());
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
     * Operation getAutoOrders
     *
     * Retrieve auto orders
     *
     * @param string $auto_order_code Auto order code (optional)
     * @param string $original_order_id Original order id (optional)
     * @param string $first_name First name (optional)
     * @param string $last_name Last name (optional)
     * @param string $company Company (optional)
     * @param string $city City (optional)
     * @param string $state State (optional)
     * @param string $postal_code Postal code (optional)
     * @param string $country_code Country code (ISO-3166 two letter) (optional)
     * @param string $phone Phone (optional)
     * @param string $email Email (optional)
     * @param string $original_order_date_begin Original order date begin (optional)
     * @param string $original_order_date_end Original order date end (optional)
     * @param string $next_shipment_date_begin Next shipment date begin (optional)
     * @param string $next_shipment_date_end Next shipment date end (optional)
     * @param string $card_type Card type (optional)
     * @param string $item_id Item ID (optional)
     * @param string $status Status (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Max 200) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch auto orders that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return \ultracart\v2\models\AutoOrdersResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getAutoOrders($auto_order_code = null, $original_order_id = null, $first_name = null, $last_name = null, $company = null, $city = null, $state = null, $postal_code = null, $country_code = null, $phone = null, $email = null, $original_order_date_begin = null, $original_order_date_end = null, $next_shipment_date_begin = null, $next_shipment_date_end = null, $card_type = null, $item_id = null, $status = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null)
    {
        list($response) = $this->getAutoOrdersWithHttpInfo($auto_order_code, $original_order_id, $first_name, $last_name, $company, $city, $state, $postal_code, $country_code, $phone, $email, $original_order_date_begin, $original_order_date_end, $next_shipment_date_begin, $next_shipment_date_end, $card_type, $item_id, $status, $_limit, $_offset, $_since, $_sort, $_expand);
        return $response;
    }

    /**
     * Operation getAutoOrdersWithHttpInfo
     *
     * Retrieve auto orders
     *
     * @param string $auto_order_code Auto order code (optional)
     * @param string $original_order_id Original order id (optional)
     * @param string $first_name First name (optional)
     * @param string $last_name Last name (optional)
     * @param string $company Company (optional)
     * @param string $city City (optional)
     * @param string $state State (optional)
     * @param string $postal_code Postal code (optional)
     * @param string $country_code Country code (ISO-3166 two letter) (optional)
     * @param string $phone Phone (optional)
     * @param string $email Email (optional)
     * @param string $original_order_date_begin Original order date begin (optional)
     * @param string $original_order_date_end Original order date end (optional)
     * @param string $next_shipment_date_begin Next shipment date begin (optional)
     * @param string $next_shipment_date_end Next shipment date end (optional)
     * @param string $card_type Card type (optional)
     * @param string $item_id Item ID (optional)
     * @param string $status Status (optional)
     * @param int $_limit The maximum number of records to return on this one API call. (Max 200) (optional, default to 100)
     * @param int $_offset Pagination of the record set.  Offset is a zero based index. (optional, default to 0)
     * @param string $_since Fetch auto orders that have been created/modified since this date/time. (optional)
     * @param string $_sort The sort order of the items.  See Sorting documentation for examples of using multiple values and sorting by ascending and descending. (optional)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return Array of \ultracart\v2\models\AutoOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function getAutoOrdersWithHttpInfo($auto_order_code = null, $original_order_id = null, $first_name = null, $last_name = null, $company = null, $city = null, $state = null, $postal_code = null, $country_code = null, $phone = null, $email = null, $original_order_date_begin = null, $original_order_date_end = null, $next_shipment_date_begin = null, $next_shipment_date_end = null, $card_type = null, $item_id = null, $status = null, $_limit = null, $_offset = null, $_since = null, $_sort = null, $_expand = null)
    {
        // parse inputs
        $resourcePath = "/auto_order/auto_orders";
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
        if ($auto_order_code !== null) {
            $queryParams['auto_order_code'] = $this->apiClient->getSerializer()->toQueryValue($auto_order_code);
        }
        // query params
        if ($original_order_id !== null) {
            $queryParams['original_order_id'] = $this->apiClient->getSerializer()->toQueryValue($original_order_id);
        }
        // query params
        if ($first_name !== null) {
            $queryParams['first_name'] = $this->apiClient->getSerializer()->toQueryValue($first_name);
        }
        // query params
        if ($last_name !== null) {
            $queryParams['last_name'] = $this->apiClient->getSerializer()->toQueryValue($last_name);
        }
        // query params
        if ($company !== null) {
            $queryParams['company'] = $this->apiClient->getSerializer()->toQueryValue($company);
        }
        // query params
        if ($city !== null) {
            $queryParams['city'] = $this->apiClient->getSerializer()->toQueryValue($city);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = $this->apiClient->getSerializer()->toQueryValue($state);
        }
        // query params
        if ($postal_code !== null) {
            $queryParams['postal_code'] = $this->apiClient->getSerializer()->toQueryValue($postal_code);
        }
        // query params
        if ($country_code !== null) {
            $queryParams['country_code'] = $this->apiClient->getSerializer()->toQueryValue($country_code);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = $this->apiClient->getSerializer()->toQueryValue($phone);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = $this->apiClient->getSerializer()->toQueryValue($email);
        }
        // query params
        if ($original_order_date_begin !== null) {
            $queryParams['original_order_date_begin'] = $this->apiClient->getSerializer()->toQueryValue($original_order_date_begin);
        }
        // query params
        if ($original_order_date_end !== null) {
            $queryParams['original_order_date_end'] = $this->apiClient->getSerializer()->toQueryValue($original_order_date_end);
        }
        // query params
        if ($next_shipment_date_begin !== null) {
            $queryParams['next_shipment_date_begin'] = $this->apiClient->getSerializer()->toQueryValue($next_shipment_date_begin);
        }
        // query params
        if ($next_shipment_date_end !== null) {
            $queryParams['next_shipment_date_end'] = $this->apiClient->getSerializer()->toQueryValue($next_shipment_date_end);
        }
        // query params
        if ($card_type !== null) {
            $queryParams['card_type'] = $this->apiClient->getSerializer()->toQueryValue($card_type);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = $this->apiClient->getSerializer()->toQueryValue($item_id);
        }
        // query params
        if ($status !== null) {
            $queryParams['status'] = $this->apiClient->getSerializer()->toQueryValue($status);
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
                '\ultracart\v2\models\AutoOrdersResponse',
                '/auto_order/auto_orders'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\AutoOrdersResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\AutoOrdersResponse', $e->getResponseHeaders());
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
     * Operation updateAutoOrder
     *
     * Update an auto order
     *
     * @param \ultracart\v2\models\AutoOrder $auto_order Auto order to update (required)
     * @param int $auto_order_oid The auto order oid to update. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return \ultracart\v2\models\AutoOrderResponse
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function updateAutoOrder($auto_order, $auto_order_oid, $_expand = null)
    {
        list($response) = $this->updateAutoOrderWithHttpInfo($auto_order, $auto_order_oid, $_expand);
        return $response;
    }

    /**
     * Operation updateAutoOrderWithHttpInfo
     *
     * Update an auto order
     *
     * @param \ultracart\v2\models\AutoOrder $auto_order Auto order to update (required)
     * @param int $auto_order_oid The auto order oid to update. (required)
     * @param string $_expand The object expansion to perform on the result.  See documentation for examples (optional)
     * @return Array of \ultracart\v2\models\AutoOrderResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\v2\ApiException on non-2xx response
     */
    public function updateAutoOrderWithHttpInfo($auto_order, $auto_order_oid, $_expand = null)
    {
        // verify the required parameter 'auto_order' is set
        if ($auto_order === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auto_order when calling updateAutoOrder');
        }
        // verify the required parameter 'auto_order_oid' is set
        if ($auto_order_oid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auto_order_oid when calling updateAutoOrder');
        }
        // parse inputs
        $resourcePath = "/auto_order/auto_orders/{auto_order_oid}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json; charset=UTF-8'));

        // query params
        if ($_expand !== null) {
            $queryParams['_expand'] = $this->apiClient->getSerializer()->toQueryValue($_expand);
        }
        // path params
        if ($auto_order_oid !== null) {
            $resourcePath = str_replace(
                "{" . "auto_order_oid" . "}",
                $this->apiClient->getSerializer()->toPathValue($auto_order_oid),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($auto_order)) {
            $_tempBody = $auto_order;
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
                '\ultracart\v2\models\AutoOrderResponse',
                '/auto_order/auto_orders/{auto_order_oid}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\v2\models\AutoOrderResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\v2\models\AutoOrderResponse', $e->getResponseHeaders());
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
