//Get the button
let mybutton = document.getElementById("btn-back-to-top");

//عندما يقوم المستخدم بالتمرير لأسفل 20 بكسل من أعلى المستند، قم بإظهار الزر
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// عندما ينقر المستخدم على الزر، قم بالتمرير إلى أعلى المستند
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}