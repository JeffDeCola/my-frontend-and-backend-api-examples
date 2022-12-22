#!/bin/bash
# make-protobuf-php.sh

echo " "
echo "**********************************************************************"
echo "*************************************** make-protobuf-php.sh (START) *"
echo " "

echo "?? messages.proto"
?? messages.proto
echo " "

echo "cp up messages.pb.php ../php_scripts/."
cp messages.pb.php ../php_scripts/.
echo ""

echo "******************************************* make-protobuf-php.sh (END) *"
echo "************************************************************************"
echo " "
