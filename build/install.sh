#!/bin/bash

set -e
path=$(dirname "$0")
base=$(cd $path/.. && pwd)
drush="$base/bin/drush $drush_flags -y -r $base/www"

chmod -R +w $base/www/sites/default
chmod -R +w $base/cnf

echo "Symlink settings.php into our Drupal."
ln -sf $base/cnf/settings.php $base/www/sites/default/
echo "Installing Drupal like a boss."
$drush si --site-name=no-excuses --account-pass=admin
