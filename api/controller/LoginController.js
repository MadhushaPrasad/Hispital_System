$('#btnRegister').click(function () {
    location.href = "views/pages/Register.php";
});

$('#btnLoginDoc').click(function () {
    location.href = "views/pages/Dashboard.php";
});


function loginCheck() {

    var formData = $("#home").serialize();

    $.ajax({
        url:''
    })
}