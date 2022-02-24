function vehicleLoad(str) {
    if (window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    } else{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status== 200){
            document.getElementById('model').innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "php/vehicleBrandLoad.php?value="+str, true);
    xmlhttp.send();
}   