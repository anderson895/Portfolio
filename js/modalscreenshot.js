var modal = document.getElementById("myModal");
var img = document.getElementsByTagName("img");
var modalImg = document.getElementById("modal-img");
var i;

for (i = 0; i < img.length; i++) {
  img[i].addEventListener("click", function() {
    modal.style.display = "block";
    modalImg.src = this.src;
  });
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
  modal.style.display = "none";
}