// background color changing function
let bgcolr = document.getElementById("bgcolr");
bgcolr.addEventListener("input", function () {
    document.body.style.backgroundColor = this.value;

});




// Capture function

function capture(length){
    let result='';
    const cha='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const chalen=cha.length;
    let counter=0;
    while(counter<length){
        result=result+cha.charAt(Math.floor(Math.random()*chalen));
        counter=counter+1;
    };
    return result;
}
let cap=capture(5);
console.log(cap);
let captext=document.getElementById('captext');
captext.innerHTML=cap;

//input validation

let capture_input = document.getElementById('capinput');


// capture validation


function confirm(){
    if(capture()==capture_input.value){
        alert("udit Dhiman")
    }
    else{
        alert("try again")
    }
}
