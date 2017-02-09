(function ($) {


    Drupal.behaviors.mls_search = {
        attach: function (context, settings) {

            // STATE SELECT START
            $('.mlsClick', context).click(function () {
                $this = $(this);
                var searchString = $this.data("search-string");

                $.ajax({
                    type: 'POST',
                    url: 'ajax/mls_search/' + searchString,
                    dataType: 'json',
                    success: function (data) {
                        $('.mlsSearchResults').html(data);
                    }
                });
            });
        }
    }
})(jQuery);


//
//// STATE SELECT END
//
//// CLIENT SELECT START
//$('.projects-container', context).on('click', '.client-item', function () {
//    $this = $(this);
//    var clientID = $this.data("client-id");
//    var stateID = $this.data('state-id');
//    $.ajax({
//        url: '/ajax/project/client/' + clientID + '?stateID=' + stateID,
//        success: function (data) {
//            $('#related-project').fadeOut(600, function () {
//                $('#related-project').hide().html(data).fadeIn(600);
//            });
//        }
//    })
//})
//// CLIENT SELECT END
//
//// PROJECT SELECT START
//$('.projects-container', context).once('project-item', function () {
//    $(this).on('click', '.project-item', function () {
//        var nodeID = $(this).data("project-id");
//        $.ajax({
//            url: '/ajax/project/project/' + nodeID,
//            success: function (data) {
//                $('#project-project').fadeOut(600, function () {
//                    $('#project-project').hide().html(data).fadeIn(1000).css('z-index', '6');
//                    Drupal.attachBehaviors($('#project-project'), Drupal.settings);
//                });
//            }
//        })
//    })
//});
//// PROJECT SELECT END

