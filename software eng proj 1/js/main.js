let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>
{
    searchForm.classList.toggle('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>
{
    shoppingCart.classList.toggle('active');
}


let loginForm = document.querySelector('.login-form');
let forms = document.querySelector('.forms');

document.querySelector('#login-btn').onclick = () =>
{
    loginForm.classList.toggle('active');
}
document.addEventListener("DOMContentLoaded" , ()=>{
    const loginForm= document.querySelector(".login-form");
    const createAccountForm = document.querySelector(".createAccount");

   
//   document.querySelector("#linkLogin") .addEventListener("click", e =>{
//         e.preventDefault();
        
//         loginForm.classList.remove("form-hidden");
//         loginForm.classList.add("form-visible");
//         createAccountForm.classList.add("form-hidden");
//         loginForm.classList.remove("form-visible");
//   });
});
const createAccountForm = document.querySelector(".createAccount");
document.querySelector(".form_link") .addEventListener("click", e =>{
    e.preventDefault();
loginForm.classList.toggle("form-hidden");
loginForm.classList.toggle("form-visible");
createAccountForm.classList.toggle("form-visible");
createAccountForm.classList.toggle("form-hidden");
});