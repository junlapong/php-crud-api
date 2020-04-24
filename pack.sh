rm -rf dist

mkdir -p dist/api
mkdir -p dist/ui

cp api.php ./dist/api/index.php
cp ui.html ./dist/ui/index.html
cp -R db ./dist/api/db
