# SAMSPlugin\RestClient\SAMSLeaguesAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllLeagues()**](SAMSLeaguesAPIApi.md#getAllLeagues) | **GET** /leagues | Returns all available leagues as a paged list. The default page size is 20. The page size must not be greater than 100 |
| [**getLeagueByUuid()**](SAMSLeaguesAPIApi.md#getLeagueByUuid) | **GET** /leagues/{uuid} | Returns a league identified by the given UUID |
| [**getMatchDaysForLeague()**](SAMSLeaguesAPIApi.md#getMatchDaysForLeague) | **GET** /leagues/{uuid}/match-days | Returns all match days corresponding to the league identified by the given UUID |
| [**getRankingsForLeague()**](SAMSLeaguesAPIApi.md#getRankingsForLeague) | **GET** /leagues/{uuid}/rankings | Returns the rankings of a league identified by the given UUID. |
| [**getTeamsForLeague()**](SAMSLeaguesAPIApi.md#getTeamsForLeague) | **GET** /leagues/{uuid}/teams | Returns all teams of a league identified by the given UUID as a paged list. The default page size is 20. The page size must not be greater than 100 |


## `getAllLeagues()`

```php
getAllLeagues($x_api_key, $page, $size, $association, $season): \SAMSPlugin\RestClient\Model\LeaguePage
```

Returns all available leagues as a paged list. The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeaguesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100
$association = 'association_example'; // string | Filter for association using the given UUID. Defaults to no filtering.
$season = 'season_example'; // string | Filter for season using the given UUID. Defaults to no filtering.

try {
    $result = $apiInstance->getAllLeagues($x_api_key, $page, $size, $association, $season);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeaguesAPIApi->getAllLeagues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |
| **page** | **int**| Requested page number. Defaults to the first page (i.e. page number 0). | [optional] |
| **size** | **int**| Requested number of items per page. Defaults to 20. The maximum allowed value is 100 | [optional] |
| **association** | **string**| Filter for association using the given UUID. Defaults to no filtering. | [optional] |
| **season** | **string**| Filter for season using the given UUID. Defaults to no filtering. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeaguePage**](../Model/LeaguePage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeagueByUuid()`

```php
getLeagueByUuid($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\LeagueDto
```

Returns a league identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeaguesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getLeagueByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeaguesAPIApi->getLeagueByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueDto**](../Model/LeagueDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchDaysForLeague()`

```php
getMatchDaysForLeague($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\LeagueMatchDayPage
```

Returns all match days corresponding to the league identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeaguesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getMatchDaysForLeague($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeaguesAPIApi->getMatchDaysForLeague: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\LeagueMatchDayPage**](../Model/LeagueMatchDayPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRankingsForLeague()`

```php
getRankingsForLeague($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\LeagueRankingsResourcePage
```

Returns the rankings of a league identified by the given UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeaguesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getRankingsForLeague($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeaguesAPIApi->getRankingsForLeague: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\LeagueRankingsResourcePage**](../Model/LeagueRankingsResourcePage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamsForLeague()`

```php
getTeamsForLeague($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\TeamPage
```

Returns all teams of a league identified by the given UUID as a paged list. The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeaguesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getTeamsForLeague($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeaguesAPIApi->getTeamsForLeague: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\TeamPage**](../Model/TeamPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
