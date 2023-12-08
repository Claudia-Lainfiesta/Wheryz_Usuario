function marcarFavorito(element) {
    const tiendaId = element.getAttribute('data-id');

    fetch('favoritos.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        tiendaId: tiendaId,
      }),
    })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        if (data.isFavorito) {
          element.classList.add('favorito');
        } else {
          element.classList.remove('favorito');
        }
      } else {
        console.error('Error al actualizar el estado de favorito.');
      }
    })
    .catch(error => {
      console.error('Error de red:', error);
    });
  }