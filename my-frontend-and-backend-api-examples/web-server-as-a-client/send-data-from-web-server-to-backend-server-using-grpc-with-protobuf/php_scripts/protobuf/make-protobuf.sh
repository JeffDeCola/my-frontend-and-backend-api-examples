#!/bin/bash
# make-protobuf.sh

echo " "
echo "**********************************************************************"
echo "******************************************* make-protobuf.sh (START) *"
echo " "

# GET PROTOBUF MESSAGE
echo "cp ../../protobuf/message.proto ."
cp ../../protobuf/messages.proto .
echo " "

# RUN PROTOBUF COMPILER FOR PHP
echo "protoc --go_out=. messages.proto"
protoc --go_out=. messages.proto
echo " "

echo "*********************************************** make-protobuf.sh (END) *"
echo "************************************************************************"
echo " "
