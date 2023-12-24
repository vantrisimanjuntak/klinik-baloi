// submit Skripsi
$("#btnSubmit").click(function () {
    Swal.fire({
        title: "Apakah anda yakin?",
        text: "Skripsi yang sudah di input tidak bisa diubah!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Submit",
        cancelButtonText: "Batal",
    }).then((result) => {
        if (result.value) {
            $("#submitSkripsi").submit();
        }
    });
});
