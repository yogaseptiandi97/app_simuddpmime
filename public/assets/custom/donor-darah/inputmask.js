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

        Inputmask({
            "mask" : "99 99 99 99 99 99 9999"
        }).mask("#nik");

        Inputmask({
            "mask" : "99-99-9999"
        }).mask("#tanggal_lahir, #tanggal_donor");

        Inputmask({
            "mask" : "999"
        }).mask("#berat_badan");

        Inputmask({
            "mask" : "999/99"
        }).mask("#tensi_darah");

        Inputmask({
            "mask" : "99,9"
        }).mask("#kadar_hb");

        Inputmask({
            "mask" : "9999 9999 9999 9"
        }).mask("#no_hp");
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