$(document).ready(function() {
  $('#dataTable').DataTable({
    paging: false,        // Hilangkan pagination
    searching: false,     // (Opsional) Hilangkan kolom search
    info: false,          // (Opsional) Hilangkan teks "Showing 1 to 10 of ..."
    ordering: false       // (Opsional) Hilangkan fitur sort agar tabel rapi saat print
  });
});
