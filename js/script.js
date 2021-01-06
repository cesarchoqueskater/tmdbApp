window.onscroll = function(ev) {

    var divs = document.getElementsByClassName("count").length;
    // console.log("Hay " + divs + " elementos");

    //Imprmiendo coordenadas, altura, viewport, etc
    var WindowHeight = $(window).height();
    var WindowScroll = $(window).scrollTop();
    var WindowDocumentHeight = $(document).height();

    // console.log("WindowHeight " + WindowHeight);
    // console.log("WindowScroll " + WindowScroll);
    // console.log("WindowDocumentHeight " + WindowDocumentHeight);

    if ($(window).scrollTop() == $(document).height() - WindowHeight) {
        page = 1;
        if ((divs % 20) == 0) {
            // page = page + 1;
            page = page + divs / 20;
            // console.log("Numero de Contenidos: " + divs);
            console.log("La Pagina en la que estamos cargando ahora de la api es la N°: " + page);

        }
        // console.log("La Pagina es " + page);
        var number_page = page;
        var element = document.getElementById("load_data_message");
        // console.log("Element" + element);
        $.ajax({
            type: "POST",
            url: "views/more_card.php",
            cache: false,
            data: { "number_page": number_page },
            success: function(data) {
                if (data != "") {
                    element.classList.add("d-none");
                    setTimeout(function() { $("#colocar").append(data); }, 1000);
                    element.classList.remove("d-none");
                }
            },
            error: function() {
                alert("Ocurrio un problema !!!");
            }
        });
    }
}