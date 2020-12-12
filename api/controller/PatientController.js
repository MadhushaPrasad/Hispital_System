$(document).ready(function () {
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[3].classList.add('active')
});
