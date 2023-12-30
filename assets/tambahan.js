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
        Swal.fire("Berhasil", "Pendaftaran " + alertSuccessRegistration, "success");
    }

    // Pendaftar

    // Alert Validasi Pendaftar

    $(".btn-konfirmasi").click(function () {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Melakukan konfirmasi user",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Konfirmasi",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                $("#submitRegistrasi").submit();
            }
        });
    });
    // End Alert Validasi Pendaftar

    // Alert Hapus Pendaftar
    $(".btn-hapus").click(function () {

        var base_url = window.location.origin + '/projectdika/admin/pendaftar/deletePendaftar/';
        var id = $(this).attr('id');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Hapus data user",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                window.location = base_url + id
            }
        });
    });
    // End Alert Hapus Pendaftar

});


