    document.addEventListener("DOMContentLoaded", function() {

      var editLinks = document.querySelectorAll("a.edit-link");

      editLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
          event.preventDefault();

          var inputField = link.parentNode.querySelector("input");
          inputField.removeAttribute("disabled");
        });
      });
    });