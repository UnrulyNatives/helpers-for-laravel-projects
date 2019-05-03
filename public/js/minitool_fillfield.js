// quick filling fields; example at URL `zdarzenia/dodaj`
jQuery(document).ready(function($){
    $('body').on('click', '[data-fillfield]', function() {
        var qffcontent = $(this).attr("data-fillfield");
        var qfftarget = $(this).attr("data-filltarget");
        $(qfftarget).text(qffcontent);
        // console.log('qff ok!' + qffcontent + ' --> '+ qfftarget);

    });
});