"use strict";

// Class definition
var InputMask = function() {
    // Private functions
    var initInputMask = function() {
        Inputmask.extendDefaults({
            autoUnmask: true,
            showMaskOnHover: false,
            showMaskOnFocus: false,
        });

        Inputmask.extendDefinitions({
            'A': {
                validator: "[A-Za-z\u0410-\u044F\u0401\u0451\u00C0-\u00FF\u00B5]",
                casing: "upper" //auto uppercasing
            },
            '+': {
                validator: "[0-9A-Za-z\u0410-\u044F\u0401\u0451\u00C0-\u00FF\u00B5]",
                casing: "upper"
            }
        });
    }

    return {
        // Public Functions
        init: function(element) {
            initInputMask();
        }
    };
}();

// On document ready
KTUtil.onDOMContentLoaded(function() {
    InputMask.init();
});