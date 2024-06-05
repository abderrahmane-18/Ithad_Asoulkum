import "./bootstrap";
$(document).ready(function () {
    $("select").niceSelect();

    AOS.init({
        duration: 600, // values from 0 to 3000, with step 50ms
    });
});
