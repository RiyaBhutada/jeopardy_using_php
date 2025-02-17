//Get modal element 
var modal1 = document.getElementById('simpleModal1');
var modal2 = document.getElementById('simpleModal2');
var modal3 = document.getElementById('simpleModal3');
var modal4 = document.getElementById('simpleModal4');
var modal5 = document.getElementById('simpleModal5');
var modal6 = document.getElementById('simpleModal6');
var modal7 = document.getElementById('simpleModal7');
var modal8 = document.getElementById('simpleModal8');
var modal9 = document.getElementById('simpleModal9');

//Get open modal button 
var option1 = document.getElementById('option1'); 
var option2 = document.getElementById('option2'); 
var option3 = document.getElementById('option3'); 
var option4 = document.getElementById('option4'); 
var option5 = document.getElementById('option5'); 
var option6 = document.getElementById('option6'); 
var option7 = document.getElementById('option7'); 
var option8 = document.getElementById('option8'); 
var option9 = document.getElementById('option9'); 

//Get close buton
var closeBtn1 = document.getElementsByClassName('closeBtn1')[0];
var closeBtn2 = document.getElementsByClassName('closeBtn2')[0];
var closeBtn3 = document.getElementsByClassName('closeBtn3')[0];
var closeBtn4 = document.getElementsByClassName('closeBtn4')[0];
var closeBtn5 = document.getElementsByClassName('closeBtn5')[0];
var closeBtn6 = document.getElementsByClassName('closeBtn6')[0];
var closeBtn7 = document.getElementsByClassName('closeBtn7')[0];
var closeBtn8 = document.getElementsByClassName('closeBtn8')[0];
var closeBtn9 = document.getElementsByClassName('closeBtn9')[0]; 

//Listener for open click
option1.addEventListener("click", function(){
    openModal(modal1);
}, false); 

option2.addEventListener("click", function(){
    openModal(modal2);
}, false); 
option3.addEventListener("click", function(){
    openModal(modal3);
}, false); 
option4.addEventListener("click", function(){
    openModal(modal4);
}, false); 
option5.addEventListener("click", function(){
    openModal(modal5);
}, false); 
option6.addEventListener("click", function(){
    openModal(modal6);
}, false); 
option7.addEventListener("click", function(){
    openModal(modal7);
}, false); 
option8.addEventListener("click", function(){
    openModal(modal8);
}, false); 
option9.addEventListener("click", function(){
    openModal(modal9);
}, false); 

//Listen for close click
closeBtn1.addEventListener("click", function(){
    closeModal(modal1);
}, false);
closeBtn2.addEventListener("click", function(){
    closeModal(modal2);
}, false);
closeBtn3.addEventListener("click", function(){
    closeModal(modal3);
}, false);
closeBtn4.addEventListener("click", function(){
    closeModal(modal4);
}, false);
closeBtn5.addEventListener("click", function(){
    closeModal(modal5);
}, false);
closeBtn6.addEventListener("click", function(){
    closeModal(modal6);
}, false);
closeBtn7.addEventListener("click", function(){
    closeModal(modal7);
}, false);
closeBtn8.addEventListener("click", function(){
    closeModal(modal8);
}, false);
closeBtn9.addEventListener("click", function(){
    closeModal(modal9);
}, false);


//function to open modal 
function openModal(modal) {
    modal.style.display = 'block'; 
}

//function to close modal 
function closeModal(modal) {
    modal.style.display = 'none'; 
}

var is_checked1 = ()=> {
    var first_checked = document.getElementById('java').checked;
    var second_checked = document.getElementById('python').checked;
    if (first_checked == false && second_checked == false) {
        //alert('Please select an option')
        document.getElementById("m1").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m1").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m1").innerHTML = "Wrong Answer :(";
        return false; 
    }   
}

var is_checked2 = ()=> {
    var first_checked = document.getElementById('facebook').checked;
    var second_checked = document.getElementById('twitter').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m2").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m2").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m2").innerHTML = "Wrong Answer :(";
        return false; 
    }   
}

var is_checked3 = ()=> {
    var first_checked = document.getElementById('one').checked;
    var second_checked = document.getElementById('two').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m3").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m3").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m3").innerHTML = "Wrong Answer :(";
        return false; 
    }
    
}

var is_checked4 = ()=> {
    var first_checked = document.getElementById('worm').checked;
    var second_checked = document.getElementById('trojan').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m4").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m4").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m4").innerHTML = "Wrong Answer :(";
        return false; 
    }
    
}

var is_checked5 = ()=> {
    var first_checked = document.getElementById('captcha').checked;
    var second_checked = document.getElementById('real').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m5").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m5").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m5").innerHTML = "Wrong Answer :(";
        return false; 
    }
    
}

var is_checked6 = ()=> {
    var first_checked = document.getElementById('Url1').checked;
    var second_checked = document.getElementById('Url2').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m6").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m6").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m6").innerHTML = "Wrong Answer :(";
        return false; 
    }    
}

var is_checked7 = ()=> {
    var first_checked = document.getElementById('ebay1').checked;
    var second_checked = document.getElementById('ebay2').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m7").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m7").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m7").innerHTML = "Wrong Answer :(";
        return false; 
    }
}

var is_checked8 = ()=> {
    var first_checked = document.getElementById('Duolingo').checked;
    var second_checked = document.getElementById('Github').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m8").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m8").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m8").innerHTML = "Wrong Answer :(";
        return false; 
    }
}

var is_checked9 = ()=> {
    var first_checked = document.getElementById('ascii').checked;
    var second_checked = document.getElementById('asci').checked;
    if (first_checked == false && second_checked == false) {
        document.getElementById("m9").innerHTML = "Please select an option";
        return false;
    }
    else if (first_checked == true) {
        document.getElementById("m9").innerHTML = "Correct!";
        return true; 
    }
    else {
        document.getElementById("m9").innerHTML = "Wrong Answer :(";
        return false; 
    }    
}

var calculate = ()=> {
    var score = 0;
    if(document.getElementById("m9").innerHTML == "Correct!"){
        score = score + 1000;
        alert("HERE");
    }
    return score;
}

option1.addEventListener("click", disableBtn1); 
function disableBtn1() {
   document.getElementById("option1").disabled = true;
}
option2.addEventListener("click", disableBtn2); 
function disableBtn2() {
   document.getElementById("option2").disabled = true;
}
option3.addEventListener("click", disableBtn3); 
function disableBtn3() {
   document.getElementById("option3").disabled = true;
}
option4.addEventListener("click", disableBtn4); 
function disableBtn4() {
   document.getElementById("option4").disabled = true;
   document.getElementById("option4").innerHTML = "Correct";
}
option5.addEventListener("click", disableBtn5); 
function disableBtn5() {
   document.getElementById("option5").disabled = true;
}
option6.addEventListener("click", disableBtn6); 
function disableBtn6() {
   document.getElementById("option6").disabled = true;
}
option7.addEventListener("click", disableBtn7); 
function disableBtn7() {
   document.getElementById("option7").disabled = true;
}
option8.addEventListener("click", disableBtn8); 
function disableBtn8() {
   document.getElementById("option8").disabled = true;
}
option9.addEventListener("click", disableBtn9); 
function disableBtn9() {
   document.getElementById("option9").disabled = true;
}

