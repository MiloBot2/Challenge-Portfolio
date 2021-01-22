<html>
    
    <head>
        <!--Site Identity-->
        <title>About | Milo's Website</title>
        <meta name="title" content="About | Milo's Website">
        
        <meta charset="UTF-8">
        <meta name="description" content="Dit is de website van Milo, met mijn informatie, interesses, projecten en een contact form.">
        <meta name="author" content="Milo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta property="og:image" content="https://lumon.dev/projects/milo/assets/img/milo_logo.png">
        <meta property="og:url" content="https://sites.lumon.dev/milo">
        
        <link rel="icon" type="image/png" href="https://lumon.dev/projects/milo/assets/img/milo_logo.png">
        
        <!--External Imports-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <header id="navBar" class="navBar">
    <nav>
        <ul class="nav_links">
            
            <li id="home"><a href='https://sites.lumon.dev/milo/'>About</a></li>
            <li><a href='https://sites.lumon.dev/milo/interests'>Interests</a></li>
            <li><a href='https://sites.lumon.dev/milo/projects'>Projects</a></li>
            <li><a href='https://sites.lumon.dev/milo/contact'>Contact</a></li>

        </ul>
        
    </nav>
    
    <a href="javascript:void(0);" class="icon" onclick="resNav()">
            <i class="fa fa-bars"></i>
    </a>
    
</header>

<div class="nav_collapsed" id="nav_collapsed" style="display: none;">

        <li><a href='https://sites.lumon.dev/milo/interests'>Interests</a></li>
        <li><a href='https://sites.lumon.dev/milo/projects'>Projects</a></li>
        <li><a href='https://sites.lumon.dev/milo/contact'>Contact</a></li>
        
</div>

<script>
var c = 0;
function resNav(){
    if(c == 0){
        document.getElementById("nav_collapsed").style.display = "block";
        c = 1;
    }else{
        document.getElementById("nav_collapsed").style.display = "none";
        c = 0;
    }
        
}
</script><link href="https://lumon.dev/projects/milo/assets/css/main.css" rel="stylesheet">
<link href="https://lumon.dev/projects/milo/assets/css/navBar.css" rel="stylesheet">        
    </head>
    
</html>