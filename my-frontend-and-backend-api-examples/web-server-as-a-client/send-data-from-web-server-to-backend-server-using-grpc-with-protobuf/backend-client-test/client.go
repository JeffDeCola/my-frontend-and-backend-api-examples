package main

import (
	"log"

	"golang.org/x/net/context"
	"google.golang.org/grpc"

	pb "../backend-server/grpc-backend-server/my_protobuf_package"
)

func main() {

	var conn *grpc.ClientConn

	conn, err := grpc.Dial(":7777", grpc.WithInsecure())
	if err != nil {
		log.Fatalf("did not connect: %s", err)
	}
	defer conn.Close()

	c := pb.NewChatServiceClient(conn)

	response, err := c.Add(context.Background(), &pb.Message{Body: 23. 23})
	if err != nil {
		log.Fatalf("Error when calling SayHello: %s", err)
	}
	log.Printf("Response from server: %s", response.Body)

}
