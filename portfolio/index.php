<html>
    <head>
        <title>About | Milo's Website</title>
        <link href="http://localhost/milo/css/main.css" rel="stylesheet">
        <style>
            .info {
                margin: auto;
                margin-top: 50px;
                padding: 18px;
                border-radius: 12px;
                border: 2px solid #99aab5;
                text-align: center;
                color: #23272a;
                width: 70%;
                background-color: white;
            }
            @media screen and (max-width: 800px) {
                .card {
                    width: 95%;
                }
                
                .info {
                    width: 90%;
                }
            }
        </style>
    </head>
    <body>
        <?php
            include("includes/navbar.php");
        ?>
        <div class="page-wrapper">
            <div class="container">
            <div class="info">
                    <h1>About</h1>
                    <p>Hoi, ik ben Milo en op deze website kun je wat informatie vinden over mijn projecten en interesses.</p>
                </div>
        </div>
    </body>
</html>