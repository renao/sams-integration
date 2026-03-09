#!/bin/bash

$generated_client_path = "_Generated/RestClient"

echo "Remove old version from {$generated_client_path}"

rm -rf $generated_client_path

api_spec_file="api-specs/wvv.sams-server.de/2.1.json"

docker run --rm \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i /local/${api_spec_file} \
  -g php \
  -o /local/_Generated/RestClient \
  --additional-properties=artifactVersion=2.1.0 \
  --additional-properties=packageName=SAMS \
  --additional-properties=invokerPackage=SAMS\\RestClient \
  --additional-properties=composerPackageName=renao/sams-integration-restclient \
  --global-property=apiDocs=false \
  --global-property=modelDocs=false