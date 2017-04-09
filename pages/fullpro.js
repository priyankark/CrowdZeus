function findGetParameter(parameterName) {
    var result = null,
        tmp = [];
    var items = location.search.substr(1).split("&");
    for (var index = 0; index < items.length; index++) {
        tmp = items[index].split("=");
        if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    }
    return result;
}

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
          var p=findGetParameter('p');
          console.log(p);
          for (var i = 0; i < info.length; i++) {

          	if(parseInt(info[i][0]["pid"]) == parseInt(p))
          	{
          		;
          		break;
          	}
          }
          console.log(info)
          document.getElementById('ProName').innerHTML=info[i][0]["pname"];
          document.getElementById('desc').innerHTML=info[i][0]["desc"];
          console.log(info[i]["cdesc"]);
          document.getElementById('cdesc').innerHTML="<ul><li>"+info[i]["cdesc"][0]+"</li><li>"+info[i]["cdesc"][1]+"</li><li>"+info[i]["cdesc"][2]+"</li></ul>";

          //console.log(info['swimming'].length);
         /* var copy=document.getElementById("sqcopy");
            var mbody=document.getElementById("body");
            while (mbody.hasChildNodes()) {
                 mbody.removeChild(mbody.lastChild);
            }
            for (var i = 0; i < info.length; i++) {
                    var temp=copy.cloneNode(true);
                    temp.href=temp.href+info[i][0]["pid"];
                   // console.log( temp.href);
                    temp.getElementsByTagName('h5')[0].innerHTML=info[i][0]["pname"];
                    temp.getElementsByTagName('p')[0].innerHTML=info[i][0]["desc"];
                    temp.style.display='block';
                    temp.getElementsByTagName('div')[6].style.width=(parseInt(info[i][0]['collect'])/parseInt(info[i][0]['fund'])*100)+"%";
                    mbody.appendChild(temp);
            }*/

    }
  };
  xhttp.open("GET", "pdet.php?t=" + Math.random(), true);
  xhttp.send();
