var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0]; 
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// buy ticket

// Get elements
const buyTicketButton = document.getElementById("buyTicketButton");
const movieModal = document.getElementById("movieModal");
const closeButton = document.querySelector(".close");

// Function to open the modal
buyTicketButton.onclick = function() {
    movieModal.style.display = "flex";
}

// Function to close the modal
closeButton.onclick = function() {
    movieModal.style.display = "none";
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    if (event.target === movieModal) {
        movieModal.style.display = "none";
    }
}
