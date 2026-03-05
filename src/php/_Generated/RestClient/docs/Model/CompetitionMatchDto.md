# # CompetitionMatchDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Entity unique identifier | [optional]
**_links** | [**array<string,\OpenAPI\Client\Model\LinkDto>**](LinkDto.md) |  | [optional]
**_embedded** | **array<string,object>** |  | [optional]
**date** | **\DateTime** |  | [optional]
**time** | **string** |  | [optional]
**match_number** | **int** |  | [optional]
**deciding_match** | **bool** |  | [optional]
**game_reassessed** | **bool** |  | [optional]
**host** | **string** |  | [optional]
**referees** | [**\OpenAPI\Client\Model\RefereeTeamDto**](RefereeTeamDto.md) |  | [optional]
**spectators** | **int** |  | [optional]
**net_duration** | **int** |  | [optional]
**verified** | **bool** |  | [optional]
**location** | [**\OpenAPI\Client\Model\Location**](Location.md) |  | [optional]
**season_uuid** | **string** |  | [optional]
**association_uuid** | **string** |  | [optional]
**team1_description** | **string** |  | [optional]
**team2_description** | **string** |  | [optional]
**results** | [**\OpenAPI\Client\Model\VolleyballMatchResultsDto**](VolleyballMatchResultsDto.md) |  | [optional]
**match_group_uuid** | **string** |  | [optional]
**competition_uuid** | **string** |  | [optional]
**indefinitely_rescheduled** | **bool** |  | [optional]
**delay_possible** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
