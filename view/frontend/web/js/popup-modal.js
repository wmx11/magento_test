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

        $("#sizechart-button").on('click', function () {
            popup.modal("openModal");
            $(".modal-footer").css('display', 'none')
        });
    }
);