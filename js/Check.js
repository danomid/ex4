function Check() {
var Check = document.getElementsByName("interests[]") ; 
var Fine = false ;
for(i= 0 ; i < 4 ; i++){
    if(Check[i].checked)
    return true
}
alert("Please check at least one checkbox"); 
return false ; 
}