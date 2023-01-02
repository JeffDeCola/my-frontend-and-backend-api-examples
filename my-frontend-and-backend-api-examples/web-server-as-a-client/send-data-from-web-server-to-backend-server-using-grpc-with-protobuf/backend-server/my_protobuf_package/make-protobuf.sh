#!/bin/bash
# make-protobuf.sh

echo " "
echo "**********************************************************************"
echo "******************************************* make-protobuf.sh (START) *"
echo " "

# GET PROTOBUF MESSAGE
echo "cp ../../protobuf-message/messages.proto ."
cp ../../protobuf-message/messages.proto .
echo " "

# RUN PROTOBUF COMPILER protoc FOR GO
echo " protoc \
    --go_out=. \
    --go_opt=paths=source_relative \
    --go-grpc_out=. \
    --go-grpc_opt=paths=source_relative \
    messages.proto"
 protoc \
    --go_out=. \
    --go_opt=paths=source_relative \
    --go-grpc_out=. \
    --go-grpc_opt=paths=source_relative \
    messages.proto
echo " "

echo "*********************************************** make-protobuf.sh (END) *"
echo "************************************************************************"
echo " "
