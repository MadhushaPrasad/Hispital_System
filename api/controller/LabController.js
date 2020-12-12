$(document).ready(function () {
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[5].classList.add('active');

    $('table tbody tr').click(function () {
        const labID = $($(this).children()[0]).text();
    });

    getAllLabs();
});

function addLab() {
    const nic = $('#nic').val();
    const mainTopic = $('#mainTopic').val();
    const subTopic = $('#subTopic').val();
    const values = $('#values').val();

    if (nic === "" || values === "") {
        swal("Warning!", "You can't add a Lab without filling data.!", "warning");
    } else if (mainTopic === "Choose your option" || subTopic === "Choose your option") {
        swal("Warning!", "Please Select Main and Sub Topics.!", "warning");
    } else {
        const jsonConfig = {
            url: "../../api/service/LabService.php?action=save",
            method: "POST",
            async: true,
            data: {
                patiensNIC: nic,
                mainTopic: mainTopic,
                subTopic: subTopic,
                values: values,
            }
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "New Lab Added.!", "success");
                clearFilledData();
            } else {
                swal("ERROR!", "Some thing wrong. Lab Not Added!", "error");
            }
            getAllLabs();
        }).fail(function (xhr) {
            toastr["error"](xhr);
        });
    }
}

var updateLabID = '';

function updateLab() {
    const nic = $('#nic').val();
    const mainTopic = $('#mainTopic').val();
    const subTopic = $('#subTopic').val();
    const values = $('#values').val();


    if (nic === "" || values === "") {
        swal("Warning!", "You can't add a Lab without filling data.!", "warning");
    } else if (mainTopic === "Choose your option" || subTopic === "Choose your option") {
        swal("Warning!", "Please Select Main and Sub Topics.!", "warning");
    } else {
        const jsonConfig = {
            url: "../../api/service/LabService.php?action=update",
            method: "POST",
            async: true,
            data: {
                labID: updateLabID,
                patiensNIC: nic,
                mainTopic: mainTopic,
                subTopic: subTopic,
                values: values,
            }
        };
        $.ajax(jsonConfig).done(function (res) {
            if (res === "1") {
                swal("Success!", "You clicked Lab Updated.!", "success");
                clearFilledData();
            } else {
                console.log(res);
                swal("ERROR!", "You clicked Lab Not Updated.!", "error");
            }
            getAllLabs();
        }).fail(function (xhr) {
            console.log(xhr);
            toastr["error"](xhr);
        });
    }
}

function getAllLabs() {
    $('#labBody').empty();

    var jsonConfig = {
        url: "../../api/service/LabService.php?action=getAll",
        method: "GET",
        async: true,
        dataType: "JSON"
    };
    $.ajax(jsonConfig).done(function (res) {
        for (var i in res) {
            $('#labBody').append(" <tr style='cursor: pointer'>\n" +
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

function clearFilledData() {
    setTimeout(function () {
        location.reload();
        console.log("The page will now refresh");
    }, 1500);
}

function editRow() {
    $('table tbody tr').click(function () {
        const labID = $($(this).children()[0]).text();
        updateLabID = labID;
        const patientsName = $($(this).children()[1]).text();
        const values = $($(this).children()[4]).text();

        $('#nic').val(patientsName);
        $('#values').val(values);
    });
}

function deleteRow() {
    $('table tbody tr').click(function () {
        const labID = $($(this).children()[0]).text();
        deleteLab(labID);
    });
}

function deleteLab(id) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary Data!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            const jsonConfig = {
                url: "../../api/service/LabService.php?action=delete",
                method: "GET",
                async: true,
                data: {
                    labID: id,
                }
            };
            $.ajax(jsonConfig).done(function (res) {
                if (res === "1") {
                    swal("Poof! Your imaginary Data has been deleted!", {
                        icon: "success",
                    });
                    getAllLabs();
                } else {
                    console.log(res);
                    swal("Some thing wrong Your imaginary Data is safe!");
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