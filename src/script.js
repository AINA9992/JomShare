//AINA SYARAFINA BINTI ROSLAN(148450)
//AQILAH SYAZANI BINTI NOORAZIZ(146410)

var box2 = document.getElementsByClassName("box2")[0];
var box3 = document.getElementsByClassName("box3")[0];
var checkicon = document.getElementById("save");
var xicon = document.getElementById("xicon");
var i=0;

xicon.addEventListener("click",function(){
    typeNote();
})

checkicon.addEventListener("click",function(){
    checkNote();
})

function typeNote(){
   
    if(box3.style.display == "none"){
        box3.style.display = "block";
    }
    else{

        box3.style.display ="none";
    }
}

function checkNote(){
    var noteText = document.getElementById("textnote").value;

    document.getElementById("textnote").value = '';
    document.getElementById("note").submit();
}



