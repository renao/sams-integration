#!/bin/bash

api_spec_file="api-specs/wvv.sams-server.de/2.1.json"


docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i /local/${api_spec_file} \
  -g php \
  -o /local/src/php/_Generated/RestClient \
  --additional-properties=artifactVersion=2.1.0 \
  --additional-properties=packageName=SAMSPlugin\\RestClient \
  --additional-properties=invokerPackage=SAMSPlugin\\RestClient \
  --additional-properties=composerPackageName=renao/sams-integration-restclient