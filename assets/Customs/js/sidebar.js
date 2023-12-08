$(document).ready(function () {
    // Toggle the side navigation
    $('#sidebarToggle').on('click', function (event) {
        event.preventDefault();
        $('body').toggleClass('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', $('body').hasClass('sb-sidenav-toggled'));
    });


    $(".nav-link").on('click', function () {
        // Toggle the class 'collapsed' on the link
        $(this).toggleClass("collapsed");
        // Toggle the icon based on the class
        if ($(this).hasClass("collapsed")) {
            $(".fa-chevron-down", this).removeClass("fa-chevron-down").addClass("fa-chevron-up");
        } else {
            $(".fa-chevron-up", this).removeClass("fa-chevron-up").addClass("fa-chevron-down");
        }
    });
});