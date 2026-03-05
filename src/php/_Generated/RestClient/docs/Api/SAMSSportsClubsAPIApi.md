# SAMSPlugin\RestClient\SAMSSportsClubsAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSportsclubs()**](SAMSSportsClubsAPIApi.md#getAllSportsclubs) | **GET** /sportsclubs | Returns all available sports clubs. |
| [**getSportsclub()**](SAMSSportsClubsAPIApi.md#getSportsclub) | **GET** /sportsclubs/{uuid} | Returns a sports club identified by the given UUID. |


## `getAllSportsclubs()`

```php
getAllSportsclubs($x_api_key, $page, $size, $association): \SAMSPlugin\RestClient\Model\SportsclubPage
```

Returns all available sports clubs.

The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSSportsClubsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100
$association = 'association_example'; // string | Filter for association using the given UUID. Defaults to no filtering.

try {
    $result = $apiInstance->getAllSportsclubs($x_api_key, $page, $size, $association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSportsClubsAPIApi->getAllSportsclubs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |
| **page** | **int**| Requested page number. Defaults to the first page (i.e. page number 0). | [optional] |
| **size** | **int**| Requested number of items per page. Defaults to 20. The maximum allowed value is 100 | [optional] |
| **association** | **string**| Filter for association using the given UUID. Defaults to no filtering. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\SportsclubPage**](../Model/SportsclubPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSportsclub()`

```php
getSportsclub($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\SportsclubDto
```

Returns a sports club identified by the given UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSSportsClubsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getSportsclub($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSportsClubsAPIApi->getSportsclub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\SportsclubDto**](../Model/SportsclubDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
