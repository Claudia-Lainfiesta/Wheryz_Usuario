// Memoria de estado
window.addEventListener('unload', function () {
  const currentState = getCurrentState();
  saveState(currentState);
});

// Cargar estado
document.addEventListener('DOMContentLoaded', function () {
  loadState();
});

function saveState(state) {
  localStorage.setItem('navbarState', state);
}

function loadState() {
  const state = localStorage.getItem('navbarState');
  if (state === 'minimized') {
      minimize();
  } else if (state === 'maximized') {
      maximice();
  }
}

function getCurrentState() {
  const menuWidth = document.getElementById('menu').style.width;
  return menuWidth === '54px' ? 'minimized' : 'maximized';
}

function minimize() {
  const minimize = [
      "inicio",
      "titulo",
      "configuración",
      "busqueda",
      "favoritos",
      "reservaciones",
      "colaborador",
      "cerrar-sesión",
      "ayuda",
      "minimize",
  ];

  const maximize = ["maximice"];

  for (let i = 0; i < minimize.length; i++) {
      document.getElementById(minimize[i]).setAttribute("hidden", "true");
  }

  for (let i = 0; i < maximize.length; i++) {
      document.getElementById(maximize[i]).removeAttribute("hidden");
  }

  document.getElementById("menu").style.width = "54px";
}

function maximice() {
  const maximize = [
      "inicio",
      "titulo",
      "configuración",
      "busqueda",
      "favoritos",
      "reservaciones",
      "colaborador",
      "cerrar-sesión",
      "ayuda",
      "minimize",
  ];

  const minimize = ["maximice"];

  for (let i = 0; i < maximize.length; i++) {
      document.getElementById(maximize[i]).removeAttribute("hidden");
  }

  for (let i = 0; i < minimize.length; i++) {
      document.getElementById(minimize[i]).setAttribute("hidden", "true");
  }

  document.getElementById("menu").style.width = "300px";
}


document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('loading-screen').style.display = 'none';
  loadState();
});