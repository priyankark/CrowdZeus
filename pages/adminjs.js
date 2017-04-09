var httpRequest = createxmlhttprequest();
var info=null;
var category=null;
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
var pname,desc,cat,city,state,funds,cpoints;
function def() {
    // body...
    console.log('afwefw');
     pname=document.getElementById("pname").value;
     desc=document.getElementById("desc").value;
     cat=document.getElementById("cat").value;
     city=document.getElementById("city").value;
     state=document.getElementById("state").value;
     funds=document.getElementById("funds").value;
     cpoints=document.getElementById("cpoints").value;
    console.log(cpoints);
    var copy=document.getElementById("copy");
    var mbody=document.getElementById("ins");
    while (mbody.hasChildNodes()) {
         mbody.removeChild(mbody.lastChild);
    }
    for(var i=0;i<parseInt(cpoints);i++)
    {
        console.log(i);
        var temp=copy.cloneNode(true);
        temp.getElementsByTagName('label')[0].innerHTML=i+1;
        temp.getElementsByTagName('input')[0].id="t"+i;
        temp.style.display='block';
        mbody.appendChild(temp);
    }
}
function abc()
{
     var s=[];
    for(var i=0;i<parseInt(cpoints);i++)
    {
        var temp=document.getElementById("t"+i);
         s.push(temp.value.trim());
    }
    
    
    console.log(s);

    if(httpRequest.readyState==0 || httpRequest.readyState==4)
    {
        httpRequest.open("POST","project.php",true);
        httpRequest.onreadystatechange=function ()
        {
            console.log(httpRequest.responseText);
            if (httpRequest.readyState == 4 && httpRequest.status == 200)
            {
                alert('Project created');
            }

        };
         httpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpRequest.send("pname="+pname+"&desc="+desc+"&cat="+cat+"&city="+city+"&state="+state+"&fund="+funds+"&cpoints="+cpoints+"&cdesc="+JSON.stringify(s));
    }
}
