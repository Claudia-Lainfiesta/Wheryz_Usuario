<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.jpg" type="image/x-icon">
    <title>Taco Bell</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Taco Bell</h1>
    <img id="agregar-favoritos" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiM2MjNEOEYiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIiBjbGFzcz0ibHVjaWRlIGx1Y2lkZS1zdGFyIj48cG9seWdvbiBwb2ludHM9IjEyIDIgMTUuMDkgOC4yNiAyMiA5LjI3IDE3IDE0LjE0IDE4LjE4IDIxLjAyIDEyIDE3Ljc3IDUuODIgMjEuMDIgNyAxNC4xNCAyIDkuMjcgOC45MSA4LjI2IDEyIDIiLz48L3N2Zz4=" alt="">
    <script>
        $(document).ready(function () {
            $('#agregar-favoritos').on('click', function () {
                var id_usuario = 1;
                var id_colaborador = 2;
                var isFavorito = $(this).hasClass('favorito');

                $.ajax({
                    url: '../connection/favoritoss.php',
                    type: 'POST',
                    data: {
                        id_usuario: id_usuario,
                        id_colaborador: id_colaborador,
                        isFavorito: isFavorito
                    },
                    success: function (response) {
                        if (isFavorito) {
                            $('#agregar-favoritos').removeClass('favorito');
                            alert('Colaborador eliminado de favoritos.');
                        } else {
                            $('#agregar-favoritos').addClass('favorito');
                            alert('Colaborador agregado a favoritos.');
                        }
                        console.log(response);
                    },
                    error: function (error) {
                        console.error('Error en la solicitud AJAX: ', error);
                    }
                });
            });
        });
    </script>
</body>
</html>

