package main

import (
	"fmt"
	"log"
	"net"

	"google.golang.org/grpc"

	pb "grpc-backend-server/my_protobuf_package"
)

func main() {

	fmt.Println("Starting gRPC Server")

	// 1 Create a listener on TCP port 7777
	lis, err := net.Listen("tcp", ":7777")
	if err != nil {
		log.Fatalf("failed to listen: %v", err)
	}

	// 2 Create a gRPC server object
	grpcServer := grpc.NewServer()

	// 3 Register Calculator Server
	pb.RegisterCalculatorServer(grpcServer, &pb.Server{})

	// 4 Serve gRPC Server
	if err := grpcServer.Serve(lis); err != nil {
		log.Fatalf("failed to serve: %s", err)

	}

}
