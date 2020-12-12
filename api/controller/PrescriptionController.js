$(document).ready(function () {
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[7].classList.add('active')
});
