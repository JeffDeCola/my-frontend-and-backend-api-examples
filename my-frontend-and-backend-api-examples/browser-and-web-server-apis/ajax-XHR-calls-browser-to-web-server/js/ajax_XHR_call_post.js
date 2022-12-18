// ajax_XHR_calls_post.js
// SEND POST REQUEST USING XMLHttpRequest (XHR)
// There are other methods to use ajax, we are using XHR Calls

var postRequest;
var serverData;
var serverResponse = false; 
var serverError = false;

console.log("STARTING ajax_XHR_calls_post.js JAVASCRIPT");

// CREATE A NEW REQUEST
postRequest = new XMLHttpRequest();
if (!postRequest) {
    console.warn("Giving up :( Cannot create an XMLHTTP instance");
}

// -----------------------------------------------------------------------------------------------------------------------
// SEND TO SERVER

function postDataToServer(Operand1, Operand2) {

    console.log("postDataToServer: Send Data to Server");
    
    // CONVERT JSON TO STRING
    var attributesJSONString = JSON.stringify({ 
        "operand1": Operand1,
        "operand2": Operand2});

    // OPEN CONNECTION - CREATE POST REQUEST
    // true means DON'T BLOCK
    url = 'browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server/php_scripts/post_data_to_server.php';
    postRequest.open('POST', url, true);

    // SEND JSON FORMAT
    postRequest.setRequestHeader('Content-Type', 'application/json');
    postRequest.send(attributesJSONString);

}

// -----------------------------------------------------------------------------------------------------------------------
// RESPONSE FROM SERVER

// LISTEN AND KICK OFF FUNCTION WHEN READY
postRequest.onreadystatechange = postDataResponseFromServer; 

function postDataResponseFromServer() {

    console.log("postDataResponseFromServer: Get Data from Server");

    // IN CASE SERVER GOES DOWN
    try {
        if (postRequest.readyState === XMLHttpRequest.DONE) {

            if (postRequest.status === 200) {

                // THE MAGIC HAPPENS HERE *******************************************
                // RECEIVE JSON FORMAT
                serverData = JSON.parse(postRequest.responseText);
                serverResponse = true;
                console.log("Got data from server");

            } else {
                console.warn("There was an issue sending data to the server");
                serverError = true;
            }
        }
    }
    // WHEN THE SERVER IS DOWN
    catch( e ) {
        console.warn("There was an issue sending data to the server: Caught Server Exception:" + e.description);
        serverError = true;
    }
}
