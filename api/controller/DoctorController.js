$(document).ready(function () {
    getAllClinic();
    getAllDoctors();
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[2].classList.add('active')
});

function addDoctor() {

    const firstName = $('#firstName').val();
    const lastName = $('#lastName').val();
    const address = $('#address').val();
    const mobileNumber = $('#mobileNumber').val();
    const consultancyCharge = $('#consultancyCharge').val();
    const education = $('#education').val();
    const clinicName = $('#clinicName').val();
    const dob = $('#dob').val();
    const status = $('#status').val();

    if (firstName === "" || lastName === "" || address === "" || mobileNumber === "" || consultancyCharge === "" ||
    education === "", dob === "") {
        swal("Warning!", "You can't add a Doctor without filling data.!", "warning");
    } else if (clinicName === "Clinic") {
        swal("Warning!", "Please Select the current Clinic.!", "warning");
    } else if (status === "Status") {
        swal("Warning!", "Please Select the Doctor current status.!", "warning");
    } else {
        var jsonConfig = {
            url: "../../api/service/DoctorService.php?action=saveDoc",
            method: "POST",
            async: true,
            data: {
                firstName: firstName,
                lastName: lastName,
                address: address,
                mobileNumber: mobileNumber,
                consultancyCharge: consultancyCharge,
                education: education,
                clinicName: clinicName,
                dob: dob,
                status: status
            }
        };

        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "New Doctor Added.!", "success");
                clearFilledData();
            } else {
                swal("ERROR!", "Some thing wrong. Doctor Not Added!", "error");
            }
            clearFilledData()
        }).fail(function (xhr) {
            console.log(xhr);
        });
    }
}

var updateDoctorId = '';

function updateDoctor() {
    console.log(updateDoctorId);
    const firstName = $('#firstName').val();
    const lastName = $('#lastName').val();
    const address = $('#address').val();
    const mobileNumber = $('#mobileNumber').val();
    const consultancyCharge = $('#consultancyCharge').val();
    const education = $('#education').val();
    const clinicName = $('#clinicName').val();
    const dob = $('#dob').val();
    const status = $('#status').val();

    if (firstName === "" || lastName === "" || address === "" || mobileNumber === "" || consultancyCharge === "" ||
    education === "", dob === "") {
        swal("Warning!", "You can't Update a Doctor without filling data.!", "warning");
    } else if (clinicName === "Clinic") {
        swal("Warning!", "Please Select the current Clinic.!", "warning");
    } else if (status === "Status") {
        swal("Warning!", "Please Select the Doctor current status.!", "warning");
    } else {
        var jsonConfig = {
            url: "../../api/service/DoctorService.php?action=update",
            method: "POST",
            async: true,
            data: {
                doctorID: updateDoctorId,
                firstName: firstName,
                lastName: lastName,
                address: address,
                mobileNumber: mobileNumber,
                consultancyCharge: consultancyCharge,
                education: education,
                clinicName: clinicName,
                dob: dob,
                status: status
            }
        };

        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "Doctor Updated.!", "success");
                clearFilledData();
            } else {
                swal("ERROR!", "Some thing wrong. Doctor Not Updated!", "error");
            }
            clearFilledData();
            // console.log(res)
        }).fail(function (xhr) {
            console.log(xhr);
        });
    }
}

function deleteRow() {
    $('table tbody tr').click(function () {
        const docId = $($(this).children()[0]).text();
        deleteDoctor(docId);
    });
}

