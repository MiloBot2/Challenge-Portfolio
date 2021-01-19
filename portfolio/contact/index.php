<?php
$message = null;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $message = "Bedankt voor je bericht " . $_POST['contact-name'] .  "! Ik kom zo snel mogelijk bij je terug.";   
}

//contact

?>
<html>
    <head>
        <title>Contact | Milo's Website</title>
        <link rel="stylesheet" href="http://localhost/milo/css/contact.css">
        <link href="http://localhost/milo/css/main.css" rel="stylesheet">
    </head>
    <body>
        <?php
            include("../includes/navbar.php");
        ?>
        <div class="page-wrapper">
            <div class="container">
                <div class="contact-form">
                    <form method="POST" class="form" id="contact">
                    <span style="font-size: 190%;">Contact Form</span>
                    <br>

                    <?php
                    if($message != null){
                        echo '<div class="message">';
                            echo '<p style="color: #ffb73b;">' . $message . '</p>';
                        echo '</div>';
                    }
                    ?>
                    
                    <p class="form-content-title">Wat is je naam?</p>
    					<input required type="text" class="form-content-input" name="contact-name">	
    				<p class="form-content-title">Wat is je email?</p>
    				    <input required type="text" class="form-content-input" name="contact-mail"> 
    				<p class="form-content-title">Wat wil je zeggen?</p>
    				    <textarea required class="form-content-input textarea" name="contact-text" cols="40" rows="5" form="contact"></textarea>
    				<button type="submit "name="submit" class="submit">Verstuur!</button>
                </form>
                </div>
                <div class="contact-info">
                    <span style="font-size: 140%;">Contact Informatie</span>
                    <p>Heb je nog andere vragen? Stuur me gerust een email, of bel me.</p>
                    <p><a style="color: #3595e8;" href="mailto:milo.vandam@student.rocva.nl">milo.vandam@student.rocva.nl</a> <span style="color: #e6b749;">+31 06 23645298</span></p>
                </div>
            </div>
        </div>
    </body>
</html>