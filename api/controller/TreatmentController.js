$(document).ready(function () {
    var slideMenueList = $('.sidebar ul li');

    slideMenueList.children()[0].attributes[2].nodeValue = '';

    slideMenueList.children()[6].classList.add('active')
});
