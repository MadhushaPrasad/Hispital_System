$('#btnLogin').click(function () {
    location.href = "../../index.php";
});
$('#btnRegister').click(function () {
    location.href = "../../index.php";
});

function addAdmin() {
    console.log("Hello");
    const formData = $('#adminForm').serialize();
    const jsonConfig = {
        url: "api/services/RegisterService.php?action=saveAdmin",
        method: "POST",
        async: true,
        dataType: 'JSON',
        data: formData
    };
    $.ajax(jsonConfig).done(function (res) {
        console.log(res);
    }).fail(function (xhr) {
        console.log(xhr);
    });
}

function addDoctor() {
    console.log("Doc");
    const formData = $('#doctorForm').serialize();
    var jsonConfig = {
        url: "api/services/RegisterService.php?action=saveDoctor",
        method: "POST",
        async: true,
        dataType: 'JSON',
        data: formData
    };
    $.ajax(jsonConfig).done(function (res) {
        console.log(res);
    }).fail(function (xhr) {
        console.log(xhr);
    });
}

function addReception() {
    console.log("Rece");
    const formData = $('#receptionForm').serialize();
    var jsonConfig = {
        url: "api/services/RegisterService.php?action=saveReception",
        method: "POST",
        async: true,
        dataType: 'JSON',
        data: formData
    };
    $.ajax(jsonConfig).done(function (res) {
        console.log(res);
    }).fail(function (xhr) {
        console.log(xhr);
    });
}