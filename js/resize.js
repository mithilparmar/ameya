window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logoimg").style.height = "40px";
    var links = document.getElementsByTagName("a");
    for(var i=0;i<links.length;i++)
    {
      if(links[i].className == "navbar-right"){
        if(links[i].href)
        {
          links[i].style.padding = "20px 20px 20px 20px";  
        }
      }
    }
  } else {
    document.getElementById("logoimg").style.height = "55px";
    var links = document.getElementsByTagName("a");
    for(var i=0;i<links.length;i++)
    {
      if(links[i].className == "navbar-right")
        if(links[i].href)
        {
          links[i].style.padding = "30px 20px 30px 20px";  
        }
      }
    }
  }
}