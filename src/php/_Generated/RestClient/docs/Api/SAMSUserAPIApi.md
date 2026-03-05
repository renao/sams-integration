# SAMSPlugin\RestClient\SAMSUserAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCurrentUser()**](SAMSUserAPIApi.md#getCurrentUser) | **GET** /user-details/current | Retrieves the user data for the current user identified by the mandatory JSON web token authorization header |
| [**userDetailsRootLinks()**](SAMSUserAPIApi.md#userDetailsRootLinks) | **GET** /user-details | Provides links to sub resources |


## `getCurrentUser()`

```php
getCurrentUser($x_api_key): \SAMSPlugin\RestClient\Model\UserDetailsDto
```

Retrieves the user data for the current user identified by the mandatory JSON web token authorization header

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSUserAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getCurrentUser($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSUserAPIApi->getCurrentUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\UserDetailsDto**](../Model/UserDetailsDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userDetailsRootLinks()`

```php
userDetailsRootLinks($x_api_key): \SAMSPlugin\RestClient\Model\HalRepresentation
```

Provides links to sub resources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSUserAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->userDetailsRootLinks($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSUserAPIApi->userDetailsRootLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\HalRepresentation**](../Model/HalRepresentation.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
