<?php
    session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    
        // THE PAGES
        $whitelist = array( "",
                            "ajax-XHR-calls-browser-to-web-server",
                            "ajax-XHR-calls-web-server-to-browser",
                            "gRPC-with-protobuf-web-server-to-backend-server",
                            "gRPC-with-protobuf-backend-server-to-web-server",
                            "ajax-XHR-calls-and-gRPC-with-protobuf");

        // THE PAGE TITLE
        if (in_array($_GET['page'], $whitelist)) {
            if ($_GET['page'] == "") {
                echo "<title> APIs - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "ajax-XHR-calls-browser-to-web-server") {
                echo "<title> APIs - ajax-XHR-calls-browser-to-web-server - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - ajax-XHR-calls-browser-to-web-server - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "ajax-XHR-calls-web-server-to-browser") {
                echo "<title> APIs - ajax-XHR-calls-web-server-to-browser - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - ajax-XHR-calls-web-server-to-browser - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "gRPC-with-protobuf-web-server-to-backend-server") {
                echo "<title> APIs - gRPC-with-protobuf-web-server-to-backend-server - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - gRPC-with-protobuf-web-server-to-backend-server - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "gRPC-with-protobuf-backend-server-to-web-server") {
                echo "<title> APIs - gRPC-with-protobuf-backend-server-to-web-server - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - gRPC-with-protobuf-backend-server-to-web-server - Jeff DeCola' />";
            }
            elseif ($_GET['page'] == "ajax-XHR-calls-and-gRPC-with-protobuf") {
                echo "<title> APIs - ajax-XHR-calls-and-gRPC-with-protobuf - Jeff DeCola </title>";
                echo "<meta name='Description' content='APIs - ajax-XHR-calls-and-gRPC-with-protobuf - Jeff DeCola' />";
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
    <script type="text/javascript" src="jqs/custom.js"></script>
    <script type="text/javascript" src="jqs/js.cookie.js"></script>
    
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

            <h1> MY FRONTEND AND BACKEND API EXAMPLES </h1>

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
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=ajax-XHR-calls-browser-to-web-server"> ajax XHR calls (Browser to Web Server) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=ajax-XHR-calls-web-server-to-browser"> ajax XHR calls (Web Server to Browser) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=gRPC-with-protobuf-web-server-to-backend-server"> gRPC with protobuf (Web Server to Backend Server) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=gRPC-with-protobuf-backend-server-to-web-server"> gRPC with protobuf (Backend Server to Web Server) </a> </li>
                    <li><a href="http://www.jeffdecola.com/my-frontend-and-backend-api-examples/index.php?page=ajax-XHR-calls-and-gRPC-with-protobuf"> ajax XHR calls and gRPC with protobuf (Browser to Web Server to Backend Server) </a> </li>
                    <br />
                    <li><a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples"> ALL CODE ON MY GITHUB REPO </a> </li>
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
                        elseif ($_GET['page'] == "ajax-XHR-calls-browser-to-web-server") { ?>
                            <h2> USING AJAX XHR CALLS </h2>
                            <h3> FROM A BROWSER TO A WEB SERVER </h3>
                            <p> The API will use an ajax XHR call
                                written in javascript and php.
                            </p>
                            <p> Two numbers will be
                                sent from a browser (client)
                                to a web server (server)
                                that will calculate
                                and return the sum.
                            </p>
                            <p> A webpage will be used to
                                enter the data and
                                display the roundtrip results.
                            </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "ajax-XHR-calls-web-server-to-browser") { ?>
                            <h2> USING AJAX XHR CALLS </h2>
                            <h3> FROM A WEB SERVER TO A BROWSER </h3>
                            <p> The API will use an ajax XHR call
                                written in javascript and php.
                            </p>
                            <p> A ?????? will be
                                sent from a web server (client)
                                to a browser (server)
                                that will return an acknowledgment.
                            </p>
                            <p> A webpage will be used to
                                display the ????.
                            </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-and-web-server-apis/ajax-XHR-calls-web-server-to-browser"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "gRPC-with-protobuf-web-server-to-backend-server") { ?>
                            <h2> USING gRPC WITH PROTOBUF </h2>
                            <h3> FROM A WEB SERVER TO A BACKEND SERVER </h3>
                            <p> The API will use an gRPC with protobuf
                                written in php and go.
                            </p>
                            <p> Two numbers will be
                                sent from a web server (client)
                                to a backend server (server)
                                that will calculate
                                and return the sum.
                            </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-and-backend-server-apis/gRPC-with-protobuf-web-server-to-backend-server"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "gRPC-with-protobuf-backend-server-to-web-server") { ?>
                            <h2> USING gRPC WITH PROTOBUF </h2>
                            <h3> FROM A BACKEND SERVER TO A WEB SERVER </h3>
                            <p> The API will use an gRPC with protobuf
                                written in go and php.
                            </p>
                            <p> A ?????? will be
                                sent from a backend server (client)
                                to a web server (server)
                                that will return an acknowledgment.
                            </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/web-server-and-backend-server-apis/gRPC-with-protobuf-backend-server-to-web-server"> here </a>
                            </p>
                        <?php }
                        elseif ($_GET['page'] == "ajax-XHR-calls-and-gRPC-with-protobuf") { ?>
                            <h2> USING AJAX XHR calls </h2>
                            <h3> FROM A BROWSER TO A WEB SERVER & USING gRPC with protobuf FROM A WEB SERVER TO A BACKEND SERVER </h3>
                            <p> The API will use an ajax XHR call
                                written in javascript and php
                                and gRPC with protobuf
                                written in go and php.
                            </p>
                            <p> Two numbers will be
                                sent from a browser (client)
                                to a web server (server).
                            </p>
                            <p> Two numbers will then be
                                sent from the web server (client)
                                to a backend server (server)
                                that will calculate
                                and return the sum.
                            </p>
                            <p> A webpage will be used to
                                enter the data and
                                display the roundtrip results.
                            </p>
                            <p> Code located
                                <a href="https://github.com/JeffDeCola/my-frontend-and-backend-api-examples/tree/main/my-frontend-and-backend-api-examples/browser-web-server-and-backend-server-apis/ajax-XHR-calls-and-gRPC-with-protobuf"> here </a>
                            </p>
                        <?php }
                        // For the index.php page
                        else { ?>
                            <p> Should not get this </p>
                        <?php }
                    }
                    // The page does not exist - Just give a 404 error
                    else { ?>
                        <p> CHOOSE AN API EXAMPLE ABOVE </p>
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
                                    // Blank
                                }
                                else if ($_GET['page'] == "ajax-XHR-calls-browser-to-web-server")
                                {
                                    include("browser-and-web-server-apis/ajax-XHR-calls-browser-to-web-server/ajax-XHR-calls-browser-to-web-server.php");
                                }
                                else if ($_GET['page'] == "ajax-XHR-calls-web-server-to-browser")
                                {
                                    include("browser-and-web-server-apis/ajax-XHR-calls-web-server-to-browser/ajax-XHR-calls-web-server-to-browser.php");
                                }
                                else if ($_GET['page'] == "gRPC-with-protobuf-web-server-to-backend-server")
                                {
                                    include("web-server-and-backend-server-apis/gRPC-with-protobuf-web-server-to-backend-server/gRPC-with-protobuf-web-server-to-backend-server.php");
                                }
                                else if ($_GET['page'] == "gRPC-with-protobuf-backend-server-to-web-server")
                                {
                                    include("web-server-and-backend-server-apis/gRPC-with-protobuf-backend-server-to-web-server/gRPC-with-protobuf-backend-server-to-web-server.php");
                                }
                                else if ($_GET['page'] == "ajax-XHR-calls-and-gRPC-with-protobuf")
                                {
                                    include("browser-web-server-and-backend-server-apis/ajax-XHR-calls-and-gRPC-with-protobuf/ajax-XHR-calls-and-gRPC-with-protobuf.php");
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
