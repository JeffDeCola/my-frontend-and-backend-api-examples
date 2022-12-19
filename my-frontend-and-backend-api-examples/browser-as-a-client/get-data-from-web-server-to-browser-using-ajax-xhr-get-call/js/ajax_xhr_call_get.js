// ajax_xhr_calls_get.js
// GET REQUEST USING XMLHttpRequest (XHR)
// There are other methods to use ajax, we are using XHR Calls

var url = 'browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/php_scripts/get_data_from_server.php';

console.log("STARTING ajax_xhr_calls_get.js JAVASCRIPT");

// -----------------------------------------------------------------------------------------------------------------------
// GET DATA FROM WEB SERVER
function get_data_from_web_server() {

    // CREATE A NEW REQUEST
    getRequest = new XMLHttpRequest();
        if (!getRequest) {
        console.warn("Giving up :( Cannot create an XMLHTTP instance");
    }
    
    // OPEN CONNECTION - CREATE GET REQUEST
    // true means DON'T BLOCK
    getRequest.open('GET', url, true);

    // SEND JSON FORMAT
    getRequest.setRequestHeader('Content-Type', 'application/json');
    getRequest.send();

    // LISTEN AND KICK OFF FUNCTION WHEN READY
    getRequest.onreadystatechange = function() {

        // CHECK IF IT'S DONE
        try {
            if (getRequest.readyState === XMLHttpRequest.DONE) {

                if (getRequest.status === 200) {

                    // THE MAGIC HAPPENS HERE *******************************************
                    // RECEIVE JSON FORMAT
                    serverData = JSON.parse(getRequest.responseText);
                    show_data(serverData);

                } else {
                    console.warn("There was an issue getting data to the server");
                    server_error();
                }
            }
        }
        // WHEN THE SERVER IS DOWN
        catch( e ) {
            console.warn("There was an issue getting data to the server: Caught Server Exception:" + e.description);
            server_error();
        }

    }
}
