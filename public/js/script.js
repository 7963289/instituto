$(document).ready(function () {

    $("button").click(function (e) {
        $.get("api/records/users", function (data) {
            var datos = JSON.parse(data);

            for (let i = 0; i < datos.length; i++) {

                var insertar = "<tr><td>" + datos[i].id + "</td><td>" + datos[i].first_name + "</td></tr>"
                $("#tabla").append(insertar);
            }


        });

    });







});
