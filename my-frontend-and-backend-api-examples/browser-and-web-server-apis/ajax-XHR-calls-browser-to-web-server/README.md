# SEND DATA USING AN XMLHttpRequest (XHR) POST CALL

_Send data from a Browser to a Web Server.
The API will use an **Ajax XMLHttpRequest (XHR) POST call**
written in javascript and php._
  
[See offsite demo](http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=ajax-XHR-calls-browser-to-web-server)

## XMLHttpRequest

XMLHttpRequest (XHR) is a JavaScript API to create AJAX requests.
The request sent by XMLHttpRequest can either be a GET or POST.
Its methods provide the ability to send network requests between a
browser and a server.

![IMAGE - ajax-XHR-calls-browser-to-web-server - IMAGE](../../../docs/pics/ajax-XHR-calls-browser-to-web-server.jpg)

## CODE

Two numbers will be
sent from a browser (client)
to a web server (server)
that will calculate
and return the sum.
A webpage will be used to
enter the data and
display the roundtrip results.

### GET USER DATA

Javascript,

```js
// GATHER ALL OPERANDS FROM INPUT 
operand1 = document.getElementById('operand_1_input_field').value;
operand2 = document.getElementById('operand_2_input_field').value;

// SEND ATTRIBUTES TO SERVER
postDataToServer(operand1, operand2);
```

### SEND DATA USING XMLHttpRequest (XHR) POST CALL

Javascript,

```js
// NEW REQUESTS
postRequest = new XMLHttpRequest();

// SEND TO SERVER
function postDataToServer(Operand1, Operand2) {
    
    // CONVERT JSON TO STRING
    var dataJSONString = JSON.stringify({ 
        "operand1": Operand1,
        "operand2": Operand2});

    // OPEN CONNECTION - true means DON'T BLOCK
    url = 'browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server/php_scripts/post_data_to_server.php';
    postRequest.open('POST', url, true);

    // SEND JSON FORMAT
    postRequest.setRequestHeader('Content-Type', 'application/json');
    postRequest.send(dataJSONString);

}
```

### RECEIVE DATA ON THE WEB SERVER

```php

    // GET THE JSON DATA FROM THE USER
    header("Content-Type: application/json");
    $attributesJSON = json_decode(file_get_contents("php://input"));

    // UN PARSE IT
    $operand1 = $attributesJSON->operand1;
    $operand2 = $attributesJSON->operand2;

    // DO SOMETHING

```
