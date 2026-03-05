# OpenAPI\Client\SAMSSuperCompetitionsAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllSuperCompetitions()**](SAMSSuperCompetitionsAPIApi.md#getAllSuperCompetitions) | **GET** /super-competitions | Returns all available super competitions as a paged list. |
| [**getSuperCompetitionByUuid()**](SAMSSuperCompetitionsAPIApi.md#getSuperCompetitionByUuid) | **GET** /super-competitions/{uuid} | Returns a super competition identified by the given UUID |


## `getAllSuperCompetitions()`

```php
getAllSuperCompetitions($x_api_key, $page, $size, $association, $season): \OpenAPI\Client\Model\SuperCompetitionPage
```

Returns all available super competitions as a paged list.

The default page size is 20. The page size must not be greater than 100. The sub-competitions belonging to each super competition are added as an _embedded entity list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SAMSSuperCompetitionsAPIApi(
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
    $result = $apiInstance->getAllSuperCompetitions($x_api_key, $page, $size, $association, $season);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSuperCompetitionsAPIApi->getAllSuperCompetitions: ', $e->getMessage(), PHP_EOL;
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

[**\OpenAPI\Client\Model\SuperCompetitionPage**](../Model/SuperCompetitionPage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuperCompetitionByUuid()`

```php
getSuperCompetitionByUuid($uuid, $x_api_key): \OpenAPI\Client\Model\SuperCompetitionDto
```

Returns a super competition identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\SAMSSuperCompetitionsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getSuperCompetitionByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSSuperCompetitionsAPIApi->getSuperCompetitionByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\OpenAPI\Client\Model\SuperCompetitionDto**](../Model/SuperCompetitionDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
