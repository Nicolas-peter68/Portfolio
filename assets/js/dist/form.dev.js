"use strict";

function message() {
  var envoi = document.createElement("div");
  envoi.innerText = "Votre mail a bien été envoyé";
  envoi.classList.add("alert", "alert-success");
  document.getElementById('mail-alert').appendChild(envoi);
  setTimeout(function () {
    document.getElementById('mail-alert').removeChild(envoi);
  }, 5000);
}

(function () {
  'use strict';

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation'); // Loop over them and prevent submission

    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          event.preventDefault();
          event.stopPropagation();
          var formData = new FormData(form);
          fetch('assets/php/contact.php', {
            method: "post",
            body: formData
          }).then(function (response) {
            form.reset();
            message();
          });
        }

        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})(); //menu


var liens = document.querySelectorAll(".nav-link");
var bouton = document.querySelector("button");
liens.forEach(function (lien) {
  lien.addEventListener("click", function () {
    if (window.innerWidth < 992) {
      bouton.click();
    }
  });
});