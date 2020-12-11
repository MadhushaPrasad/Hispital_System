$(window).ready(function () {
    getAllClinic();
    document.getElementById("OpeningDate").min = new Date().getFullYear() + "-" +
        parseInt(new Date().getMonth() + 1) + "-" + new Date().getDate();
    document.getElementById("closingDate").min = new Date().getFullYear() + "-" +
        parseInt(new Date().getMonth() + 1) + "-" + new Date().getDate();

    $('table tbody tr').click(function () {
        var clinicID = $($(this).children()[0]).text();
        console.log(clinicID);
    });
});

function addClinic() {
    const clinicName = $('#clinicName').val();
    const location = $('#clinicLocation').val();
    const OpeningDate = $('#OpeningDate').val();
    const ClosingDate = $('#closingDate').val();
    const openingTime = $('#openingTime').val();
    const closeTime = $('#closingTime').val();
    const status = $('#status').val();

    if (clinicName === "" || location === "" || OpeningDate === "" || ClosingDate === "" || openingTime === "" ||
        closeTime === "") {
        swal("Warning!", "You can't add a clinic without filling data.!", "warning");
    } else if (status === "Status") {
        swal("Warning!", "Please Select the clinic current status.!", "warning");
    } else {
        const jsonConfig = {
            url: "../../api/service/ClinicService.php?action=save",
            method: "POST",
            async: true,
            data: {
                clinicName: clinicName,
                location: location,
                OpeningDate: OpeningDate,
                ClosingDate: ClosingDate,
                openingTime: openingTime,
                closeTime: closeTime,
                status: status
            }
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "New Clinic Added.!", "success");
                clearFilledData();
            } else {
                swal("ERROR!", "Some thing wrong. Clinic Not Added!", "error");
            }
            getAllClinic();
        }).fail(function (xhr) {
            toastr["error"](xhr);
        });
    }
}

var updateClinicId = '';

function updateClinic() {
    console.log(updateClinicId);
    const clinicName = $('#clinicName').val();
    const location = $('#clinicLocation').val();
    const OpeningDate = $('#OpeningDate').val();
    const ClosingDate = $('#closingDate').val();
    const openingTime = $('#openingTime').val();
    const closeTime = $('#closingTime').val();
    const status = $('#status').val();

    if (clinicName === "" || location === "" || OpeningDate === "" || ClosingDate === "" || openingTime === "" ||
        closeTime === "") {
        swal("Warning!", "You can't add a clinic without filling data.!", "warning");
    } else if (status === "Status") {
        swal("Warning!", "Please Select the clinic current status.!", "warning");
    } else {
        const jsonConfig = {
            url: "../../api/service/ClinicService.php?action=update",
            method: "POST",
            async: true,
            data: {
                clinicID: updateClinicId,
                clinicName: clinicName,
                location: location,
                OpeningDate: OpeningDate,
                ClosingDate: ClosingDate,
                openingTime: openingTime,
                closeTime: closeTime,
                status: status
            }
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "You clicked Clinic Updated.!", "success");
                clearFilledData();
            } else {
                console.log(res);
                swal("ERROR!", "You clicked Clinic Not Updated.!", "error");
            }
        }).fail(function (xhr) {
            toastr["error"](xhr);
        });
    }
}

function getAllClinic() {
    $('#clinicBody').empty();

    var jsonConfig = {
        url: "../../api/service/ClinicService.php?action=getAll",
        method: "GET",
        async: true,
        dataType: "JSON"
    };
    $.ajax(jsonConfig).done(function (res) {
        for (var i in res) {
            $('#clinicBody').append(" <tr style='cursor: pointer'>\n" +
                "                            <td>" + res[i][0] + "</td>\n" +
                "                            <td>" + res[i][1] + "</td>\n" +
                "                            <td>" + res[i][2] + "</td>\n" +
                "                            <td>" + res[i][3] + "</td>\n" +
                "                            <td>" + res[i][4] + "</td>\n" +
                "                            <td>" + res[i][5] + "</td>\n" +
                "                            <td>" + res[i][6] + "</td>\n" +
                "                            <td>" + res[i][7] + "</td>\n" +
                "                            <td><i class='fas fa-edit' onclick='editRow()'></i>&nbsp;&nbsp;&nbsp;" +
                "                            <i class='fas fa-trash-alt' onclick='deleteRow()'></i></td>\n" +
                "                        </tr>");
        }
    }).fail(function (xhr) {
        toastr["error"](xhr);
    });
}

function clearFilledData() {
    setTimeout(function () {
        location.reload();
        console.log("The page will now refresh");
    }, 5000);
}

function editRow() {
    $('table tbody tr').click(function () {
        const clinicID = $($(this).children()[0]).text();
        updateClinicId = clinicID;
        const clinicName = $($(this).children()[1]).text();
        const location = $($(this).children()[2]).text();
        const OpeningDate = $($(this).children()[3]).text();
        const ClosingDate = $($(this).children()[4]).text();
        const openingTime = $($(this).children()[5]).text();
        const closeTime = $($(this).children()[6]).text();
        const status = $($(this).children()[7]).text();

        $('#clinicName').val(clinicName);
        $('#clinicLocation').val(location);
        $('#OpeningDate').val(OpeningDate);
        $('#closingDate').val(ClosingDate);
        $('#openingTime').val(openingTime);
        $('#closingTime').val(closeTime);
    });
}

function deleteRow() {
    $('table tbody tr').click(function () {
        const clinicID = $($(this).children()[0]).text();
        deleteClinic(clinicID);
    });
}

function deleteClinic(id) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary Data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            const jsonConfig = {
                url: "../../api/service/ClinicService.php?action=delete",
                method: "GET",
                async: true,
                data: {
                    clinicID: id,
                }
            };
            $.ajax(jsonConfig).done(function (res) {
                if (res === "1") {
                    swal("Poof! Your imaginary Data has been deleted!", {
                        icon: "success",
                    });
                    clearFilledData();
                    getAllClinic();
                } else {
                    console.log(res);
                    swal("Some thing wrong Your imaginary file is safe!");
                    toastr["error"]("");
                }
            }).fail(function (xhr) {
                swal(xhr);
            });

        } else {
            swal("Your imaginary Data is safe!");
        }
    });

    // console.log(id);
    // const jsonConfig = {
    //     url: "../../api/service/ClinicService.php?action=delete",
    //     method: "GET",
    //     async: true,
    //     data: {
    //         clinicID: id,
    //     }
    // };
    // $.ajax(jsonConfig).done(function (res) {
    //     if (res === "1") {
    //         toastr["warning"]('Deleted.');
    //         clearFilledData();
    //         getAllClinic();
    //     } else {
    //         console.log(res);
    //         toastr["error"]("Some thing wrong");
    //     }
    // }).fail(function (xhr) {
    //     toastr["error"](xhr);
    // });
}

