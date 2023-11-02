// Ambil harga dari kode barang
function updateHarga(select) {
  var harga = parseFloat(
    select.options[select.selectedIndex].getAttribute("data-harga")
  );
  document.getElementById("harga").value = harga;
}

function updateTotal() {
  var jumlah = parseFloat(document.getElementById("jumlah").value);
  var harga = parseFloat(document.getElementById("harga").value);
  var total = jumlah * harga;
  document.getElementById("total").value = total;
}

function refreshTable() {
  location.reload();
}
