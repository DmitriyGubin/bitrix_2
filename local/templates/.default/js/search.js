window.addEventListener("load",function(){

    var textt = document.querySelector('.search').innerHTML;

    var reg1 = /[A-Z0-9._-]+@[A-Z0-9-]+\.[A-Z]{2,4}/gi;
    //var reg2 = /[\w]{1}[\w-.]*@[\w-]+\.[a-z]{2,4}/gi;

    var new_text = textt.replace(reg1, function(match) {
                //console.log(match);
                return EmailCode(match);
    });
    //console.log(new_text);
            
    document.querySelector('.search').innerHTML = new_text;
});

function EmailCode(email)
{
    if (email != "") 
    {
        var ecd = "";    
        for (i = 0; i < email.length; i++) 
        {
            //ecd += "\&amp;#" + String(email.charCodeAt(i)) + ";";
            ecd += "&#" + String(email.charCodeAt(i)) + ";";
            //&#114;
        }
    }
    return ecd;
}




