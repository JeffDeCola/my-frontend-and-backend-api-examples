<!-- send-data-from-web-server-to-backend-server-using-grpc-with-protobuf -->

<link rel="stylesheet" type="text/css" href="web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf/css/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf.css">
<script type="text/javascript" src="web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf/js/addition.js"></script>
<script type="text/javascript" src="web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf/js/ajax_xhr_call_post.js"></script>

<div id="send-data-from-web-server-to-backend-server-using-grpc-with-protobuf_wrapper">
    
    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="picture_container">

        <img src="web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf/images/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf.jpg" alt="send-data-from-web-server-to-backend-server-using-grpc-with-protobuf"/>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="comment_container">

        <h3> PROTOBUF MESSAGE </h3>
        <p>
            Compiled to the go and php language respectively
        </p>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="code_container">

        <h3> PROTOBUF MESSAGE </h3>

        <pre class="prettyprint lang-protobuf">
            syntax = "proto3";

            package main;

            option go_package = "./protobuf-message";

            message Data {
                int32 operand1 = 1;
                int32 operand2 = 2;
            }
        </pre>
        
    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div class="comment_container">

        <h3> TRY IT </h3>
        <p>
            Two numbers will be
            sent from a web server (client)
            to a backend server (server)
            that will calculate
            and return the sum
        </p>
        <p>
            A webpage was added to
            enter the data and
            display the roundtrip result
        </p>
        <p>
            I used my
            <a href="https://www.jeffdecola.com/my-php-containers/index.php?page=dynamic_items_container"> dynamic_items_container </a>
            php container for the layout
        </p>

    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="equation_container"  class = "box_container">
        <div class = "box_items_container">
            
            <div id ="operand_1_item" class = "input_item box_item">
                <div class="input_title">
                    OPERAND 1
                </div>
                <div id="operand_1_input" class="input_enter">
                    <input  id="operand_1_input_field"
                            name="operand1"
                            autocomplete="off"
                            placeholder="enter"
                            type="number"
                            min="-999999999" max="999999999"
                            onchange="operand_1_onchange()">
                </div>
            </div>

            <div id="operation_1_item" class = "operation_item box_item">
                <br />
                +
            </div>

            <div id ="operand_2_item" class = "input_item box_item">
                <div class="input_title">
                    OPERAND 2
                </div>
                <div id="operand_2_input" class="input_enter">
                    <input  id="operand_2_input_field"
                            name="operand2"
                            autocomplete="off"
                            placeholder="enter"
                            type="number"
                            min="-999999999" max="999999999"
                            onchange="operand_2_onchange()">
                </div>
            </div>

            <div id="operation_2_item" class = "operation_item box_item">
                <br />
                =
            </div>

            <div id="sum_item" class = "display_item box_item">
                <div class="display_title">
                    SUM
                </div>
                <div id="sum_display" class="display_info"> 
                    <div id="sum_display_text" class="display_info_text">
                    </div>
                </div> 
            </div>

        </div>
    </div>

    <!-- ------------------------------------------------------------------------------------------------------- -->
    <div id="process_container"  class = "box_container">
        <div class = "box_items_container">

            <div id="add_button_item" class = "button_item box_item">
                <div class="button_title">
                </div>
                <div id="add_button_push" class="button_push"
                    onmouseover="add_button_onmouseover()"
                    onmouseout="add_button_onmouseout()"
                    onclick="add_button_onclick()">
                    <div id="add_button_text" class="button_push_text">
                        ADD
                    </div>
                </div> 
            </div>

            <div class = "spacer_item box_item"></div>
            
            <div id="reset_button_item" class = "button_item box_item">
                <div class="button_title">
                </div>
                <div id="reset_button_push" class="button_push" 
                    onmouseover="reset_button_onmouseover()"
                    onmouseout="reset_button_onmouseout()"
                    onclick="reset_button_onclick()">
                    <div id="reset_button_text" class="button_push_text">
                        RESET
                    </div>                
                </div> 
            </div>

        </div>
    </div>

</div>
