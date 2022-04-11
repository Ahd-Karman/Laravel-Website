/*
var options = document.getElementsByTagName('ul');

var x = options[0].innerHTML;

//alert(x);

*/


/*
var option = document.getElementsByClassName('option') ;
var i ;

for (i = 0 ; i < option.length ; i++ ){
    alert(option[i]);
}
*/

/* ----------------- */
/* Dashboard JS */
function hide (){
var hide = document.getElementById('userInfo') ;
var shot = document.getElementById('shot') ;

hide.style.display = "none" ;
shot.style.display = "flex";
}


function show() {
    var hide = document.getElementById('userInfo') ;
var shot = document.getElementById('shot') ;

hide.style.display = "flex" ;
shot.style.display = "none";
}

/* ---------------------- */

/* Modal */

/*
function showModal(){
    var modal = document.getElementById('modal');

    modal.style.visibility="visible";
}

*/

var modal = document.getElementById('modal');
var showBTN  = document.getElementById('show-btn') ;

showBTN.addEventListener("click" , ()=> {
    modal.style.visibility = "visible";
});