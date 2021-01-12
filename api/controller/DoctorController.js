$(document).ready(function () {
    getAllClinic();
    getAllDoctors();
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[2].classList.add('active')
});


function getAllDoctors() {
    $('#doctorBody').empty();

    var jsonConfig = {
        url: "../../api/service/DoctorService.php?action=getAllDoctor",
        method: "GET",
        async: true,
        dataType: "JSON"
    };
    $.ajax(jsonConfig).done(function (res) {
        for (var i in res) {
            $('#doctorBody').append(" <tr style='cursor: pointer'>\n" +
                "                            <td>" + res[i][0] + "</td>\n" +
                "                            <td>" + res[i][1] + "</td>\n" +
                "                            <td>" + res[i][2] + "</td>\n" +
                "                            <td>" + res[i][3] + "</td>\n" +
                "                            <td>" + res[i][4] + "</td>\n" +
                "                            <td><i class='fas fa-edit' onclick='editRow()'></i>&nbsp;&nbsp;&nbsp;" +
                "                            <i class='fas fa-trash-alt' onclick='deleteRow()'></i></td>\n" +
                "                        </tr>");
        }
    }).fail(function (xhr) {
        toastr["error"](xhr);
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
        console.log("Clinic " + res);
        for (const i in res) {
            clinicList.append("<option value=" + res[i][0] + ">" + res[i][1] + "</option>");
        }
    }).fail(function (xhr) {
        toastr["error"](xhr);
    });
}
