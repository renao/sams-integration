# SAMSPlugin\RestClient\SAMSMatchDaysAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllMatchDays()**](SAMSMatchDaysAPIApi.md#getAllMatchDays) | **GET** /match-days | Returns all available match days as a paged list. |
| [**getMatchDayByUuid()**](SAMSMatchDaysAPIApi.md#getMatchDayByUuid) | **GET** /match-days/{uuid} | Returns a match day identified by the given UUID |
| [**getMatchesByMatchDay()**](SAMSMatchDaysAPIApi.md#getMatchesByMatchDay) | **GET** /match-days/{uuid}/league-matches | Returns all matches of a match day based on the given UUID. The default page size is 20. The page size must not be greater than 100 |


## `getAllMatchDays()`

```php
getAllMatchDays($x_api_key, $page, $size, $association): \SAMSPlugin\RestClient\Model\LeagueMatchDayPage
```

Returns all available match days as a paged list.

The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSMatchDaysAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100
$association = 'association_example'; // string | Filter for association using the given UUID. Defaults to no filtering.

try {
    $result = $apiInstance->getAllMatchDays($x_api_key, $page, $size, $association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSMatchDaysAPIApi->getAllMatchDays: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\LeagueMatchDayPage**](../Model/LeagueMatchDayPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchDayByUuid()`

```php
getMatchDayByUuid($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\LeagueMatchDayDto
```

Returns a match day identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSMatchDaysAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getMatchDayByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSMatchDaysAPIApi->getMatchDayByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueMatchDayDto**](../Model/LeagueMatchDayDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchesByMatchDay()`

```php
getMatchesByMatchDay($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\LeagueMatchPage
```

Returns all matches of a match day based on the given UUID. The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSMatchDaysAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getMatchesByMatchDay($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSMatchDaysAPIApi->getMatchesByMatchDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |
| **page** | **int**| Requested page number. Defaults to the first page (i.e. page number 0). | [optional] |
| **size** | **int**| Requested number of items per page. Defaults to 20. The maximum allowed value is 100 | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueMatchPage**](../Model/LeagueMatchPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
