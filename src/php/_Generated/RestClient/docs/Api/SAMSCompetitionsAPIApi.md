# SAMSPlugin\RestClient\SAMSCompetitionsAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllCompetitions()**](SAMSCompetitionsAPIApi.md#getAllCompetitions) | **GET** /competitions | Returns all available competitions as a paged list. |
| [**getCompetitionByUuid()**](SAMSCompetitionsAPIApi.md#getCompetitionByUuid) | **GET** /competitions/{uuid} | Returns a competition identified by the given UUID |
| [**getMatchGroupsForCompetition()**](SAMSCompetitionsAPIApi.md#getMatchGroupsForCompetition) | **GET** /competitions/{uuid}/match-groups | Returns all match groups corresponding to the competition identified by the given UUID |
| [**getRankingsForCompetition()**](SAMSCompetitionsAPIApi.md#getRankingsForCompetition) | **GET** /competitions/{uuid}/rankings | Returns the rankings of a competition identified by the given UUID. |
| [**getTeamsForCompetition()**](SAMSCompetitionsAPIApi.md#getTeamsForCompetition) | **GET** /competitions/{uuid}/teams | Returns all teams of a competition identified by the given UUID as a paged list. |


## `getAllCompetitions()`

```php
getAllCompetitions($x_api_key, $page, $size, $association, $season): \SAMSPlugin\RestClient\Model\CompetitionPage
```

Returns all available competitions as a paged list.

The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSCompetitionsAPIApi(
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
    $result = $apiInstance->getAllCompetitions($x_api_key, $page, $size, $association, $season);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSCompetitionsAPIApi->getAllCompetitions: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\CompetitionPage**](../Model/CompetitionPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompetitionByUuid()`

```php
getCompetitionByUuid($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\CompetitionDto
```

Returns a competition identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSCompetitionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getCompetitionByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSCompetitionsAPIApi->getCompetitionByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\CompetitionDto**](../Model/CompetitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMatchGroupsForCompetition()`

```php
getMatchGroupsForCompetition($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\CompetitionMatchGroupPage
```

Returns all match groups corresponding to the competition identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSCompetitionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getMatchGroupsForCompetition($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSCompetitionsAPIApi->getMatchGroupsForCompetition: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\CompetitionMatchGroupPage**](../Model/CompetitionMatchGroupPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRankingsForCompetition()`

```php
getRankingsForCompetition($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\CompetitionRankingsResourcePage
```

Returns the rankings of a competition identified by the given UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSCompetitionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getRankingsForCompetition($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSCompetitionsAPIApi->getRankingsForCompetition: ', $e->getMessage(), PHP_EOL;
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

[**\SAMSPlugin\RestClient\Model\CompetitionRankingsResourcePage**](../Model/CompetitionRankingsResourcePage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamsForCompetition()`

```php
getTeamsForCompetition($uuid, $x_api_key, $page, $size): \SAMSPlugin\RestClient\Model\TeamPage
```

Returns all teams of a competition identified by the given UUID as a paged list.

The default page size is 20. The page size must not be greater than 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSCompetitionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100

try {
    $result = $apiInstance->getTeamsForCompetition($uuid, $x_api_key, $page, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSCompetitionsAPIApi->getTeamsForCompetition: ', $e->getMessage(), PHP_EOL;
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
