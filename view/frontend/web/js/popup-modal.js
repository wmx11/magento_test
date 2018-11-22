define([
        "jquery", "Magento_Ui/js/modal/modal"
    ], function ($, modal) {

        var options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            opened: function($Event) {
                $(".modal-footer").hide();
            }
        };

        var popup = modal(options, $('#modal-content'));

        $("#sizechart-popup-button").on('click', function () {
            $("#modal-content").modal("openModal");
        });
    }
);