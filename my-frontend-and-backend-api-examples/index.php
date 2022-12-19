<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
        // THE PAGES
        $whitelist = array( "",
                            "get-data-from-web-server-to-browser-using-ajax-xhr-get-call",
                            "send-data-from-browser-to-web-server-using-ajax-xhr-post-call",
                            "get-data-from-backend-server-to-web-server-using-grpc-with-protobuf",
                            "send-data-from-web-server-to-backend-server-using-grpc-with-protobuf",
                            "get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf",
                            "get-data-from-web-server-to-backend-server-using-grpc-with-protobuf",
                            "send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf",
                            "send-data-from-backend-server-to-web-server-using-grpc-with-protobuf",
                            "send-data-from-browser-to-web-server-to-backend-server");

        // THE PAGE TITLE
        if (in_array($_GET['page'], $whitelist)) {
            if ($_GET['page'] == "") {
                echo "<title> APIs - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "get-data-from-web-server-to-browser-using-ajax-xhr-get-call") {
                echo "<title> APIs -get-data-from-web-server-to-browser-using-ajax-xhr-get-call - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - get-data-from-web-server-to-browser-using-ajax-xhr-get-call - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "end-data-from-browser-to-web-server-using-ajax-xhr-post-call") {
                echo "<title> APIs - end-data-from-browser-to-web-server-using-ajax-xhr-post-call - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - end-data-from-browser-to-web-server-using-ajax-xhr-post-call - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "get-data-from-backend-server-to-web-server-using-grpc-with-protobuf") {
                echo "<title> APIs - get-data-from-backend-server-to-web-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - get-data-from-backend-server-to-web-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "send-data-from-web-server-to-backend-server-using-grpc-with-protobuf") {
                echo "<title> APIs - send-data-from-web-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - send-data-from-web-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf") {
                echo "<title> APIs - get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "get-data-from-web-server-to-backend-server-using-grpc-with-protobuf") {
                echo "<title> APIs - get-data-from-web-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - get-data-from-web-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf") {
                echo "<title> APIs - send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "send-data-from-backend-server-to-web-server-using-grpc-with-protobuf") {
                echo "<title> APIs - send-data-from-backend-server-to-web-server-using-grpc-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - send-data-from-backend-server-to-web-server-using-grpc-with-protobuf - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "send-data-from-browser-to-web-server-to-backend-server") {
                echo "<title> APIs - send-data-from-browser-to-web-server-to-backend-server - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - send-data-from-browser-to-web-server-to-backend-server - Jeff DeCola' />";
            }
            // For the index.php page
            else  {
                echo "<title> APIs - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - Jeff DeCola' />";
            }
        }
        // The page does not exist - Just give a 404 error
        else {
            echo "<title>404 - APIs - PAGE NOT FOUND - Jeff DeCola </title>";
            echo "<meta name='Description' content='404 - APIs - PAGE NOT FOUND - Jeff DeCola' />";
        }
    ?>

    <!-- TAGS FOR GOOGLE, YAHOO, BING, AND ALEXA, IN THAT ORDER -->
    <!-- <meta name="y_key" content="????" > -->
    <!-- <meta name="msvalidate.01" content="????" > -->
    <!-- <meta name="alexaVerifyID" content="??" > -->
    <!-- <meta name="google-site-verification" content="??" > -->

    <!-- THE PAGE ICON -->
    <link rel="icon" type="image/ico" href="../images/page_icon/favicon.ico"/>

    <!-- LINK TO THE STYLE SHEETS - FORCE UPDATE WITH DATE-->
    <link rel="stylesheet" type="text/css" href="../css/reset.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/template.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/wrappers.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="../css/containers.css?v=<?php echo date('his'); ?>"/>
    <link rel="stylesheet" type="text/css" href="css/api.css?v=<?php echo date('his'); ?>"/>

    <!-- GOOGLE FONT -->
    <!-- Make sure to update Body tag in template.css with the font name -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Domine"/>

    <!-- JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../jqs/custom.js"></script>
    <script type="text/javascript" src="../jqs/js.cookie.js"></script>
    
    <!-- GOOGLE ANALYTICS -->

</head>

<body>

<noscript>
    <div style="margin-top: 10px; color: #f01; font-size: 11px; width:100%; text-align:center">
        You may not get the full functionality of this webpage because JavaScript is either disabled or not supported by your browser. <br />
    </div>
</noscript>

