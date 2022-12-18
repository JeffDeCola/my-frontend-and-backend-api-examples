# my-frontend-and-backend-api-examples

[![Maintainability](https://api.codeclimate.com/v1/badges/a7fd79cc4717b3da27d6/maintainability)](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/maintainability)
[![Issue Count](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/badges/issue_count.svg)](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/issues)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://jeffdecola.mit-license.org)

_A place to keep my frontend and backend API examples._

Table of Contents,

* [FRONTEND AND BACKEND API EXAMPLES](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#frontend-and-backend-api-examples)
* [BROWSER AS A CLIENT](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#browser-as-a-client)
* [WEB SERVER AS A CLIENT](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#web-server-as-a-client)
* [BACKEND SERVER AS A CLIENT](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#backend-server-as-a-client)

Documentation and reference,

* [See offsite demos](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php)

[GitHub Webpage](https://jeffdecola.github.io/my-frontend-and-backend-api-examples/)
_built with
[concourse ci](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/blob/master/ci-README.md)_

## FRONTEND AND BACKEND API EXAMPLES

The **frontend** usually consists of a browser.
The **backend** may consist of a web server and/or a backend server(s).
Lets figure out how they can talk with each other.

![IMAGE - frontend-backend-overview - IMAGE](docs/pics/frontend-backend-overview.jpg)

## BROWSER AS A CLIENT

* [get-data-from-web-sever-to-browser-using-ajax-xhr-get-call]()

  _**GET** data
  from a Web Server
  to a Browser.
  The API will use an **Ajax XMLHttpRequest (XHR) GET Call**
  written in javascript and php._

* [send-data-from-brower-to-web-server-using-ajax-xhr-post-call]()

  _**SEND** data
  from a Browser
  to a Web Server.
  The API will use an **Ajax XMLHttpRequest (XHR) POST Call**
  written in javascript and php._

## WEB SERVER AS A CLIENT

* [get-data-from-backend-sever-to-web-server-using-grpc-with-protobuf]()

  _**GET** data
  from a Backend Server
  to a Web Server.
  The API will use **gRPC with protobuf**
  written in php and go._

* [send-data-from-web-sever-to-backend-server-using-grpc-with-protobuf]()

  _**SEND** data
  from a Web Server
  to a Backend Server.
  The API will use **gRPC with protobuf**
  written in php and go._

## BACKEND SERVER AS A CLIENT

* [get-data-from-backend-sever-to-backend-server-using-grpc-with-protobuf]()

  _**GET** data
  from a Backend Server
  to a Backend Server.
  The API will use **gRPC with protobuf**
  written in php and go._

  * [get-data-from-web-sever-to-backend-server-using-grpc-with-protobuf]()

  _**GET** data
  from a Web Server
  to a Backend Server.
  The API will use **gRPC with protobuf**
  written in php and go._

* [send-data-from-backend-sever-to-backend-server-using-grpc-with-protobuf]()

  _**SEND** data
  from a Backend Server
  to a Backend Server.
  The API will use **gRPC with protobuf**
  written in php and go._

* [send-data-from-backend-sever-to-web-server-using-grpc-with-protobuf]()

  _**SEND** data
  from a Backend Server
  to a Web Server.
  The API will use **gRPC with protobuf**
  written in php and go._
