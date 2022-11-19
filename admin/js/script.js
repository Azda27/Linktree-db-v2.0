const
    pwShowHide = document.querySelectorAll(".show-hide"),
    pwFields = document.querySelectorAll(".password");
//     //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";
                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("bxs-hide", "bxs-show");
                    })
                }else{
                    pwField.type = "password";
                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("bxs-show", "bxs-hide");
                    })
                }
            }) 
        })
    })



//     const eyeIcons = document.querySelectorAll(".show-hide");

// eyeIcons.forEach((eyeIcon) => {
//     eyeIcon.addEventListener("click", () => {
//     const pInput = eyeIcon.parentElement.querySelector("input"); //getting parent element of eye icon and selecting the password input
//     if (pInput.type === "password") {
//         eyeIcon.classList.replace("bxs-hide", "bxs-show");
//         return (pInput.type = "text");
//     }
//     eyeIcon.classList.replace("bxs-show", "bxs-hide");
//     pInput.type = "password";
//     });
// });