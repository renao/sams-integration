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

for url in "${base_urls[@]}"; do
    echo "Downloading API specs from $url"
    content=$(curl -s "$url/api/v2/swagger.json")
    
    if [[ -z "$content" ]]; then
        echo "Fehler: Kein Content von $url geladen!"
        continue
    fi

    api_version=$(echo "$content" | jq -r '.info.version')
    server_folder="api-specs/$(echo $url | sed 's/https\?:\/\///g' | sed 's/\//-/g')"
    filename="$server_folder/${api_version}.json"
    mkdir -p "$server_folder"
    echo "$content" > "$filename"
done


 
