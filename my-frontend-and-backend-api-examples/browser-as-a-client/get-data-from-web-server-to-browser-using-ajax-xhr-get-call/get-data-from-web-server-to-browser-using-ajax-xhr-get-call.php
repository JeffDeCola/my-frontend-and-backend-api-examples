<!-- get-data-from-web-server-to-browser-using-ajax-xhr-get-call -->

<link rel="stylesheet" type="text/css" href="browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/css/get-data-from-web-server-to-browser-using-ajax-xhr-get-call.css">
<script type="text/javascript" src="browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/js/ajax_xhr_call_get.js"></script>
<script type="text/javascript" src="browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/js/display_data.js"></script>

<div id="get-data-from-web-server-to-browser-using-ajax-xhr-get-call_wrapper">
    
    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="picture_container">

        <img src="browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/images/get-data-from-web-server-to-browser-using-ajax-xhr-get-call.jpg" alt="get-data-from-web-server-to-browser-using-ajax-xhr-get-call"/>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="comment_container">

        <h3> DATA FROM WEB SERVER </h3>
        <p>
            A request will be
            sent from a browser (client)
            to a web server (server)
            that will return the current time.
        </p>
        <p>
            I used my
            <a href="https://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container"> dynamic_items_container </a>
            php container for the layout
        </p>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="data_container"  class = "box_container">
        <div class = "box_items_container">    

        <div id="data_item" class = "display_item box_item">
                <div class="display_title">
                    TIME AT WEB SERVER
                </div>
                <div id="data_display" class="display_info"> 
                    <div id="data_display_text" class="display_info_text">
                    </div>
                </div> 
            </div>

        </div>
    </div>


    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="error_container"  class = "box_container">
        <div class = "box_items_container">
            
            <div id="error_button_item" class = "button_item box_item">
                <div class="button_title">
                </div>
                <div id="error_button_push" class="button_push" 
                    onmouseover="error_button_onmouseover()"
                    onmouseout="error_button_onmouseout()"
                    onclick="error_button_onclick()">
                    <div id="error_button_text" class="button_push_text">
                        TOGGLE SERVER ERROR
                    </div>                
                </div> 
            </div>

        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="comment_container">

        <h3> XMLHttpRequest (XHR) GET Call </h3>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="code_container">

        <h3> 
            <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/blob/main/my-frontend-and-backend-api-examples/browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/js/ajax_xhr_call_get.js">
                JAVASCRIPT HIGHLIGHTS (CLIENT SIDE)
            </a>
        </h3>

        <pre class="prettyprint lang-protobuf">

        // PHP FILE LOCATION
        var url = 'path to file/filename.php';

        // CREATE A NEW REQUEST
        getRequest = new XMLHttpRequest();
        
        // OPEN CONNECTION - CREATE GET REQUEST
        getRequest.open <span style="color:blue; font: weight 900px;"> 'GET' </span>, url, true);

        // SEND JSON FORMAT
        getRequest.setRequestHeader('Content-Type', 'application/json');
        getRequest.send();

        // LISTEN AND KICK OFF FUNCTION WHEN READY
        getRequest.onreadystatechange = function() {
            ...see code...
        }
        
        </pre>

        <h3> 
            <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/blob/main/my-frontend-and-backend-api-examples/browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/php_scripts/get_data_from_server.php">
                PHP HIGHLIGHTS (SERVER SIDE)  
            </a>
        </h3>

        <pre class="prettyprint lang-protobuf">

        // BUILD ARRAY
        $dataArray = [
            'hour'=>$hour,
            'minute'=>$minute,
            'second'=>$second,
        ];

        // SEND IT TO THE BROWSER
        echo json_encode($dataArray);

        </pre>
        
    </div>

</div>
