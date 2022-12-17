// ajax_post_generate_nft.js
// XHR AJAX CALL "POST"
// SEND DATA (JSON FORMAT) TO THE SERVERS PHP FILE
// USING XHR AJAX JSON "POST"
// There are other methods to use ajax, we are using XHR Calls

var XHRPostAttributes;
var serverData;
var serverResponse = false; 
var serverError = false;

// -----------------------------------------------------------------------------------------------------------------------
// SEND ATTRIBUTES TO SERVER
// "POST"/SEND DATA TO SERVER - RUN PHP FILE ON SERVER - GET RESPONSE
// This will update serverData
// PART 1

// NEW REQUESTS
XHRPostAttributes = new XMLHttpRequest();
if (!XHRPostAttributes) {
    console.warn("Giving up :( Cannot create an XMLHTTP instance");
}

// LISTEN
XHRPostAttributes.onreadystatechange = postDataResponseFromServer; 

function postDataToServer(Operand1, Operand2) {

    console.log("postDataToServer: Send Data to Server");
    
    // CONVERT JSON TO STRING
    var attributesJSONString = JSON.stringify({ 
        "operand1": Operand1,
        "operand2": Operand2});

    // OPEN CONNECTION - true means DON'T BLOCK
    url = 'browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server/php_scripts/post_data_to_server.php';
    XHRPostAttributes.open('POST', url, true);

    // SEND JSON FORMAT
    XHRPostAttributes.setRequestHeader('Content-Type', 'application/json');
    XHRPostAttributes.send(attributesJSONString);

}

// "POST"/SEND DATA TO SERVER - RESPONSE FROM SERVER
// PART 2
function postDataResponseFromServer() {

    console.log("postDataResponseFromServer: Get Data from Server");

    // IN CASE SERVER GOES DOWN
    try {
        if (XHRPostAttributes.readyState === XMLHttpRequest.DONE) {

            if (XHRPostAttributes.status === 200) {

                // THE MAGIC HAPPENS HERE *******************************************
                // RECEIVE JSON FORMAT
                serverData = JSON.parse(XHRPostAttributes.responseText);
                serverResponse = true;
                console.warn("Got data from server");

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
