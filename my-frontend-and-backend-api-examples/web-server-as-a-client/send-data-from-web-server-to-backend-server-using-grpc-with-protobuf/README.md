# SEND DATA TO A WEB SERVER USING AN XMLHttpRequest (XHR) POST CALL

_**Send data**
from a Web server
to a Backend Server
using an **gRPC with protobuf**._

Documentation and reference,

* The frontend uses
  [send-data-from-browser-to-web-server-using-ajax-xhr-post-call](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call)

[See offsite demo](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-web-server-to-backend-server-using-grpc-with-protobuf)

## PROTOBUF

```protobuf
syntax = "proto3";

package main;

message Data {
    int32 operand1 = 1;
    int32 operand2 = 2;
}
```

## OVERVIEW

A frontend will be attached to this, but is not part of this example.

![IMAGE - send-data-from-web-server-to-backend-server-using-grpc-with-protobuf - IMAGE](../../../docs/pics/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf.jpg)

## CODE

Two numbers will be
sent from a web server (client)
to a backend server (server)
that will calculate
and return the sum.
A webpage was added to
enter the data and
display the roundtrip result.

### CLIENT SIDE

tbd

### SERVER SIDE

tbd
