<?php
/**
 * OauthApi
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2
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

namespace ultracart\admin\v2\api;

use \ultracart\admin\v2\Configuration;
use \ultracart\admin\v2\ApiClient;
use \ultracart\admin\v2\ApiException;
use \ultracart\admin\v2\ObjectSerializer;

/**
 * OauthApi Class Doc Comment
 *
 * @category Class
 * @package  ultracart\admin\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OauthApi
{

    /**
     * API Client
     *
     * @var \ultracart\admin\v2\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \ultracart\admin\v2\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\ultracart\admin\v2\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://secure.ultracart.com/rest/admin/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \ultracart\admin\v2\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \ultracart\admin\v2\ApiClient $apiClient set the API client
     *
     * @return OauthApi
     */
    public function setApiClient(\ultracart\admin\v2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation oauthRevokePost
     *
     * Revoke this OAuth application.
     *
     * @param string $client_id The OAuth application client_id. (required)
     * @param string $token The OAuth access token that is to be revoked.. (required)
     * @return \ultracart\admin\v2\models\OauthRevokeSuccessResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function oauthRevokePost($client_id, $token)
    {
        list($response) = $this->oauthRevokePostWithHttpInfo($client_id, $token);
        return $response;
    }

    /**
     * Operation oauthRevokePostWithHttpInfo
     *
     * Revoke this OAuth application.
     *
     * @param string $client_id The OAuth application client_id. (required)
     * @param string $token The OAuth access token that is to be revoked.. (required)
     * @return Array of \ultracart\admin\v2\models\OauthRevokeSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function oauthRevokePostWithHttpInfo($client_id, $token)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling oauthRevokePost');
        }
        // verify the required parameter 'token' is set
        if ($token === null) {
            throw new \InvalidArgumentException('Missing the required parameter $token when calling oauthRevokePost');
        }
        // parse inputs
        $resourcePath = "/oauth/revoke";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = $this->apiClient->getSerializer()->toFormValue($client_id);
        }
        // form params
        if ($token !== null) {
            $formParams['token'] = $this->apiClient->getSerializer()->toFormValue($token);
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
                '\ultracart\admin\v2\models\OauthRevokeSuccessResponse',
                '/oauth/revoke'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\OauthRevokeSuccessResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\OauthRevokeSuccessResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation oauthTokenPost
     *
     * Exchange authorization code for access token.
     *
     * @param string $client_id The OAuth application client_id. (required)
     * @param string $grant_type must be authorization_code or refresh_token (required)
     * @param string $code required for authorization_code (optional)
     * @param string $redirect_uri required for authorization_code (optional)
     * @param string $refresh_token required for refresh_token (optional)
     * @return \ultracart\admin\v2\models\OauthTokenSuccessResponse
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function oauthTokenPost($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        list($response) = $this->oauthTokenPostWithHttpInfo($client_id, $grant_type, $code, $redirect_uri, $refresh_token);
        return $response;
    }

    /**
     * Operation oauthTokenPostWithHttpInfo
     *
     * Exchange authorization code for access token.
     *
     * @param string $client_id The OAuth application client_id. (required)
     * @param string $grant_type must be authorization_code or refresh_token (required)
     * @param string $code required for authorization_code (optional)
     * @param string $redirect_uri required for authorization_code (optional)
     * @param string $refresh_token required for refresh_token (optional)
     * @return Array of \ultracart\admin\v2\models\OauthTokenSuccessResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \ultracart\admin\v2\ApiException on non-2xx response
     */
    public function oauthTokenPostWithHttpInfo($client_id, $grant_type, $code = null, $redirect_uri = null, $refresh_token = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling oauthTokenPost');
        }
        // verify the required parameter 'grant_type' is set
        if ($grant_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $grant_type when calling oauthTokenPost');
        }
        // parse inputs
        $resourcePath = "/oauth/token";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($client_id !== null) {
            $formParams['client_id'] = $this->apiClient->getSerializer()->toFormValue($client_id);
        }
        // form params
        if ($grant_type !== null) {
            $formParams['grant_type'] = $this->apiClient->getSerializer()->toFormValue($grant_type);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = $this->apiClient->getSerializer()->toFormValue($code);
        }
        // form params
        if ($redirect_uri !== null) {
            $formParams['redirect_uri'] = $this->apiClient->getSerializer()->toFormValue($redirect_uri);
        }
        // form params
        if ($refresh_token !== null) {
            $formParams['refresh_token'] = $this->apiClient->getSerializer()->toFormValue($refresh_token);
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
                '\ultracart\admin\v2\models\OauthTokenSuccessResponse',
                '/oauth/token'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\ultracart\admin\v2\models\OauthTokenSuccessResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\OauthTokenSuccessResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\ultracart\admin\v2\models\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
