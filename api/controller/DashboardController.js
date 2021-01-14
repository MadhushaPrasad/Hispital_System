$(document).ready(function () {
    getAllAppointment();
    getAllDoctors();
    getAllOutofStockmedic();
});



function getAllAppointment() {
    for (var i = 1; i <= 10; i++) {
        $('#appointmentBody').append(" <tr>\n" +
            "                            <th scope=\"row\">" + i + "</th>\n" +
            "                            <td>Madhusha</td>\n" +
            "                            <td>OPD</td>\n" +
            "                            <td>Prasad</td>\n" +
            "                            <td>12/5/2020</td>\n" +
            "                            <td>12.25.P.M</td>\n" +
            "                        </tr>");
    }
}


function getAllOutofStockmedic() {
    for (var i = 1; i <= 10; i++) {
        $('#outOfStock').append(" <tr>\n" +
            "                            <th scope=\"row\">" + i + "</th>\n" +
            "                            <td>Penadol</td>\n" +
            "                            <td>Penadol</td>\n" +
            "                            <td>10g</td>\n" +
            "                            <td>12/5/2020</td>\n" +
            "                            <td>12.25.P.M</td>\n" +
            "                        </tr>");
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
                "                            <td>" + res[i][2] + res[i][3] + "</td>\n" +
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