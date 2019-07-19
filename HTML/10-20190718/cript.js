var imageElement = document.getElementById('image');
console.log(imageElement.src);

function doiAnh(){
    if(imageElement.src=="http://127.0.0.1:5500/pic_bulboff.gif"){
        imageElement.src="./pic_bulbon.gif";
    }
    else{
        imageElement.src="./pic_bulboff.gif";
    }
}
var array=['a','b','c','d'];
for(var i=0;i<array.length;i++){
    document.getElementById("p-"+i).innerHTML=array[i];
    document.getElementById("p-"+i).style.color="blue";
}

