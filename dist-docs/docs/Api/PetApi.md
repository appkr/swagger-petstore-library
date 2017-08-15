# Appkr\PetStore\PetApi

All URIs are relative to *http://petstore.swagger.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPet**](PetApi.md#addPet) | **POST** /pet | Add a new pet to the store
[**deletePet**](PetApi.md#deletePet) | **DELETE** /pet/{petId} | Deletes a pet
[**findPetsByStatus**](PetApi.md#findPetsByStatus) | **GET** /pet/findByStatus | Finds Pets by status
[**findPetsByTags**](PetApi.md#findPetsByTags) | **GET** /pet/findByTags | Finds Pets by tags
[**getPetById**](PetApi.md#getPetById) | **GET** /pet/{petId} | Find pet by ID
[**updatePet**](PetApi.md#updatePet) | **PUT** /pet | Update an existing pet
[**updatePetWithForm**](PetApi.md#updatePetWithForm) | **POST** /pet/{petId} | Updates a pet in the store with form data
[**uploadFile**](PetApi.md#uploadFile) | **POST** /pet/{petId}/uploadImage | uploads an image


# **addPet**
> addPet($body)

Add a new pet to the store



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$body = new \Appkr\PetStore\Model\Pet(); // \Appkr\PetStore\Model\Pet | Pet object that needs to be added to the store

try {
    $api_instance->addPet($body);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->addPet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Appkr\PetStore\Model\Pet**](../Model/Pet.md)| Pet object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePet**
> deletePet($petId, $apiKey)

Deletes a pet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$petId = 789; // int | Pet id to delete
$apiKey = "apiKey_example"; // string | 

try {
    $api_instance->deletePet($petId, $apiKey);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->deletePet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| Pet id to delete |
 **apiKey** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPetsByStatus**
> \Appkr\PetStore\Model\Pet[] findPetsByStatus($status)

Finds Pets by status

Multiple status values can be provided with comma separated strings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$status = array("status_example"); // string[] | Status values that need to be considered for filter

try {
    $result = $api_instance->findPetsByStatus($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->findPetsByStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**string[]**](../Model/string.md)| Status values that need to be considered for filter |

### Return type

[**\Appkr\PetStore\Model\Pet[]**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findPetsByTags**
> \Appkr\PetStore\Model\Pet[] findPetsByTags($tags)

Finds Pets by tags

Muliple tags can be provided with comma separated strings. Use tag1, tag2, tag3 for testing.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$tags = array("tags_example"); // string[] | Tags to filter by

try {
    $result = $api_instance->findPetsByTags($tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->findPetsByTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tags** | [**string[]**](../Model/string.md)| Tags to filter by |

### Return type

[**\Appkr\PetStore\Model\Pet[]**](../Model/Pet.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPetById**
> \Appkr\PetStore\Model\Pet getPetById($petId)

Find pet by ID

Returns a single pet

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Appkr\PetStore\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Appkr\PetStore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$api_instance = new Appkr\PetStore\Api\PetApi();
$petId = 789; // int | ID of pet to return

try {
    $result = $api_instance->getPetById($petId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->getPetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet to return |

### Return type

[**\Appkr\PetStore\Model\Pet**](../Model/Pet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePet**
> updatePet($body)

Update an existing pet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$body = new \Appkr\PetStore\Model\Pet(); // \Appkr\PetStore\Model\Pet | Pet object that needs to be added to the store

try {
    $api_instance->updatePet($body);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->updatePet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Appkr\PetStore\Model\Pet**](../Model/Pet.md)| Pet object that needs to be added to the store |

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePetWithForm**
> updatePetWithForm($petId, $name, $status)

Updates a pet in the store with form data



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$petId = 789; // int | ID of pet that needs to be updated
$name = "name_example"; // string | Updated name of the pet
$status = "status_example"; // string | Updated status of the pet

try {
    $api_instance->updatePetWithForm($petId, $name, $status);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->updatePetWithForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet that needs to be updated |
 **name** | **string**| Updated name of the pet | [optional]
 **status** | **string**| Updated status of the pet | [optional]

### Return type

void (empty response body)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadFile**
> \Appkr\PetStore\Model\ApiResponse uploadFile($petId, $additionalMetadata, $file)

uploads an image



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: petstore_auth
Appkr\PetStore\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Appkr\PetStore\Api\PetApi();
$petId = 789; // int | ID of pet to update
$additionalMetadata = "additionalMetadata_example"; // string | Additional data to pass to server
$file = "/path/to/file.txt"; // \SplFileObject | file to upload

try {
    $result = $api_instance->uploadFile($petId, $additionalMetadata, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PetApi->uploadFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **petId** | **int**| ID of pet to update |
 **additionalMetadata** | **string**| Additional data to pass to server | [optional]
 **file** | **\SplFileObject**| file to upload | [optional]

### Return type

[**\Appkr\PetStore\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[petstore_auth](../../README.md#petstore_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

