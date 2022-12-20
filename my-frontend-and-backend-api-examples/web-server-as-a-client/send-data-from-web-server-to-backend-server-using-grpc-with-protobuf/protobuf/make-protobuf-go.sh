#!/bin/bash
# make-protobuf-go.sh

echo " "
echo "**********************************************************************"
echo "**************************************** make-protobuf-go.sh (START) *"
echo " "

echo "protoc --go_out=. messages.proto"
protoc --go_out=. messages.proto
echo " "

echo "cp up messages.pb.go ../backend-server/."
cp messages.pb.go ../backend-server/.
echo ""

echo "******************************************** make-protobuf-go.sh (END) *"
echo "************************************************************************"
echo " "
