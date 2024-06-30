import "./bootstrap";
$(document).ready(function () {
    $("select").niceSelect();

    AOS.init({
        offset: 30, // offset (in px) from the original trigger point
        duration: 600, // values from 0 to 3000, with step 50ms
    });
});
