


document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#loginID");
    const newAccountForm = document.querySelector("#new_AccountID");

    document.querySelector("#linkNewAccount").addEventListener("click", e =>{
        e.preventDefault();
        loginForm.classList.add("form_hidden");
        newAccountForm.classList.remove("form_hidden");
    }); 
    document.querySelector("#linkLogin").addEventListener("click", e =>{
        e.preventDefault();
        loginForm.classList.remove("form_hidden");
        newAccountForm.classList.add("form_hidden");
    }); 

    
});