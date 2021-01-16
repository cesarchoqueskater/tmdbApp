$(document).ready(function() {
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

                var number_page = page;
                var element = document.getElementById("load_data_message");

                $.ajax({
                    type: "POST",
                    url: "resources/templates/more_card.php",
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
                        alert("Ocurrio un problema al cargar mas películas !!!");
                    }
                });

            }
        }
    };
    // var divs = document.getElementsByClassName("count").length;
    // console.log("Numero de Contenido Actualizado: " + divs);
});

// Abrir Modal
$(document).on('click', '.button_modal', function() {
    var elements = $('.modal-overlay, .modal');

    var id_movie = $(this).attr("id");
    console.log(id_movie);
    $.ajax({
        type: "POST",
        url: "../../resources/templates/modal_card.php",
        cache: false,
        data: { id_movie: id_movie },
        success: function(data) {
            // console.log(data);
            console.log("Se abrira el Modal");
            $('#modal_detail').html(data);
            elements.addClass('active');
            document.getElementsByTagName("html")[0].style.overflow = "hidden";
        }
    });

});

// Cerrar Modal
$(document).on('click', '.close-modal', function() {
    var elements = $('.modal-overlay, .modal');
    console.log('Se cerrara Modal')
    elements.removeClass('active');
    var modalContent = document.getElementById('modal_detail');
    modalContent.innerHTML = "";
    document.getElementsByTagName("html")[0].style.overflow = "auto";
});