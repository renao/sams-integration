# # CompetitionDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Entity unique identifier | [optional]
**_links** | [**array<string,\SAMSPlugin\RestClient\Model\LinkDto>**](LinkDto.md) |  | [optional]
**_embedded** | **array<string,object>** |  | [optional]
**name** | **string** |  | [optional]
**short_name** | **string** |  | [optional]
**gender** | **string** |  | [optional]
**league_hierarchy_uuid** | **string** |  | [optional]
**season_uuid** | **string** |  | [optional]
**association_uuid** | **string** |  | [optional]
**latest_result_update** | **\DateTime** |  | [optional]
**latest_structural_update** | **\DateTime** |  | [optional]
**score_table_calculation_mode** | **string** |  | [optional]
**super_competition_uuid** | **string** | If this competition is the sub-competition of a super competition then this UUID points to this super competition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
