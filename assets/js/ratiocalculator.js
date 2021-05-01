(function ($) {
    'use strict';

    $(document).ready(function () {

        $(".numinput").keyup(function () {
            console.log("change");
            var base = $("#basevalue").val();
            var other = $("#othervalue").val();
            var wanted = $("#wantedvalue").val();

            var answer = wanted * other / base;

            $("#answer").val(answer);
            console.log("change");
        });

    });

})(jQuery);


