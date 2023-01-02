package my_protobuf_package

import context "context"

// We define a server struct that implements the server interface.
type Server struct {
	UnimplementedTutorialServer
}

// We implement the Add method of the server interface.
func (s *Server) Add(ctx context.Context, in *Send) (*Receive, error) {
	log.Printf("Receive message body from client: %s", in.Body)
	return &Receive{Message: "Hello, " + in.GetName()}, nil
}
