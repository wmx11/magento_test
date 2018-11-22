define([
        "jquery", "Magento_Ui/js/modal/modal"
    ], function ($, modal) {

        var modalContent = $("#modal-content");
        var sizechartButton = $("#sizechart-popup-button");

        var options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            opened: function ($Event) {
                $(".modal-footer").hide();
            }
        };

        var popup = modal(options, modalContent);

        sizechartButton.on('click', function () {
            modalContent.css('display', 'block');
            modalContent.modal("openModal");
        });
    }
);