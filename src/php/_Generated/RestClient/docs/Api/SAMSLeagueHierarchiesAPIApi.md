# SAMSPlugin\RestClient\SAMSLeagueHierarchiesAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllLeagueHierarchies()**](SAMSLeagueHierarchiesAPIApi.md#getAllLeagueHierarchies) | **GET** /league-hierarchies | Returns all available league hierarchy elements as a paged list. |
| [**getCompetitionsByLeagueHierarchy()**](SAMSLeagueHierarchiesAPIApi.md#getCompetitionsByLeagueHierarchy) | **GET** /league-hierarchies/{uuid}/competitions | Returns all competitions corresponding to the league hierarchy identified by the given UUID |
| [**getLeagueHierarchyByUuid()**](SAMSLeagueHierarchiesAPIApi.md#getLeagueHierarchyByUuid) | **GET** /league-hierarchies/{uuid} | Returns a league hierarchy element identified by the given UUID |
| [**getLeaguesByLeagueHierarchy()**](SAMSLeagueHierarchiesAPIApi.md#getLeaguesByLeagueHierarchy) | **GET** /league-hierarchies/{uuid}/leagues | Returns all leagues corresponding to the league hierarchy identified by the given UUID |
| [**getSuperCompetitionsByLeagueHierarchy()**](SAMSLeagueHierarchiesAPIApi.md#getSuperCompetitionsByLeagueHierarchy) | **GET** /league-hierarchies/{uuid}/super-competitions | Returns all super competitions corresponding to the league hierarchy identified by the given UUID |


## `getAllLeagueHierarchies()`

```php
getAllLeagueHierarchies($x_api_key, $page, $size, $for_season, $association): \SAMSPlugin\RestClient\Model\LeagueHierarchyPage
```

Returns all available league hierarchy elements as a paged list.

The default page size is 20. The page size must not be greater than 100. The result list can be filtered for a particular season.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueHierarchiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100
$for_season = 'for_season_example'; // string | Filter for the season. UUID of the season to which the league hierarchy belongs.
$association = 'association_example'; // string | Filter for association using the given UUID. Defaults to no filtering.

try {
    $result = $apiInstance->getAllLeagueHierarchies($x_api_key, $page, $size, $for_season, $association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueHierarchiesAPIApi->getAllLeagueHierarchies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |
| **page** | **int**| Requested page number. Defaults to the first page (i.e. page number 0). | [optional] |
| **size** | **int**| Requested number of items per page. Defaults to 20. The maximum allowed value is 100 | [optional] |
| **for_season** | **string**| Filter for the season. UUID of the season to which the league hierarchy belongs. | [optional] |
| **association** | **string**| Filter for association using the given UUID. Defaults to no filtering. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueHierarchyPage**](../Model/LeagueHierarchyPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompetitionsByLeagueHierarchy()`

```php
getCompetitionsByLeagueHierarchy($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\CompetitionPage
```

Returns all competitions corresponding to the league hierarchy identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueHierarchiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getCompetitionsByLeagueHierarchy($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueHierarchiesAPIApi->getCompetitionsByLeagueHierarchy: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\CompetitionPage**](../Model/CompetitionPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeagueHierarchyByUuid()`

```php
getLeagueHierarchyByUuid($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\LeagueHierarchyDto
```

Returns a league hierarchy element identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueHierarchiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getLeagueHierarchyByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueHierarchiesAPIApi->getLeagueHierarchyByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueHierarchyDto**](../Model/LeagueHierarchyDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLeaguesByLeagueHierarchy()`

```php
getLeaguesByLeagueHierarchy($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\LeaguePage
```

Returns all leagues corresponding to the league hierarchy identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueHierarchiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getLeaguesByLeagueHierarchy($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueHierarchiesAPIApi->getLeaguesByLeagueHierarchy: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\LeaguePage**](../Model/LeaguePage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuperCompetitionsByLeagueHierarchy()`

```php
getSuperCompetitionsByLeagueHierarchy($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\SuperCompetitionPage
```

Returns all super competitions corresponding to the league hierarchy identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueHierarchiesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getSuperCompetitionsByLeagueHierarchy($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueHierarchiesAPIApi->getSuperCompetitionsByLeagueHierarchy: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\SuperCompetitionPage**](../Model/SuperCompetitionPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
