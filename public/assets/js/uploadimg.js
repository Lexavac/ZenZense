
var modalRec = document.getElementById("myProfile");

// Get the button that opens the modal
var btnRec = document.getElementById("btn-prof");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close-prof")[0];

// When the user clicks the button, open the modal 
btnRec.onclick = function () {
  modalRec.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modalRec.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modalRec) {
    modalRec.style.display = "none";
  }
}

