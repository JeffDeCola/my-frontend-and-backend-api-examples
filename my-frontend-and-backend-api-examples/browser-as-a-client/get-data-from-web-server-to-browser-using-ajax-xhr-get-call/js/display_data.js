/* display_data.js */

var error_toggle = true;

var lightgreen = "#d4ffb7";
var darkgreen = "#54e90f";
var grey = "#b6b6b6";
var white = "#ffffff";
var black = "#000000";
var red = "#ff0000";

console.log("STARTING display_data.js JAVASCRIPT");

// GET SERVER TIME  ----------------------------------------------------------------------------------------------
setInterval(function(){
    get_data_from_web_server();
}, 500);

// SHOW DATA  ---------------------------------------------------------------------------------------------------
function show_data(data) {
    // DISPLAY DATA
    document.getElementById("data_display_text").innerHTML= data.hour + ":" + data.minute + ":" + data.second;
    document.getElementById("data_display").style.backgroundColor=white;
    document.getElementById("data_display").style.color=black;
}

// SERVER ERROR  ----------------------------------------------------------------------------------------------
function server_error() {
    document.getElementById("data_display_text").innerHTML="SERVER DOWN";
    document.getElementById("data_display").style.backgroundColor=red;
    document.getElementById("data_display").style.color=black;
}

// INJECT SERVER ERROR --------------------------------------------------------------------------------------

function error_button_onmouseover() {
    if (error_toggle) {
        document.getElementById("error_button_push").style.backgroundColor=white;
    } else {
        document.getElementById("error_button_push").style.backgroundColor=red;
    }
}

function error_button_onmouseout() {
    if (error_toggle) {
        document.getElementById("error_button_push").style.backgroundColor=white;
    } else {
        document.getElementById("error_button_push").style.backgroundColor=red;
    }
}

function error_button_onclick() {
    if (error_toggle) {
        error_toggle = false;
        document.getElementById("error_button_push").style.backgroundColor=red;
        url = 'browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/php_scripts/error.php';
    } else {
        error_toggle = true;
        document.getElementById("error_button_push").style.backgroundColor=white;
        url = 'browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/php_scripts/get_data_from_server.php';
    }

}