# OpenAPI\Client\SAMSSeasonsAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSeasons()**](SAMSSeasonsAPIApi.md#getAllSeasons) | **GET** /seasons | Returns all available seasons |
| [**getLeagueHierarchiesForSeason()**](SAMSSeasonsAPIApi.md#getLeagueHierarchiesForSeason) | **GET** /seasons/{uuid}/league-hierarchies | Returns all league hierarchies corresponding to the season identified by the given UUID |
| [**getSeasonByUuid()**](SAMSSeasonsAPIApi.md#getSeasonByUuid) | **GET** /seasons/{uuid} | Returns a season identified by the given UUID |


## `getAllSeasons()`

```php
getAllSeasons($x_api_key): \OpenAPI\Client\Model\SeasonDto[]
```

Returns all available seasons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SAMSSeasonsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getAllSeasons($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSeasonsAPIApi->getAllSeasons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeasonDto[]**](../Model/SeasonDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeagueHierarchiesForSeason()`

```php
getLeagueHierarchiesForSeason($uuid, $x_api_key, $page, $size): \OpenAPI\Client\Model\LeagueHierarchyPage
```

Returns all league hierarchies corresponding to the season identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SAMSSeasonsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getLeagueHierarchiesForSeason($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSeasonsAPIApi->getLeagueHierarchiesForSeason: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\LeagueHierarchyPage**](../Model/LeagueHierarchyPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSeasonByUuid()`

```php
getSeasonByUuid($uuid, $x_api_key): \OpenAPI\Client\Model\SeasonDto
```

Returns a season identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SAMSSeasonsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getSeasonByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSeasonsAPIApi->getSeasonByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SeasonDto**](../Model/SeasonDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
