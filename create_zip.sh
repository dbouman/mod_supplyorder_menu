#!/bin/sh

filename='mod_supplyorder_menu.zip'
dir='.';

rm $filename 2>/dev/null

zip -r $filename $dir/tmpl/ $dir/en-GB.mod_supplyorder_menu.ini $dir/helper.php $dir/index.html $dir/mod_supplyorder_menu.xml $dir/mod_suppyorder_menu.php  1>/dev/null

echo $filename 'has been successfully created.';
