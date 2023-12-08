function open_change_image() {
    document.getElementById("desplegar-cambiar-foto").removeAttribute("hidden");
  }
  function close_change_image() {
    document.getElementById("desplegar-cambiar-foto").setAttribute("hidden", "true");
  }
  function updateProfilePicture() {
    var input = document.getElementById("images");
    var file = input.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function(e) {
        document.getElementById("profile-picture").src = e.target.result;
        close_change_image();
      };
      reader.readAsDataURL(file);
    }
  }
