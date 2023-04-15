function validarEdad() {
    const edad = parseInt(document.getElementById('edad').value);
    if (edad < 18) {
      alert('Lo siento, debes tener al menos 18 años para acceder');
      return false;
    }
    return true;
  }