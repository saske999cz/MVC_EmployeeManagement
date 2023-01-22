
//Form11
function ValidateInfo(){
var text1 = document.getElementById("tx1").value;
var text2 = document.getElementById("tx2").value;
if(text1 == "" && text2 == ""){
    alert("Invalid Username & Password !");
}
else if(text1 == "")
{
    alert("Invalid Username !");
}
else if(text2 == ""){
    alert("Invalid Password !");
}

        }


function ClearInfo(){
    document.getElementById("tx1").value = "";
    document.getElementById("tx2").value = "";
}



//Form33

function ChangeText(){
    var text1 = document.getElementById("tx1").value;
    var text2 = "";
    
    for(var i = 0; i < text1.length; i++){
        if(text1.charCodeAt(i)>=65 && text1.charCodeAt(i)<=90)
        {
            text2 += String.fromCharCode(text1.charCodeAt(i) + 32);
        }
        if(text1.charCodeAt(i)>=97 && text1.charCodeAt(i)<=122)
        {
            text2 += String.fromCharCode(text1.charCodeAt(i) - 32);
        }
    }
    document.getElementById("tx2").value = text2;

    
}


//Form44

function SelectID(){

    var text1 = document.f1.t1.value;
    document.f1.s1.selectedIndex = text1;

}


function SelectIndex(){
    
    document.f1.t1.value = document.f1.s1.selectedIndex;
}












