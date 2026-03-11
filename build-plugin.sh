npm install
npm run build
composer install
composer update
composer dump-autoload
sed -i 's/echo \$err;/echo esc_html(\$err);/' build/lib/autoload.php

rm release-plugin-directory/trunk/sams-integration.php
rm -r release-plugin-directory/trunk/build

cp sams-integration.php release-plugin-directory/trunk
cp -r build release-plugin-directory/trunk
rm -rf ./build/