function deleteDoctor(docId) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary Data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            const jsonConfig = {
                url: "../../api/service/DoctorService.php?action=deleteDoc",
                method: "GET",
                async: true,
                data: {
                    docID: docId,
                }
            };
            $.ajax(jsonConfig).done(function (res) {
                if (res === "1") {
                    swal("Poof! Your imaginary Data has been deleted!", {
                        icon: "success",
                    });
                    clearFilledData();
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
}

function searchDoctor() {
    $('#doctorBody').empty();

    const mobileNumber = $('#mobileNumber').val();

    if (updateDoctorId !== "") {
        const jsonConfig = {
            url: "../../api/service/DoctorService.php?action=search",
            method: "GET",
            async: true,
            data: {
                docID: updateDoctorId
            },
            dataType: "JSON"
        };

        $.ajax(jsonConfig).done(function (res) {

            $('#doctorBody').append(" <tr style='cursor: pointer'>\n" +
                "                            <td id='docID'>" + res.doctor_id + "</td>\n" +
                "                            <td>" + res.firstName + " " + res.lastName + "</td>\n" +
                "                            <td>" + res.mNumber + "</td>\n" +
                "                            <td>" + res.address + "</td>\n" +
                "                            <td>" + res.conCharge + "</td>\n" +
                "                            <td>" + res.education + "</td>\n" +
                "                            <td>" + res.dob + "</td>\n" +
                "                            <td>" + res.status + "</td>\n" +
                "                            <td><i class='fas fa-edit' onclick='editRow()'></i>&nbsp;&nbsp;&nbsp; <i\n" +
                "                                        class='fas fa-trash-alt' onclick='deleteRow()'></i></td>\n" +
                "                        </tr>");
            const id = document.getElementById('docID');
            id.id = id.id + res.doctor_id;
            searchClinic(res.clinic_id, res.doctor_id);

        }).fail(function (xhr) {
            console.log(xhr);
        });
    } else if (mobileNumber !== "") {
        const jsonConfig = {
            url: "../../api/service/DoctorService.php?action=searchByMNumber",
            method: "GET",
            async: true,
            data: {
                mobileNumber: mobileNumber
            },
            dataType: "JSON"
        };

        $.ajax(jsonConfig).done(function (res) {
            console.log(res);
            $('#doctorBody').append(" <tr style='cursor: pointer'>\n" +
                "                            <td id='docID'>" + res.doctor_id + "</td>\n" +
                "                            <td>" + res.firstName + " " + res.lastName + "</td>\n" +
                "                            <td>" + res.mNumber + "</td>\n" +
                "                            <td>" + res.address + "</td>\n" +
                "                            <td>" + res.conCharge + "</td>\n" +
                "                            <td>" + res.education + "</td>\n" +
                "                            <td>" + res.dob + "</td>\n" +
                "                            <td>" + res.status + "</td>\n" +
                "                            <td><i class='fas fa-edit' onclick='editRow()'></i>&nbsp;&nbsp;&nbsp; <i\n" +
                "                                        class='fas fa-trash-alt' onclick='deleteRow()'></i></td>\n" +
                "                        </tr>");
            const id = document.getElementById('docID');
            id.id = id.id + res.doctor_id;
            searchClinic(res.clinic_id, res.doctor_id);

        }).fail(function (xhr) {
            console.log(xhr);
        });

    } else {
        swal("Warning!", "Please Input Doctor's Mobile Number to Search.!", "warning");
        getAllDoctors();
    }

}


function getAllDoctors() {
    $('#doctorBody').empty();

    var jsonConfig = {
        url: "../../api/service/DoctorService.php?action=getAllDoctor",
        method: "GET",
        async: true,
        dataType: "JSON"
    };
    $.ajax(jsonConfig).done(function (res) {
        console.log(res);
        for (var i in res) {
            $('#doctorBody').append(" <tr style='cursor: pointer'>\n" +
                "                            <td id='docID'>" + res[i][0] + "</td>\n" +
                "                            <td>" + res[i][2] + " " + res[i][3] + "</td>\n" +
                "                            <td>" + res[i][5] + "</td>\n" +
                "                            <td>" + res[i][4] + "</td>\n" +
                "                            <td>" + res[i][6] + "</td>\n" +
                "                            <td>" + res[i][7] + "</td>\n" +
                "                            <td>" + res[i][8] + "</td>\n" +
                "                            <td>" + res[i][9] + "</td>\n" +
                "                            <td><i class='fas fa-edit' onclick='editRow()'></i>&nbsp;&nbsp;&nbsp; <i\n" +
                "                                        class='fas fa-trash-alt' onclick='deleteRow()'></i></td>\n" +
                "                        </tr>");
            var id = document.getElementById('docID');
            id.id = id.id + res[i][0];
            searchClinic(res[i][1], res[i][0]);
        }
    }).fail(function (xhr) {
        toastr["error"](xhr);
    });
}

function editRow() {
    $('table tbody tr').click(function () {
        const docID = $($(this).children()[0]).text();
        updateDoctorId = docID;
        const clinicName = $($(this).children()[1]).text();
        const firstName = $($(this).children()[2]).text().split(" ")[0];
        const lastName = $($(this).children()[2]).text().split(" ")[1];
        const mobileNumber = $($(this).children()[3]).text();
        const address = $($(this).children()[4]).text();
        const charge = $($(this).children()[5]).text();
        const education = $($(this).children()[6]).text();
        const dob = $($(this).children()[7]).text();
        // const status = $($(this).children()[8]).text();

        $('#firstName').val(firstName);
        $('#lastName').val(lastName);
        $('#address').val(address);
        $('#mobileNumber').val(mobileNumber);
        $('#consultancyCharge').val(charge);
        $('#education').val(education);
        $('#dob').val(dob);

    });
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
        const clinicList = $('#clinicName');
        for (const i in res) {
            clinicList.append("<option value=" + res[i][0] + ">" + res[i][1] + "</option>");
        }
    }).fail(function (xhr) {
        toastr["error"](xhr);
    });
}

function searchClinic(clinicID, docID) {

    var jsonConfig = {
        url: "../../api/service/ClinicService.php?action=search",
        method: "GET",
        async: true,
        data: {
            clinicID: clinicID
        },
        dataType: "JSON"
    };

    $.ajax(jsonConfig).done(function (res) {
        $('<td>' + res.clinic_name + '</td>').insertAfter('#docID' + docID);
    }).fail(function (xhr) {
        console.log(xhr);
    });
}

function clearFilledData() {
    setTimeout(function () {
        location.reload();
        console.log("The page will now refresh");
    }, 1500);
}
