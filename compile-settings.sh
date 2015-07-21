#!/bin/sh
ROOT=`pwd`

if [ ! -f $ROOT/fileTemplates/includes/Author.php ]; then
    cp $ROOT/Author.php.dist $ROOT/fileTemplates/includes/Author.php

    echo "####################################"
    echo "# The Author.php was not found, i  #"
    echo "# created it for you. You can put  #"
    echo "# your author information in it.   #"
    echo "####################################"
fi

jar -cf settings.jar IntelliJ\ IDEA\ Global\ Settings fileTemplates/ installed.txt options/
