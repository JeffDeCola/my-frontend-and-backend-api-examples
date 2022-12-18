// ajax_XHR_calls_get.js
// GET REQUEST USING XMLHttpRequest (XHR)
// There are other methods to use ajax, we are using XHR Calls

var getRequest;
var serverData;
var serverResponse = false; 
var serverError = false;

console.log("STARTING ajax_XHR_calls_get.js JAVASCRIPT");

// CREATE A NEW REQUEST
getRequest = new XMLHttpRequest();
if (!getRequest) {
    console.warn("Giving up :( Cannot create an XMLHTTP instance");
}

// -----------------------------------------------------------------------------------------------------------------------
// GET DATA FROM WEB SERVER

console.log("Get Data from Web Server");
    
// OPEN CONNECTION - CREATE GET REQUEST
// true means DON'T BLOCK
url = 'browser-and-web-server-apis/ajax-XHR-calls-web-server-to-browser/php_scripts/get_data_from_server.php';
getRequest.open('GET', url, true);

// SEND JSON FORMAT
getRequest.setRequestHeader('Content-Type', 'application/json');
getRequest.send();

// -----------------------------------------------------------------------------------------------------------------------
// RESPONSE FROM SERVER

// LISTEN AND KICK OFF FUNCTION WHEN READY
getRequest.onreadystatechange = getDataResponseFromServer; 

function getDataResponseFromServer() {

    console.log("getDataResponseFromServer: Get Data from Server");

    // IN CASE SERVER GOES DOWN
    try {
        if (getRequest.readyState === XMLHttpRequest.DONE) {

            if (getRequest.status === 200) {

                console.log("poop1");

                // THE MAGIC HAPPENS HERE *******************************************
                // RECEIVE JSON FORMAT
               //serverData = JSON.parse(getRequest.responseText);
                console.log(getRequest.responseText);
                //console.log(serverData.data4);

                //show_data(serverData.data4);
                console.log("Got data from server");

            } else {
                console.warn("There was an issue getting data to the server");
                serverError = true;
            }
        }
    }
    // WHEN THE SERVER IS DOWN
    catch( e ) {
        console.warn("There was an issue getting data to the server: Caught Server Exception:" + e.description);
        server_error();
    }
}
