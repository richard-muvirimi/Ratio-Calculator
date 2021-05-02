(function ($) {
    'use strict';

    $(document).ready(function () {

        $(".numinput").keyup(function () {
            console.log("change");
            let base = $("#basevalue").val();
            let other = $("#othervalue").val();
            let wanted = $("#wantedvalue").val();

            let answer = wanted * other / base;

            $("#answer").val(answer);
            console.log(answer);
        });

    });

})(jQuery);


