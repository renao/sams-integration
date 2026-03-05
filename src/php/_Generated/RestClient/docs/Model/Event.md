# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Entity unique identifier | [optional]
**_links** | [**array<string,\SAMSPlugin\RestClient\Model\LinkDto>**](LinkDto.md) |  | [optional]
**_embedded** | **array<string,object>** |  | [optional]
**name** | **string** |  | [optional]
**shortname** | **string** |  | [optional]
**event_number** | **int** |  | [optional]
**overriding_event_number** | **string** |  | [optional]
**date_not_yet_known** | **bool** | True if no start and end date has been set yet | [optional]
**ends_at** | **\DateTime** |  | [optional]
**begins_at** | **\DateTime** | Start date for an event. Is null if dateNotYetKnown is true | [optional]
**registration_deadline** | **\DateTime** |  | [optional]
**association_uuid** | **string** |  | [optional]
**canceled** | **bool** | True if the event has been canceled | [optional]
**minimum_number_of_participants** | **int** |  | [optional]
**maximum_number_of_participants** | **int** |  | [optional]
**used_capacity** | **int** | Number of registered participants for an event. If this event is a subordinate event, i.e. there is a higher level event, then this value is calculated as the sum of all participants of the higher level event and all participants of this higher level event&#39;s subordinate event. If this event has subordinate events, then this value is calculated as the sum of participants of this event and all its subordinate events. | [optional]
**registration_uri** | **string** |  | [optional]
**location** | [**\SAMSPlugin\RestClient\Model\Location**](Location.md) |  | [optional]
**event_type_uuid** | **string** | Reference to the type details for this event | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
