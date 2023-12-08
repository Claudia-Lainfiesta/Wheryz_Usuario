function realizarBusqueda() {
    var searchTerm = document.getElementById('searchInput').value;

    if (searchTerm.trim() === '') {
        return;
    }

    agregarAlHistorial(searchTerm);

}

function agregarAlHistorial(searchTerm) {

    var history = JSON.parse(sessionStorage.getItem('searchHistory')) || [];

    history.push(searchTerm);

    if (history.length > 10) {
        history.shift();
    }

    sessionStorage.setItem('searchHistory', JSON.stringify(history));

    actualizarHistorialEnPagina();
}

function actualizarHistorialEnPagina() {
    var historyList = document.getElementById('historyList');
    var history = JSON.parse(sessionStorage.getItem('searchHistory')) || [];

    historyList.innerHTML = '';

    history.forEach(function (term) {
        var listItem = document.createElement('p');
        listItem.textContent = term;
        historyList.appendChild(listItem);
    });
}

window.onload = function () {
    actualizarHistorialEnPagina();
};