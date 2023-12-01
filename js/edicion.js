    document.addEventListener("DOMContentLoaded", function() {
      // Obtén todas las etiquetas <a> que contienen las imágenes de edición
      var editLinks = document.querySelectorAll("a.edit-link");

      // Agrega un evento clic a cada enlace de edición
      editLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
          event.preventDefault(); // Evita que el enlace se comporte como un enlace normal

          // Habilita la edición del campo asociado al enlace
          var inputField = link.parentNode.querySelector("input");
          inputField.removeAttribute("disabled");
        });
      });
    });