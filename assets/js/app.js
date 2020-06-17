/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

require('bootstrap');
require('fontawesome');
require('../css/sensiotv-theme.scss');

$('#collapsingLeftSideBar').click(function() {
    let leftSideBar = $('#sidebar');
    leftSideBar.css('margin-left') === '-250px' ? leftSideBar.css({"margin-left": '0'}) : leftSideBar.css({"margin-left": '-250px'});
});
