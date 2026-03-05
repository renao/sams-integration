# SAMSPlugin\RestClient\SAMSLeagueMatchesAPIApi



All URIs are relative to https://wvv.sams-server.de/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAllLeagueMatches()**](SAMSLeagueMatchesAPIApi.md#getAllLeagueMatches) | **GET** /league-matches | Returns all available league matches as a paged list. |
| [**getLeagueMatchByUuid()**](SAMSLeagueMatchesAPIApi.md#getLeagueMatchByUuid) | **GET** /league-matches/{uuid} | Returns a league match identified by the given UUID |


## `getAllLeagueMatches()`

```php
getAllLeagueMatches($x_api_key, $page, $size, $association, $for_season, $for_league, $for_sportsclub, $for_team): \SAMSPlugin\RestClient\Model\LeagueMatchPage
```

Returns all available league matches as a paged list.

The default page size is 20. The page size must not be greater than 100. The result list can be filtered for a particular season, league, sports club, or team by passing the UUID of the entity for which to filter as a filter query parameter. The filters will be combined with AND semantics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueMatchesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.
$page = 56; // int | Requested page number. Defaults to the first page (i.e. page number 0).
$size = 56; // int | Requested number of items per page. Defaults to 20. The maximum allowed value is 100
$association = 'association_example'; // string | Filter for association using the given UUID. Defaults to no filtering.
$for_season = 'for_season_example'; // string | Filter by season UUID: Find all matches from a particular season.
$for_league = 'for_league_example'; // string | Filter by league UUID: Find all matches from a particular league.
$for_sportsclub = 'for_sportsclub_example'; // string | Filter by sports club UUID: Find all matches for a particular sports club.
$for_team = 'for_team_example'; // string | Filter by team UUID: Find all matches attended by a particular team.

try {
    $result = $apiInstance->getAllLeagueMatches($x_api_key, $page, $size, $association, $for_season, $for_league, $for_sportsclub, $for_team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueMatchesAPIApi->getAllLeagueMatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |
| **page** | **int**| Requested page number. Defaults to the first page (i.e. page number 0). | [optional] |
| **size** | **int**| Requested number of items per page. Defaults to 20. The maximum allowed value is 100 | [optional] |
| **association** | **string**| Filter for association using the given UUID. Defaults to no filtering. | [optional] |
| **for_season** | **string**| Filter by season UUID: Find all matches from a particular season. | [optional] |
| **for_league** | **string**| Filter by league UUID: Find all matches from a particular league. | [optional] |
| **for_sportsclub** | **string**| Filter by sports club UUID: Find all matches for a particular sports club. | [optional] |
| **for_team** | **string**| Filter by team UUID: Find all matches attended by a particular team. | [optional] |

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

## `getLeagueMatchByUuid()`

```php
getLeagueMatchByUuid($uuid, $x_api_key): \SAMSPlugin\RestClient\Model\LeagueMatchDto
```

Returns a league match identified by the given UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SAMSPlugin\RestClient\Api\SAMSLeagueMatchesAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getLeagueMatchByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSLeagueMatchesAPIApi->getLeagueMatchByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **x_api_key** | **string**| A SAMS API key with permission to access this API. | [optional] |

### Return type

[**\SAMSPlugin\RestClient\Model\LeagueMatchDto**](../Model/LeagueMatchDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/hal+json; charset=UTF-8`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
