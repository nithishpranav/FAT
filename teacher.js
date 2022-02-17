
var t = new Date();
var d = t.getDay();
var dl = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
document.getElementById("displayDay").innerHTML =dl[d];

function change(){
    document.getElementById("3").innerHTML = "free";
    //document.getElementById("day").style.display="none";
    //document.getElementById("week").style.display="block"; 
}

function dayAppear(){
    //document.getElementById("week").style.display="none"; 
    document.getElementById("announcement").style.display="none"; 
    document.getElementById("optout").style.display="none";
    document.getElementById("day").style.display="block";  
   
}

function announceAppear(){
    document.getElementById("day").style.display="none";
   //document.getElementById("week").style.display="none"; 
   document.getElementById("optout").style.display="none";
    document.getElementById("announcement").style.display="block";
}
function optoutAppear(){
    document.getElementById("day").style.display="none";
    document.getElementById("announcement").style.display="none";
    document.getElementById("optout").style.display="block";
}
// function optoutAppear(){
//     document.getElementById("day").style.display="none";
//     document.getElementById("announcement").style.display="none";
//     document.getElementById("optout").style.display="block";
// }
// <?php $j++;?>
//<td > <?php echo $val;?> </td>
//<td id = <?php $j++;?>> <?php echo $val;?> </td>

//                <option value="<? echo $srow['s_ID']; ?>"> <?php echo $srow["s_ID"];?> </option>
