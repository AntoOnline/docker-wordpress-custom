#!/bin/bash

URL="https://raw.githubusercontent.com/AntoOnline/docker-wordpress-custom/master/wp-config.php"
FILES="/mnt/containers/*/wp/wp-config.php"

# Retrieve the content from the URL
CONTENT=$(curl -s "$URL")

# Loop through each file and replace its content
for file in $FILES; do
    if [ -f "$file" ]; then
        echo "Updating $file.. $file."
        echo "$CONTENT" > "$file"
        echo "Done"
    fi
done
