$(document).ready(function () {

    kiir("");


    function kiir(rendezes) {

        $.post("feldolgoz.php",
                {
                    kiir: "fel",
                    rendez: rendezes
                },
                function (data) {
                    $('table').html(data);

                });
    }



    $("select").change(function () {
        var rend = $('select').val();

        kiir(rend);

    });


    $('#elkuld').click(function () {
        var nev = $('#nev').val();
        var datum = $('#datum').val();
        if (nev.length != 0 && datum.length != 0) {
            feldolgoz(nev, datum);
        } else {
            alert("Kitöltés kötelező!");
        }
    });
    $('#betolt').click(function () {
        var rend = $('select').val();

        kiir(rend);
    });

    $('table').on('click', '.torles', function () {
        var index = $('.muveletek').index($(this).parents('.muveletek'));
        var azon = $(".torles").eq(index).attr('data-id');


        torles(azon);

    });

    $('table').on('click', '.elvegez', function () {
        var index = $('.muveletek').index($(this).parents('.muveletek'));
        var azon = $(".elvegez").eq(index).attr('data-id');


        elvegez(azon);

    });

    function elvegez(azon) {

        $.post("modosit.php",
                {
                    mod: "fel",
                    azonosito: azon
                },
                function (data) {
                    console.log(data);
                    kiir("");

                });
    }

    function torles(azon) {

        $.post("torol.php",
                {
                    torol: "fel",
                    azonosito: azon
                },
                function (data) {
                    console.log(data);
                    kiir("");

                });
    }




    function feldolgoz(nev, datum) {

        $.post("feldolgoz.php",
                {
                    feltolt: "fel",
                    felnev: nev,
                    datum: datum

                },
                function (data) {
                    kiir("");

                });
    }





});
