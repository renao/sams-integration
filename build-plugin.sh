npm install
npm run build
composer install
sed -i 's/echo \$err;/echo esc_html(\$err);/' build/lib/autoload.php

cp sams-integration.php release-plugin-directory/trunk
cp -r build release-plugin-directory/trunk

