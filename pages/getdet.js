var httpRequest = createxmlhttprequest();
var info;
//var event=null;
var m=1;
function createxmlhttprequest()
{
    var httpRequest;
    
    if(window.ActiveXObject)
        {
            try
                {
                    httpRequest=new ActiveXObject("Microsoft.XMLHTTP");
                }
            catch(e)
                {
                    httpRequest=false;
                }
        }
    else
        {
            try
                {
                    httpRequest=new XMLHttpRequest();
                }
            catch(e)
                {
                    httpRequest=false;
                }
        }
    if(!httpRequest)
        {
            alert("Cannot Create HTTP request : UPDATE YOUR BROWSER ");
        }
    else
        {
            return httpRequest;
        }
}

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange=function() {
    if (this.readyState == 4 && this.status == 200) 
    {

          info = JSON.parse(this.responseText);
          console.log(info.length);
          //console.log(info['swimming'].length);
          var copy=document.getElementById("sqcopy");
            var mbody=document.getElementById("main1");
            while (mbody.hasChildNodes()) {
                 mbody.removeChild(mbody.lastChild);
            }
            for (var i = 0; i < info.length; i++) {
                var temp=copy.cloneNode(true);
                    temp.getElementsByTagName('h5')[0].innerHTML=info[i][0]["pname"];
                    temp.getElementsByTagName('p')[0].innerHTML=info[i][0]["desc"];
                    temp.style.display='block';
                    temp.getElementsByTagName('div')[6].style.width=(parseInt(info[i][0]['collect'])/parseInt(info[i][0]['fund'])*100)+"%";
                    mbody.appendChild(temp);
            }
    }
  };
  xhttp.open("GET", "getpro.php?t=" + Math.random(), true);
  xhttp.send();


//console.log(info.length);

/*var copy=document.getElementById("sqcopy");
var mbody=document.getElementById("main1");
while (mbody.hasChildNodes()) {
     mbody.removeChild(mbody.lastChild);
}
for (var i = 0; i < info.length; i++) {
    var temp=copy.cloneNode(true);
        temp.getElementsByTagName('h5')[0].innerHTML=info[i][0]["pname"];
        temp.getElementsByTagName('p')[0].id=info[i][0]["desc"];
        temp.style.display='block';
        mbody.appendChild(temp);
}*/