
var click1=document.querySelector(".click")
var click2=document.querySelector(".click2")
var login=document.querySelector(".login-box")
var sign=document.querySelector(".sign-box")
var email_check=document.querySelector("#email")
var login_button=document.querySelector(".login-button")
var check_write=email_check.value;
var check_pass_match=document.querySelector("#password2").value;
var check_email_match=document.querySelector("#email2").value;


function pr() {


if(document.querySelector("#email").value=="" || (!document.querySelector("#email").value.includes("@gmail.com")) ){
  alert("Please enter valid email !")
  

}

let valuess=document.querySelector("#password").value;

if(valuess=="" || valuess.length<4 || (valuess.search(/[0-9]/)==-1) || (valuess.search(/[a-z]/)==-1) || (valuess.search(/[A-Z]/)==-1) || (valuess.search(/[\!\@\#\$\%\^\&\*\<\>]/)==-1)){
alert("Please enter valid password !")


}

else{

let aa=document.querySelector("#aa");
aa.href="home.html";

}

}







function fr(){




if(document.querySelector("#email2").value=="" || (!document.querySelector("#email2").value.includes("@gmail.com")) ){
  alert("Please enter valid email !")
}



let valuess=document.querySelector("#password2").value;

if(valuess=="" || valuess.length<4 || (valuess.search(/[0-9]/)==-1) || (valuess.search(/[a-z]/)==-1) || (valuess.search(/[A-Z]/)==-1) || (valuess.search(/[\!\@\#\$\%\^\&\*\<\>]/)==-1)){

  alert("Please enter valid password !")




}

else{

sign.classList.add("hide")
login.classList.remove("hide")
  


}


}



click1.addEventListener("click",()=>{

login.classList.add("hide")
sign.classList.remove("hide")
console.log("hello")


})

click2.addEventListener("click",()=>{

    sign.classList.add("hide")
    login.classList.remove("hide")
    
    
})










