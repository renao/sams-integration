# OpenAPIClient-php

The SAMS public REST API


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\SAMSAssociationsAPIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of the requested association
$x_api_key = 'x_api_key_example'; // string | A SAMS API key with permission to access this API.

try {
    $result = $apiInstance->getAssociationByUuid($uuid, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SAMSAssociationsAPIApi->getAssociationByUuid: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://wvv.sams-server.de/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*SAMSAssociationsAPIApi* | [**getAssociationByUuid**](docs/Api/SAMSAssociationsAPIApi.md#getassociationbyuuid) | **GET** /associations/{uuid} | Returns an association identified by the given UUID
*SAMSAssociationsAPIApi* | [**getAssociations**](docs/Api/SAMSAssociationsAPIApi.md#getassociations) | **GET** /associations | Returns all available associations.
*SAMSAssociationsAPIApi* | [**getCommitteesForAssociation**](docs/Api/SAMSAssociationsAPIApi.md#getcommitteesforassociation) | **GET** /associations/{uuid}/committees | Returns the list of committees.
*SAMSAssociationsAPIApi* | [**getSportsclubsForAssociation**](docs/Api/SAMSAssociationsAPIApi.md#getsportsclubsforassociation) | **GET** /associations/{uuid}/sportsclubs | 
*SAMSCommitteesAPIApi* | [**getAllCommittees**](docs/Api/SAMSCommitteesAPIApi.md#getallcommittees) | **GET** /committees | Returns the list of available committees as a paged list.
*SAMSCommitteesAPIApi* | [**getCommittee**](docs/Api/SAMSCommitteesAPIApi.md#getcommittee) | **GET** /committees/{uuid} | Returns a committee identified by the given UUID
*SAMSCompetitionMatchesAPIApi* | [**getAllCompetitionMatchesWithFilter**](docs/Api/SAMSCompetitionMatchesAPIApi.md#getallcompetitionmatcheswithfilter) | **GET** /competition-matches | Returns all available competition matches as a paged list.
*SAMSCompetitionMatchesAPIApi* | [**getCompetitionMatchByUuid**](docs/Api/SAMSCompetitionMatchesAPIApi.md#getcompetitionmatchbyuuid) | **GET** /competition-matches/{uuid} | Returns a competition match identified by the given UUID
*SAMSCompetitionsAPIApi* | [**getAllCompetitions**](docs/Api/SAMSCompetitionsAPIApi.md#getallcompetitions) | **GET** /competitions | Returns all available competitions as a paged list.
*SAMSCompetitionsAPIApi* | [**getCompetitionByUuid**](docs/Api/SAMSCompetitionsAPIApi.md#getcompetitionbyuuid) | **GET** /competitions/{uuid} | Returns a competition identified by the given UUID
*SAMSCompetitionsAPIApi* | [**getMatchGroupsForCompetition**](docs/Api/SAMSCompetitionsAPIApi.md#getmatchgroupsforcompetition) | **GET** /competitions/{uuid}/match-groups | Returns all match groups corresponding to the competition identified by the given UUID
*SAMSCompetitionsAPIApi* | [**getRankingsForCompetition**](docs/Api/SAMSCompetitionsAPIApi.md#getrankingsforcompetition) | **GET** /competitions/{uuid}/rankings | Returns the rankings of a competition identified by the given UUID.
*SAMSCompetitionsAPIApi* | [**getTeamsForCompetition**](docs/Api/SAMSCompetitionsAPIApi.md#getteamsforcompetition) | **GET** /competitions/{uuid}/teams | Returns all teams of a competition identified by the given UUID as a paged list.
*SAMSEventTypesAPIApi* | [**getEventTypeByUuid**](docs/Api/SAMSEventTypesAPIApi.md#geteventtypebyuuid) | **GET** /event-types/{uuid} | Returns an event type identified by the given UUID
*SAMSEventTypesAPIApi* | [**getEventTypes**](docs/Api/SAMSEventTypesAPIApi.md#geteventtypes) | **GET** /event-types | Returns all available event types.
*SAMSEventsAPIApi* | [**getAllEvents**](docs/Api/SAMSEventsAPIApi.md#getallevents) | **GET** /events | Returns all available events as a paged list. The default page size is 20. The page size must not be greater than 100
*SAMSEventsAPIApi* | [**getEventByUuid**](docs/Api/SAMSEventsAPIApi.md#geteventbyuuid) | **GET** /events/{uuid} | Returns an event identified by the given UUID
*SAMSLeagueHierarchiesAPIApi* | [**getAllLeagueHierarchies**](docs/Api/SAMSLeagueHierarchiesAPIApi.md#getallleaguehierarchies) | **GET** /league-hierarchies | Returns all available league hierarchy elements as a paged list.
*SAMSLeagueHierarchiesAPIApi* | [**getCompetitionsByLeagueHierarchy**](docs/Api/SAMSLeagueHierarchiesAPIApi.md#getcompetitionsbyleaguehierarchy) | **GET** /league-hierarchies/{uuid}/competitions | Returns all competitions corresponding to the league hierarchy identified by the given UUID
*SAMSLeagueHierarchiesAPIApi* | [**getLeagueHierarchyByUuid**](docs/Api/SAMSLeagueHierarchiesAPIApi.md#getleaguehierarchybyuuid) | **GET** /league-hierarchies/{uuid} | Returns a league hierarchy element identified by the given UUID
*SAMSLeagueHierarchiesAPIApi* | [**getLeaguesByLeagueHierarchy**](docs/Api/SAMSLeagueHierarchiesAPIApi.md#getleaguesbyleaguehierarchy) | **GET** /league-hierarchies/{uuid}/leagues | Returns all leagues corresponding to the league hierarchy identified by the given UUID
*SAMSLeagueHierarchiesAPIApi* | [**getSuperCompetitionsByLeagueHierarchy**](docs/Api/SAMSLeagueHierarchiesAPIApi.md#getsupercompetitionsbyleaguehierarchy) | **GET** /league-hierarchies/{uuid}/super-competitions | Returns all super competitions corresponding to the league hierarchy identified by the given UUID
*SAMSLeagueMatchesAPIApi* | [**getAllLeagueMatches**](docs/Api/SAMSLeagueMatchesAPIApi.md#getallleaguematches) | **GET** /league-matches | Returns all available league matches as a paged list.
*SAMSLeagueMatchesAPIApi* | [**getLeagueMatchByUuid**](docs/Api/SAMSLeagueMatchesAPIApi.md#getleaguematchbyuuid) | **GET** /league-matches/{uuid} | Returns a league match identified by the given UUID
*SAMSLeaguesAPIApi* | [**getAllLeagues**](docs/Api/SAMSLeaguesAPIApi.md#getallleagues) | **GET** /leagues | Returns all available leagues as a paged list. The default page size is 20. The page size must not be greater than 100
*SAMSLeaguesAPIApi* | [**getLeagueByUuid**](docs/Api/SAMSLeaguesAPIApi.md#getleaguebyuuid) | **GET** /leagues/{uuid} | Returns a league identified by the given UUID
*SAMSLeaguesAPIApi* | [**getMatchDaysForLeague**](docs/Api/SAMSLeaguesAPIApi.md#getmatchdaysforleague) | **GET** /leagues/{uuid}/match-days | Returns all match days corresponding to the league identified by the given UUID
*SAMSLeaguesAPIApi* | [**getRankingsForLeague**](docs/Api/SAMSLeaguesAPIApi.md#getrankingsforleague) | **GET** /leagues/{uuid}/rankings | Returns the rankings of a league identified by the given UUID.
*SAMSLeaguesAPIApi* | [**getTeamsForLeague**](docs/Api/SAMSLeaguesAPIApi.md#getteamsforleague) | **GET** /leagues/{uuid}/teams | Returns all teams of a league identified by the given UUID as a paged list. The default page size is 20. The page size must not be greater than 100
*SAMSLocationsAPIApi* | [**getAllLocations**](docs/Api/SAMSLocationsAPIApi.md#getalllocations) | **GET** /locations | Returns all available locations as a paged list.
*SAMSLocationsAPIApi* | [**getLocationByUuid**](docs/Api/SAMSLocationsAPIApi.md#getlocationbyuuid) | **GET** /locations/{uuid} | Returns a location element identified by the given UUID
*SAMSMatchDaysAPIApi* | [**getAllMatchDays**](docs/Api/SAMSMatchDaysAPIApi.md#getallmatchdays) | **GET** /match-days | Returns all available match days as a paged list.
*SAMSMatchDaysAPIApi* | [**getMatchDayByUuid**](docs/Api/SAMSMatchDaysAPIApi.md#getmatchdaybyuuid) | **GET** /match-days/{uuid} | Returns a match day identified by the given UUID
*SAMSMatchDaysAPIApi* | [**getMatchesByMatchDay**](docs/Api/SAMSMatchDaysAPIApi.md#getmatchesbymatchday) | **GET** /match-days/{uuid}/league-matches | Returns all matches of a match day based on the given UUID. The default page size is 20. The page size must not be greater than 100
*SAMSMatchGroupsAPIApi* | [**getAllMatchGroups**](docs/Api/SAMSMatchGroupsAPIApi.md#getallmatchgroups) | **GET** /match-groups | Returns all available match groups as a paged list. The default page size is 20. The page size must not be greater than 100
*SAMSMatchGroupsAPIApi* | [**getMatchGroupByUuid**](docs/Api/SAMSMatchGroupsAPIApi.md#getmatchgroupbyuuid) | **GET** /match-groups/{uuid} | Returns a match group identified by the given UUID
*SAMSMatchGroupsAPIApi* | [**getMatchesByMatchGroup**](docs/Api/SAMSMatchGroupsAPIApi.md#getmatchesbymatchgroup) | **GET** /match-groups/{uuid}/competition-matches | Returns all matches corresponding to the match group identified by the given UUID
*SAMSRESTAPIV2Api* | [**getApiBaseLinks**](docs/Api/SAMSRESTAPIV2Api.md#getapibaselinks) | **GET** / | Links to the API&#39;s resources
*SAMSSeasonsAPIApi* | [**getAllSeasons**](docs/Api/SAMSSeasonsAPIApi.md#getallseasons) | **GET** /seasons | Returns all available seasons
*SAMSSeasonsAPIApi* | [**getLeagueHierarchiesForSeason**](docs/Api/SAMSSeasonsAPIApi.md#getleaguehierarchiesforseason) | **GET** /seasons/{uuid}/league-hierarchies | Returns all league hierarchies corresponding to the season identified by the given UUID
*SAMSSeasonsAPIApi* | [**getSeasonByUuid**](docs/Api/SAMSSeasonsAPIApi.md#getseasonbyuuid) | **GET** /seasons/{uuid} | Returns a season identified by the given UUID
*SAMSSportsClubsAPIApi* | [**getAllSportsclubs**](docs/Api/SAMSSportsClubsAPIApi.md#getallsportsclubs) | **GET** /sportsclubs | Returns all available sports clubs.
*SAMSSportsClubsAPIApi* | [**getSportsclub**](docs/Api/SAMSSportsClubsAPIApi.md#getsportsclub) | **GET** /sportsclubs/{uuid} | Returns a sports club identified by the given UUID.
*SAMSSuperCompetitionsAPIApi* | [**getAllSuperCompetitions**](docs/Api/SAMSSuperCompetitionsAPIApi.md#getallsupercompetitions) | **GET** /super-competitions | Returns all available super competitions as a paged list.
*SAMSSuperCompetitionsAPIApi* | [**getSuperCompetitionByUuid**](docs/Api/SAMSSuperCompetitionsAPIApi.md#getsupercompetitionbyuuid) | **GET** /super-competitions/{uuid} | Returns a super competition identified by the given UUID
*SAMSTeamsAPIApi* | [**getAllTeams**](docs/Api/SAMSTeamsAPIApi.md#getallteams) | **GET** /teams | Returns all available teams as a paged list.
*SAMSTeamsAPIApi* | [**getTeamByUuid**](docs/Api/SAMSTeamsAPIApi.md#getteambyuuid) | **GET** /teams/{uuid} | Returns a team identified by the given UUID
*SAMSUserAPIApi* | [**getCurrentUser**](docs/Api/SAMSUserAPIApi.md#getcurrentuser) | **GET** /user-details/current | Retrieves the user data for the current user identified by the mandatory JSON web token authorization header
*SAMSUserAPIApi* | [**userDetailsRootLinks**](docs/Api/SAMSUserAPIApi.md#userdetailsrootlinks) | **GET** /user-details | Provides links to sub resources

## Models

- [Address](docs/Model/Address.md)
- [Association](docs/Model/Association.md)
- [AssociationResourcePage](docs/Model/AssociationResourcePage.md)
- [Committee](docs/Model/Committee.md)
- [CommitteeMember](docs/Model/CommitteeMember.md)
- [CommitteePage](docs/Model/CommitteePage.md)
- [CompetitionDto](docs/Model/CompetitionDto.md)
- [CompetitionMatchDto](docs/Model/CompetitionMatchDto.md)
- [CompetitionMatchGroupDto](docs/Model/CompetitionMatchGroupDto.md)
- [CompetitionMatchGroupPage](docs/Model/CompetitionMatchGroupPage.md)
- [CompetitionMatchGroupRankingsDto](docs/Model/CompetitionMatchGroupRankingsDto.md)
- [CompetitionMatchPage](docs/Model/CompetitionMatchPage.md)
- [CompetitionPage](docs/Model/CompetitionPage.md)
- [CompetitionRankingsResourcePage](docs/Model/CompetitionRankingsResourcePage.md)
- [ConstraintViolation](docs/Model/ConstraintViolation.md)
- [Embedded](docs/Model/Embedded.md)
- [Event](docs/Model/Event.md)
- [EventPage](docs/Model/EventPage.md)
- [EventType](docs/Model/EventType.md)
- [HalRepresentation](docs/Model/HalRepresentation.md)
- [LeagueDto](docs/Model/LeagueDto.md)
- [LeagueHierarchyDto](docs/Model/LeagueHierarchyDto.md)
- [LeagueHierarchyPage](docs/Model/LeagueHierarchyPage.md)
- [LeagueMatchDayDto](docs/Model/LeagueMatchDayDto.md)
- [LeagueMatchDayPage](docs/Model/LeagueMatchDayPage.md)
- [LeagueMatchDto](docs/Model/LeagueMatchDto.md)
- [LeagueMatchPage](docs/Model/LeagueMatchPage.md)
- [LeaguePage](docs/Model/LeaguePage.md)
- [LeagueRankingsEntryDto](docs/Model/LeagueRankingsEntryDto.md)
- [LeagueRankingsResourcePage](docs/Model/LeagueRankingsResourcePage.md)
- [LinkDto](docs/Model/LinkDto.md)
- [Links](docs/Model/Links.md)
- [Location](docs/Model/Location.md)
- [LocationResourcePage](docs/Model/LocationResourcePage.md)
- [MatchResultTypeCount](docs/Model/MatchResultTypeCount.md)
- [RefereeTeamDto](docs/Model/RefereeTeamDto.md)
- [ResponseException](docs/Model/ResponseException.md)
- [ResponseExceptionMessage](docs/Model/ResponseExceptionMessage.md)
- [SeasonDto](docs/Model/SeasonDto.md)
- [SportsclubDto](docs/Model/SportsclubDto.md)
- [SportsclubPage](docs/Model/SportsclubPage.md)
- [SuperCompetitionDto](docs/Model/SuperCompetitionDto.md)
- [SuperCompetitionPage](docs/Model/SuperCompetitionPage.md)
- [TeamDto](docs/Model/TeamDto.md)
- [TeamPage](docs/Model/TeamPage.md)
- [UserDetailsDto](docs/Model/UserDetailsDto.md)
- [ValidationError](docs/Model/ValidationError.md)
- [VolleyballMatchResultsDto](docs/Model/VolleyballMatchResultsDto.md)
- [VolleyballMatchSetRestDto](docs/Model/VolleyballMatchSetRestDto.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.1`
    - Package version: `2.1.0`
    - Generator version: `7.21.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