<!-- START OF entire_wrapper -->
<div id="entire_wrapper">

    <div id="header_wrapper">

        <header>

            <h2 class="hidden"> HEADER </h2>

            <h1> <a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php">
                 MY FRONTEND AND BACKEND API EXAMPLES </a> </h1>

            <!-- <div id="header_container">
                <p> tbd </p>
            </div> -->

        </header>

    </div>
    <!-- END OF header_wrapper -->

    <div id="nav_wrapper">

        <nav>

            <h2 class="hidden"> Navigation </h2>

             <div id="nav_container">
                <ul>
                    <li class="nav_client_type"> BROWSER AS A CLIENT </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=get-data-from-web-server-to-browser-using-ajax-xhr-get-call">
                         Get Data from a Web Server (Ajax XHR GET call) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-browser-to-web-server-using-ajax-xhr-post-call">
                         Send Data to a Web Server (Ajax XHR POST call) </a> </li>
                    <br />
                    <li class="nav_client_type"> WEB SERVER AS A CLIENT </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=get-data-from-backend-server-to-web-server-using-grpc-with-protobuf">
                         Get Data from a Backend Server (gRPC with protobuf) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-web-server-to-backend-server-using-grpc-with-protobuf">
                         Send Data to a Backend Server (gRPC with protobuf) </a> </li>
                    <br />
                    <li class="nav_client_type"> BACKEND SERVER AS A CLIENT </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf">
                         Get Data from a Backend Server (gRPC with protobuf) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=get-data-from-web-server-to-backend-server-using-grpc-with-protobuf">
                         Get Data from a Web Server (gRPC with protobuf) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf">
                         Send Data to a Backend Server (gRPC with protobuf) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-backend-server-to-web-server-using-grpc-with-protobuf">
                         Send Data to a Web Server (gRPC with protobuf) </a> </li>
                    <br />
                    <li class="nav_client_type"> MULTI-HOP EXAMPLES </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=send-data-from-browser-to-web-server-to-backend-server">
                         Send Data to a Web Server (Ajax XHR POST call) to a Backend Server (gRPC with protobuf) </a> </li>
                    <br />
                    <li><a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples"> ALL CODE LOCATED AT MY GITHUB REPO </a> </li>
                    <li><a href="http://www.jeffdecola.com"> HOME </a> </li>
                    
                </ul>
            </div>

        </nav>

    </div>
       <!-- END OF nav_wrapper -->

       <div id="section_wrapper">

        <section>

            <h2 class="hidden"> SECTION </h2>

            <div class="container_header_container">

                <?php

                    if (in_array($_GET['page'], $whitelist)) {
                        if ($_GET['page'] == "") { ?>
                            <p> CHOOSE AN API EXAMPLE ABOVE </p>
                        <?php }
                        elseif ($_GET['page'] == "get-data-from-web-server-to-browser-using-ajax-xhr-get-call") { ?>
                            <h2> GET DATA FROM A WEB SERVER TO A BROWSER </h2>
                            <h3> USING AN AJAX XMLHttpRequest (XHR) GET CALL</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call"> Code </a>
                                written in javascript and php
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "send-data-from-browser-to-web-server-using-ajax-xhr-post-call") { ?>
                            <h2> SEND DATA FROM A BROWSER TO A WEB SERVER </h2>
                            <h3> USING AN AJAX XMLHttpRequest (XHR) POST CALL</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call"> Code </a>
                                written in javascript and php
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "get-data-from-backend-server-to-web-server-using-grpc-with-protobuf") { ?>
                            <h2> GET DATA FROM A BACKEND SERVER TO A WEB SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/get-data-from-backend-server-to-web-server-using-grpc-with-protobuf"> Code </a>
                                written in php and go
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "send-data-from-web-server-to-backend-server-using-grpc-with-protobuf") { ?>
                            <h2> SEND DATA FROM A WEB SERVER TO A BACKEND SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf"> Code </a>
                                written in php and go
                            </p>
                        <?php }                                                

                        elseif ($_GET['page'] == "get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf") { ?>
                            <h2> GET DATA FROM A BACKEND SERVER TO A BACKEND SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/backend-server-as-a-client/get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf"> Code </a>
                                written in go
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "get-data-from-web-server-to-backend-server-using-grpc-with-protobuf") { ?>
                            <h2> GET DATA FROM A WEB SERVER TO A BACKEND SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/backend-server-as-a-client/get-data-from-web-server-to-backend-server-using-grpc-with-protobuf"> Code </a>
                                written in php and go
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf") { ?>
                            <h2> SEND DATA FROM A BACKEND SERVER TO A BACKEND SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/backend-server-as-a-client/send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf"> Code </a>
                                written in go
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "send-data-from-backend-server-to-web-server-using-grpc-with-protobuf") { ?>
                            <h2> SEND DATA FROM A BACKEND SERVER TO A WEB SERVER </h2>
                            <h3> USING gRPC WITH PROTOBUF</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/backend-server-as-a-client/send-data-from-backend-server-to-web-server-using-grpc-with-protobuf"> Code </a>
                                written in php and go
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "send-data-from-browser-to-web-server-to-backend-server") { ?>
                            <h2> SEND DATA FROM A BROWSER TO A WEB SERVER TO A BACKEND SERVER </h2>
                            <h3> USING AN AJAX XMLHttpRequest (XHR) POST CALL and gRPC WITH PROTOBUF RESPECTIVELY</h3>
                            <p> 
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/multi-hop-examples/send-data-from-browser-to-web-server-to-backend-server"> Code </a>
                                written in php and go
                            </p>
                        <?php }
                        // For the index.php page
                        else { ?>
                            <p> Should not get this </p>
                        <?php }
                    }
                    // The page does not exist - Just give a 404 error
                    else { ?>
                        <p> The page does not exist - 404 </p>
                    <?php }

                ?>

            </div>
            <!-- END OF container_header -->

            <div id="page_wrapper">

                <div id="article_wrapper">

                    <article>

                        <h2 class="hidden"> ARTICLE - HOME PAGE </h2>

                        <!-- CHOOSE PAGE -->
                        <?php
                             if(in_array($_GET['page'], $whitelist)) {

                                // Is it the home page?
                                if ($_GET['page'] == "") {
                                    include("overview.php");
                                }
                                else if ($_GET['page'] == "get-data-from-web-server-to-browser-using-ajax-xhr-get-call")
                                {
                                    include("browser-as-a-client/get-data-from-web-server-to-browser-using-ajax-xhr-get-call/get-data-from-web-server-to-browser-using-ajax-xhr-get-call.php");
                                }
                                else if ($_GET['page'] == "send-data-from-browser-to-web-server-using-ajax-xhr-post-call")
                                {
                                    include("browser-as-a-client/send-data-from-browser-to-web-server-using-ajax-xhr-post-call/send-data-from-browser-to-web-server-using-ajax-xhr-post-call.php");
                                }
                                else if ($_GET['page'] == "get-data-from-backend-server-to-web-server-using-grpc-with-protobuf")
                                {
                                    include("web-server-as-a-client/get-data-from-backend-server-to-web-server-using-grpc-with-protobuf/get-data-from-backend-server-to-web-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "send-data-from-web-server-to-backend-server-using-grpc-with-protobuf")
                                {
                                    include("web-server-as-a-client/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf/send-data-from-web-server-to-backend-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf")
                                {
                                    include("backend-server-as-a-client/get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf/get-data-from-backend-server-to-backend-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "get-data-from-web-server-to-backend-server-using-grpc-with-protobuf")
                                {
                                    include("backend-server-as-a-client/get-data-from-web-server-to-backend-server-using-grpc-with-protobuf/get-data-from-web-server-to-backend-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf")
                                {
                                    include("backend-server-as-a-client/send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf/send-data-from-backend-server-to-backend-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "send-data-from-backend-server-to-web-server-using-grpc-with-protobuf")
                                {
                                    include("backend-server-as-a-client/send-data-from-backend-server-to-web-server-using-grpc-with-protobuf/send-data-from-backend-server-to-web-server-using-grpc-with-protobuf.php");
                                }
                                else if ($_GET['page'] == "send-data-from-browser-to-web-server-to-backend-server")
                                {
                                    include("multi-hop-examples/send-data-from-browser-to-web-server-to-backend-server/send-data-from-browser-to-web-server-to-backend-server.php");
                                }
                            }
                            // NOT IN WHITELIST - Page does not exist - Just give a 404 error
                            else {
                                include ('../pages/jeffdecola_404.php');
                            }
                        ?>

                    </article>

                </div>

            </div>
            <!-- END OF page_wrapper -->

        </section>

    </div>
    <!-- END OF section_wrapper -->

    <div id="footer_wrapper">

        <footer>

            <h2 class="hidden"> FOOTER </h2>

            <div id="footer_copyright_container">
                <p>
                    Copyright &copy; 2020
                    <a href="http://www.jeffdecola.com"> HOME, </a>
                    <a href="http://www.jeffdecola.com/index.php?page=my_website_links"> MY LINKS, </a>
                    <!-- <a href="http://www.jeffdecola.com/aw-stats"> AW, </a> -->
                    <a href="http://www.jeffdecola.com/phpinfo.php"> PHP, </a>
                    <a href="http://www.jeffdecola.com/index.php?page=stop_counting_me"> GA </a>
                    <!---<script type="text/javascript">
                        // Check if Google Analytics Master Tracking Cookie is set
                        if (document.cookie.indexOf('jeff_master_disable_google_analytics=') != -1) {
                            document.write("BLOCKING ON");
                        }
                    </script> -->
                </p>
            </div>

        </footer>

    </div>
    <!-- END OF footer_wrapper -->

</div>
<!-- END OF entire_wrapper -->

</body>
</html>
