# Appkr\PetStore\StoreApi

All URIs are relative to *http://petstore.swagger.io/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrder**](StoreApi.md#deleteOrder) | **DELETE** /store/order/{orderId} | Delete purchase order by ID
[**getInventory**](StoreApi.md#getInventory) | **GET** /store/inventory | Returns pet inventories by status
[**getOrderById**](StoreApi.md#getOrderById) | **GET** /store/order/{orderId} | Find purchase order by ID
[**placeOrder**](StoreApi.md#placeOrder) | **POST** /store/order | Place an order for a pet


# **deleteOrder**
> deleteOrder($orderId)

Delete purchase order by ID

For valid response try integer IDs with positive integer value. Negative or non-integer values will generate API errors

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Appkr\PetStore\Api\StoreApi();
$orderId = 789; // int | ID of the order that needs to be deleted

try {
    $api_instance->deleteOrder($orderId);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| ID of the order that needs to be deleted |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventory**
> map[string,int] getInventory()

Returns pet inventories by status

Returns a map of status codes to quantities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Appkr\PetStore\Configuration::getDefaultConfiguration()->setApiKey('api_key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Appkr\PetStore\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_key', 'Bearer');

$api_instance = new Appkr\PetStore\Api\StoreApi();

try {
    $result = $api_instance->getInventory();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,int]**](../Model/map.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderById**
> \Appkr\PetStore\Model\Order getOrderById($orderId)

Find purchase order by ID

For valid response try integer IDs with value >= 1 and <= 10. Other values will generated exceptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Appkr\PetStore\Api\StoreApi();
$orderId = 789; // int | ID of pet that needs to be fetched

try {
    $result = $api_instance->getOrderById($orderId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->getOrderById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **int**| ID of pet that needs to be fetched |

### Return type

[**\Appkr\PetStore\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **placeOrder**
> \Appkr\PetStore\Model\Order placeOrder($body)

Place an order for a pet



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Appkr\PetStore\Api\StoreApi();
$body = new \Appkr\PetStore\Model\Order(); // \Appkr\PetStore\Model\Order | order placed for purchasing the pet

try {
    $result = $api_instance->placeOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreApi->placeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Appkr\PetStore\Model\Order**](../Model/Order.md)| order placed for purchasing the pet |

### Return type

[**\Appkr\PetStore\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

