# my-frontend-and-backend-api-examples

[![Maintainability](https://api.codeclimate.com/v1/badges/a7fd79cc4717b3da27d6/maintainability)](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/maintainability)
[![Issue Count](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/badges/issue_count.svg)](https://codeclimate.com/github/JeffDeCola/my-frontend-and-backend-api-examples/issues)
[![License](http://img.shields.io/:license-mit-blue.svg)](http://jeffdecola.mit-license.org)

_A place to keep my frontend and backend API examples._

Table of Contents,

* [BROWSER & WEB SERVER APIs](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#browser--web-server-apis)
* [WEB SERVER & BACKEND SERVER APIs](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#web-server--backend-server-apis)
* [BACKEND SERVER & BACKEND SERVER APIs](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#backend-server--backend-server-apis)
* [BROWSER, WEB SERVER & BACKEND SERVER APIs](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples#browser-web-server--backend-server-apis)

Documentation and reference,

* [See offsite demos](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php)

[GitHub Webpage](https://jeffdecola.github.io/my-frontend-and-backend-api-examples/)
_built with
[concourse ci](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/blob/master/ci-README.md)_

## FRONTEND AND BACKEND API EXAMPLES

The **frontend** consists of a browser.
The **backend** may consist of a web server and/or a backend server(s).
Lets figure out how they can talk with each other.

![IMAGE - frontend-backend-overview - IMAGE](docs/pics/frontend-backend-overview.jpg)

### BROWSER & WEB SERVER APIs

* [ajax-XHR-calls-browser-to-web-server](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server)

  _Send Data
  from a Browser to a Web Server._

  _The API will use an **Ajax XMLHttpRequest (XHR) POST call**
  written in javascript and php._

* [ajax-XHR-calls-web-server-to-browser](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-and-web-server-apis/ajax-XHR-calls-web-server-to-browser)

  _Get Data
  from a Web Server to a Browser._

  _The API will use an **Ajax XMLHttpRequest (XHR) GET call**
  written in javascript and php._

### WEB SERVER & BACKEND SERVER APIs

* [gRPC-with-protobuf-web-server-to-backend-server](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-and-backend-server-apis/gRPC-with-protobuf-web-server-to-backend-server)

  _Send Data
  from a Web Server to a Backend Server._

  _The API will use an **gRPC with protobuf**
  written in php and go._

* [gRPC-with-protobuf-backend-server-to-web-server](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-and-backend-server-apis/gRPC-with-protobuf-backend-server-to-web-server)

  _Send Data
  from a Backend Server to a Web Server._

  _The API will use an **gRPC with protobuf**
  written in go and php._

### BACKEND SERVER & BACKEND SERVER APIs

* _coming soon_

### BROWSER, WEB SERVER & BACKEND SERVER APIs

* [ajax-XHR-calls-and-gRPC-with-protobuf](https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-web-server-and-backend-server-apis/ajax-XHR-calls-and-gRPC-with-protobuf)

  _Send Data
  from a Browser to a Web Server to a Backend Server._

  _The API will use an **Ajax XMLHttpRequest (XHR) call**
  written in javascript and php
  and **gRPC with protobuf**
  written in php and go._
