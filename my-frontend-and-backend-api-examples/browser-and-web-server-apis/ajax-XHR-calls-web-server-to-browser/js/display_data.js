/* display_data.js */

var lightgreen = "#d4ffb7";
var darkgreen = "#54e90f";
var grey = "#b6b6b6";
var white = "#ffffff";
var black = "#000000";
var red = "#ff0000";

console.log("STARTING display_data.js JAVASCRIPT");

// WAIT: DISPLAY SERVER DATA
console.log("WAIT: FOR SERVER DATA");

function show_data(data) {

    console.log("SHOW DATA");

    // DISPLAY DATA
    document.getElementById("data_display_text").innerHTML=data;

}

// SERVER ERROR
console.log("WAIT: ERROR FROM SERVER");

function server_error() {

    console.log("SERVER ERROR");

    // SERVER ERROR
    document.getElementById("data_display_text").innerHTML="SERVER ERROR";
    document.getElementById("data_display").style.backgroundColor=red;
    document.getElementById("data_display").style.color=black;
    
}

