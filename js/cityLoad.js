function cityLoad(str) {
    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status== 200){
            document.getElementById('branch').innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "php/branchLoad.php?value="+str, true);
    xmlhttp.send();
}   