$(document).ready(function() {

    $('[data-presenter]').each(function() {
        var basepath = $('[data-basepath]').data('basepath');
        var itemtype = $(this).data('presenter');
        var itemid = $(this).data('id');
        // data-chun attribute specifies an element to be loaded by jQuery, see jQuery `load` function docs
        var chunk = $(this).data('chunk');
        if (typeof chunk !== typeof undefined && chunk !== false) {
            var itemid = itemid + " " + chunk;
        }
        var css = $(this).data('css');
        $(this).empty();
        $(this).load( basepath + '/ajax_fetch_presenter/' + itemtype + '/' + itemid  );
        // $(this).addClass('csch_subtle_2');
        // $(this).removeClass('csch_subtle_2 csch_dark_11');

        // hide caption if not wanted (data-caption = 0)
        $(this).find('figcaption').addClass('hidden');
        $(this).addClass(css);
    });

});