#!/usr/bin/env bash
set -euo pipefail


# SAMS Server URLs
base_urls=(
    "https://www.volleyball-bundesliga.de"
    "https://www.dvv-ligen.de"
    "https://www.shvv.de"
    "https://www.vvrp.de"
    "https://www.volleyball-baden.de"
    "https://www.ssvb.org"
    "https://nwvv.sams-server.de"
    "https://www.tv-v.de"
    "https://www.vlw-online.de"
    "https://hessen-volley.de"
    "https://www.volley-saar.de"
    "https://vvb.sams-server.de"
    "https://vvsa.sams-server.de"
    "https://wvv.sams-server.de"
    "https://flvb.sams-server.de"
)


replace_server_url() {
    local json_content="$1"
    local base_url="$2"
    
    echo "$json_content" | jq --arg url "$base_url" 'if .servers then .servers = [{"url": $url}] else . end'
}

get_api_version() {
    local json_content="$1"
    echo "$json_content" | jq -er '.info.version // empty'
}

get_server_folder() {
    local url="$1"
    echo "api-specs/$(echo $url | sed 's/https\?:\/\///g' | sed 's/\//-/g')"
}


sanitize() {
  printf '%s' "$1" | sed -E 's/[^A-Za-z0-9._-]+/_/g'
}

for url in "${base_urls[@]}"; do
    api_base_url="$url/api/v2"
    echo "Downloading API specs from $url"
    content=$(curl -s "$api_base_url/swagger.json")

    if [[ -z "$content" ]]; then
        echo "Fehler: Kein Content von $url geladen!"
        continue
    fi

    content=$(replace_server_url "$content" "$api_base_url")

    api_version=$(get_api_version "$content")
    server_folder=$(get_server_folder "$url")

    filename="$server_folder/$(sanitize "$api_version").json"
    mkdir -p "$server_folder"
    echo "$content" | jq . > "$filename"
done
