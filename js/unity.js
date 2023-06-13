function validateEmail() {
    const emailInput = document.getElementById('emailJo').value;
    const cekEmail = /^[a-zA-Z0-9._-]+@unsrat\.ac\.id$/;
    if (!cekEmail.test(emailInput)) {
      alert('Format yang anda masukkan salah! contoh format : "contoh@unsrat.ac.id"');
      return false;
    }
    return true;
}

const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  if (!validateEmail()) {
    event.preventDefault();
  }
});

function cekNim() {
    const nimIsi = document.getElementById('NIM').value;
    const NimValidasi = /^\d{12}$/;
    if (!NimValidasi.test(nimIsi)) {
      alert('Masukkan Nim Dengan Benar (12 Angka)');
      return false;
    }
    return true;
}
  
const formNim = document.querySelector('form');
formNim.addEventListener('submit', function(event) {
  if (!cekNim()) {
    event.preventDefault();
  }
});
