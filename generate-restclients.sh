
#!/bin/bash

userid=${UID:-$(id -u)}
groupid=${GID:-$(id -g)}

generated_client_path="_Generated"

echo "Remove old version from $generated_client_path"

rm -rf $generated_client_path

api_spec_file="api-specs/wvv.sams-server.de/2.1.json"

docker run --rm \
  -u ${userid}:${groupid} \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i /local/${api_spec_file} \
  -g php \
  -o /local/_Generated/php/RestClient \
  --additional-properties=artifactVersion=2.1.0 \
  --additional-properties=packageName=SAMS \
  --additional-properties=invokerPackage=SAMS\\RestClient \
  --additional-properties=composerPackageName=renao/sams-integration-restclient \
  --global-property=apiDocs=false \
  --global-property=modelDocs=false \
  --global-property=apiTests=false \
  --global-property=modelTests=false


docker run --rm \
  -u ${userid}:${groupid} \
  -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i /local/${api_spec_file} \
  -g javascript \
  -o /local/_Generated/js/RestClient \
  --additional-properties=packageName=SAMS \
  --global-property=apiDocs=false \
  --global-property=modelDocs=false \
  --global-property=apiTests=false \
  --global-property=modelTests=false
  