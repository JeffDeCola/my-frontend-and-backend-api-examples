# SEND DATA FROM A WEB SERVER TO A BACKEND SERVER (using gRPC with protobuf)

[![jeffdecola.com](https://img.shields.io/badge/website-jeffdecola.com-blue)](https://jeffdecola.com)
[![MIT License](https://img.shields.io/:license-mit-blue.svg)](https://jeffdecola.mit-license.org)

_**Send data**
from a Web Server
to a Backend Server
(using an **gRPC with protobuf)**._

Table of Contents

* [PROTOBUF](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#protobuf)
* [PROTOCOL BUFFERS (PROTOBUF) & gRPC](#protocol-buffers-protobuf--grpc)
* [OVERVIEW](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#overview)
* [CODE](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#code)
  * [PROTOBUF MESSAGE](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#protobuf-message)
  * [CLIENT SIDE](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#client-side)
  * [SERVER SIDE](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf#server-side)

Documentation and Reference

* [offsite demo](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-web-server-to-backend-server-using-grpc-with-protobuf)
* The frontend uses
  [send-data-from-browser-to-web-server-using-ajax-xhr-post-call](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call)

## PROTOBUF

```protobuf
syntax = "proto3";

package main;

message Data {
    int32 operand1 = 1;
    int32 operand2 = 2;
}
```

## PROTOCOL BUFFERS (PROTOBUF) & gRPC

* **Protobuf** (Protocol Buffers)
  * Human readable platform-neutral messages
  * Shared by both the client and the server

* **gRPC** (google Remote Procedure Call)
  * A way of running a remote procedure on a remote machine

## OVERVIEW

A frontend will be attached to this example, but is not part of it.

![IMAGE](../../../docs/pics/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf.svg)

## CODE

Two numbers will be
sent from a web server (client)
to a backend server (server)
that will calculate
and return the sum.
A webpage was added to
enter the data and
display the roundtrip result.

### PROTOBUF MESSAGE

```protobuf
syntax = "proto3";

package main;

message Data {
    int32 operand1 = 1;
    int32 operand2 = 2;
}
```

### CLIENT SIDE

tbd

### SERVER SIDE

tbd
