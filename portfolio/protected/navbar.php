<header id="navBar" class="navBar">
    <h2 style="font-variant: small-caps; margin-right: auto; color: #49ba94;">Milo's Website</h2>
    <h3 style="text-align: center; margin-right: auto;" id="user"></h3>
    <nav>
        <ul class="nav_links">
            
            <li id="home"><a href='/portfolio/'>About</a></li>
            <li><a href='/portfolio/interests'>Interests</a></li>
            <li><a href='/portfolio/projects'>Projects</a></li>
            <li><a href='/portfolio/contact'>Contact</a></li>
            <li><a style="cursor: pointer;" onclick="logout();">Reset Sessie</a></li>

        </ul>
        
    </nav>
    
    <a href="javascript:void(0);" class="icon" onclick="resNav()">
            <i class="fa fa-bars"></i>
    </a>
    
</header>

<div class="nav_collapsed" id="nav_collapsed" style="display: none;">

        <li><a href='/portfolio/interests'>Interests</a></li>
        <li><a href='/portfolio/projects'>Projects</a></li>
        <li><a href='/portfolio/contact'>Contact</a></li>
        <li><a style="cursor: pointer;" onclick="logout();">Reset Sessie</a></li>
        
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
</script>