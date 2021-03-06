<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  Appkr\PetStore
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Swagger Petstore
 *
 * This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Appkr\PetStore\Service;

use \Appkr\PetStore\ApiClient;
use \Appkr\PetStore\ApiException;
use \Appkr\PetStore\Configuration;
use \Appkr\PetStore\ObjectSerializer;

/**
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  Appkr\PetStore
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
{
    /**
     * API Client
     *
     * @var \Appkr\PetStore\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Appkr\PetStore\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Appkr\PetStore\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Appkr\PetStore\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Appkr\PetStore\ApiClient $apiClient set the API client
     *
     * @return UserApi
     */
    public function setApiClient(\Appkr\PetStore\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createUser
     *
     * Create user
     *
     * @param \Appkr\PetStore\Model\User $body Created user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function createUser($body)
    {
        list($response) = $this->createUserWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createUserWithHttpInfo
     *
     * Create user
     *
     * @param \Appkr\PetStore\Model\User $body Created user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUserWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUser');
        }
        // parse inputs
        $resourcePath = "/user";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array
     *
     * @param \Appkr\PetStore\Model\User[] $body List of user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function createUsersWithArrayInput($body)
    {
        list($response) = $this->createUsersWithArrayInputWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createUsersWithArrayInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Appkr\PetStore\Model\User[] $body List of user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithArrayInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithArrayInput');
        }
        // parse inputs
        $resourcePath = "/user/createWithArray";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/createWithArray'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array
     *
     * @param \Appkr\PetStore\Model\User[] $body List of user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function createUsersWithListInput($body)
    {
        list($response) = $this->createUsersWithListInputWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createUsersWithListInputWithHttpInfo
     *
     * Creates list of users with given input array
     *
     * @param \Appkr\PetStore\Model\User[] $body List of user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUsersWithListInputWithHttpInfo($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithListInput');
        }
        // parse inputs
        $resourcePath = "/user/createWithList";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/createWithList'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation deleteUser
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function deleteUser($username)
    {
        list($response) = $this->deleteUserWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation deleteUserWithHttpInfo
     *
     * Delete user
     *
     * @param string $username The name that needs to be deleted (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling deleteUser');
        }
        // parse inputs
        $resourcePath = "/user/{username}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                "{" . "username" . "}",
                $this->apiClient->getSerializer()->toPathValue($username),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/{username}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation getUserByName
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return \Appkr\PetStore\Model\User
     */
    public function getUserByName($username)
    {
        list($response) = $this->getUserByNameWithHttpInfo($username);
        return $response;
    }

    /**
     * Operation getUserByNameWithHttpInfo
     *
     * Get user by user name
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of \Appkr\PetStore\Model\User, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserByNameWithHttpInfo($username)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling getUserByName');
        }
        // parse inputs
        $resourcePath = "/user/{username}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                "{" . "username" . "}",
                $this->apiClient->getSerializer()->toPathValue($username),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Appkr\PetStore\Model\User',
                '/user/{username}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Appkr\PetStore\Model\User', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Appkr\PetStore\Model\User', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation loginUser
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return string
     */
    public function loginUser($username, $password)
    {
        list($response) = $this->loginUserWithHttpInfo($username, $password);
        return $response;
    }

    /**
     * Operation loginUserWithHttpInfo
     *
     * Logs user into the system
     *
     * @param string $username The user name for login (required)
     * @param string $password The password for login in clear text (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginUserWithHttpInfo($username, $password)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling loginUser');
        }
        // verify the required parameter 'password' is set
        if ($password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling loginUser');
        }
        // parse inputs
        $resourcePath = "/user/login";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($username !== null) {
            $queryParams['username'] = $this->apiClient->getSerializer()->toQueryValue($username);
        }
        // query params
        if ($password !== null) {
            $queryParams['password'] = $this->apiClient->getSerializer()->toQueryValue($password);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                'string',
                '/user/login'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, 'string', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session
     *
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function logoutUser()
    {
        list($response) = $this->logoutUserWithHttpInfo();
        return $response;
    }

    /**
     * Operation logoutUserWithHttpInfo
     *
     * Logs out current logged in user session
     *
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function logoutUserWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/user/logout";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/logout'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation updateUser
     *
     * Updated user
     *
     * @param string $username name that need to be updated (required)
     * @param \Appkr\PetStore\Model\User $body Updated user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return void
     */
    public function updateUser($username, $body)
    {
        list($response) = $this->updateUserWithHttpInfo($username, $body);
        return $response;
    }

    /**
     * Operation updateUserWithHttpInfo
     *
     * Updated user
     *
     * @param string $username name that need to be updated (required)
     * @param \Appkr\PetStore\Model\User $body Updated user object (required)
     * @throws \Appkr\PetStore\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateUserWithHttpInfo($username, $body)
    {
        // verify the required parameter 'username' is set
        if ($username === null) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling updateUser');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateUser');
        }
        // parse inputs
        $resourcePath = "/user/{username}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/xml', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($username !== null) {
            $resourcePath = str_replace(
                "{" . "username" . "}",
                $this->apiClient->getSerializer()->toPathValue($username),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/user/{username}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }
}
