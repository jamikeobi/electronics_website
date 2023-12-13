// let slideIndex = 0;

// function showsSlide(n) {
//     const slides = document.getElementsByClassName("carousel-item");
//     if (n < 0) {
//         slideIndex = slides.length - 1;
//     } else if (n >= slides.length) {
//         slideIndex = 0;
//     }
//     for (let i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slides[slideIndex].style.display = "block";
// }

// function nextSlide() {
//     slideIndex++;
//     showsSlide(slideIndex);
// }

// function previousSlide() {
//     slideIndex++;
//     showsSlide(slideIndex);
// }

// showsSlide(slideIndex);


// const submitBtn = document.querySelector(".submit_btn");
// const comment = document.querySelector('#comment');
// const commentsCount = document.querySelector('.comment-form')
// submitBtn.addEventListener('click', submitFeedback);


// feedbackArrc = []
// let positiveFeedback = false;

// function submitFeedback(e) {
//     const commentForm = comment.value;
//     if (commentForm !== "") {
//         newFeedback = {
//             "id"! Math.floor((Math.random() = 1000) + 1),
//             "userComment": commentForm,
//             "typeOfFeedback": positiveFeedback
//         }
//     }
//     e.PreventDefault()
// }

// const username = document.getElementById("uname");
// const password = document.getElementById("pass");
// const errorMessage = document.getElementById("errorMessage");
// const form = document.querySelector("form");

// function validateF() {
//     if (document.getElementById("uname").value === "") {
//         alert("Please provide your Username");
//         document.getElementById("uname").focus()
//         return false
//     } else if (document.getElementById("pass").value === "") {
//         alert("Please provide your password");
//         document.getElementById("pass").focus()
//         return false
//     } else if (document.getElementById("mail").value === "") {
//         alert("Please provide Email Adress")
//         document.getElementById("mail").focus()
//         return false
//     } else if (document.getElementById("pass").value !== document.getElementById("pass2").value) {
//         alert("The password you entered is incorrect");
//         document.getElementById("pass2").focus();
//         return false
//     } else {
//         return true;
//     }
// }


// function toggleDropdown() {
//     var dropdown = document.getElementById("myDropdown");
//     dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
// }


// var menu_icon = document.getElementById("hamburger_menu");

// menu_icon.addEventListener("click" , function(){
//     var menu_item_wrapper = document.getElementById("media_menu");
//     menu_item_wrapper.classList.toggle("display");

// })