//FOR THE MAIN NAV - COLLAPSIBLE LISTS 
$('.nav-toggle i').click(function(e) {
    e.preventDefault();
    $(this).parent('a').next().toggleClass('display-none');
    $(this).parent('a').find('i').toggleClass('display-none');
});
//COLLAPSE OR EXPAND THE MAIN NAV BAR
$('.collapse-toggle').click(function(e) {
    e.preventDefault();
    $('nav').toggleClass('collapsing-nav-ani');
    $('.main').toggleClass('main-menu-collapsed');
    $(this).find('i').toggleClass('display-none');
});

// this script removes error styling on click or focus
$('.error input').on('click focus', function() {
    if ($(this).is('input[type="text"]')) {
        $(this).parent('.error').removeClass('error');
    }
    if ($(this).is('input[type="radio"]')) {
        $(this).parent('div').parent('.error').removeClass('error');
    }
});

//select everything inside the output textboxes on focus
$('#txtHtmlOutputHeader, #txtHtmlOutput, #txtAbbreviatedRules, #stagingPreviewLink').focus(function() {
    $(this).select();
    //Chrome Work Around
    $(this).mouseup(function(e) {
    // Prevent further mouseup intervention
        e.preventDefault();
        return false;
    });
});