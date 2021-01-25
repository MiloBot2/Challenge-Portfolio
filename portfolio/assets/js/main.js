function load()
{
  if(!(getCookie("naam") === "" && getCookie("leeftijd") === ""))
  {
    console.log("Sessie restored! (" + getCookie("naam") + ", " + getCookie("leeftijd") + ")");
    login(getCookie("naam"), getCookie("leeftijd"));
  }
  else
  {
    console.log("Nieuwe sessie!");
    name();
  }
}

function name()
{
   let name = prompt("Hoe heet je?");
   let age = prompt("Welkom " + name + "! Hoe oud ben je?");
   login(name, age);
   setCookie("naam", name, "1");
   setCookie("leeftijd", age, "1");
}

function login(name, age)
{
  if(age >= 18)
  {
    document.getElementsByTagName("body")[0].style.backgroundColor = "#157340";
  }
  else
  {
    document.getElementsByTagName("body")[0].style.backgroundColor = "#731b15";
  }
  document.getElementById("user").innerHTML = "Welkom " + name + "! (" + age + ")";
}

function logout(){
    document.cookie = "naam=; expires=Thu, 01 Jan 2000 00:00:00 UTC; path=/;";
    document.cookie = "leeftijd=; expires=Thu, 01 Jan 2000 00:00:00 UTC; path=/;";
    location.reload();
}
   
   
function setCookie(cookjeNaam, waarde, expireT)
{
  let d = new Date();
  d.setTime(d.getTime() + (expireT * 24 * 60 * 60 * 1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cookjeNaam + "=" + waarde + ";" + expires + ";path=/";
}

//Info krijgen van alertbox

function getCookie(cookjeNaam)
{
  let naam = cookjeNaam + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for(let i = 0; i < ca.length; i++)
  {
    let c = ca[i];
    while (c.charAt(0) == ' ')
    {
      c = c.substring(1);
    }
    if (c.indexOf(naam) == 0)
    {
      return c.substring(naam.length, c.length).replace("null", "");
    }
  }
  return "";
}