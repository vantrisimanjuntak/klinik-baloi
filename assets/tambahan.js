$(document).ready(function () {

    // Alert Konfirmasi Pendaftaran
    $("#btnSubmit").click(function () {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Pastikan data yang Anda inputkan sudah benar!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Submit",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                $("#submitRegistrasi").submit();
            }
        });
    });

    const alertSuccessRegistration = $(".flash-data-for-registrasi").data("flashdata");
    if (alertSuccessRegistration) {
        Swal.fire("Berhasil", "Skripsi berhasil " + alertSuccessRegistration, "success");
    }



});


