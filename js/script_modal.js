var elements = $('.modal-overlay, .modal');
// console.log('Elementos : ' + elements);

$('#button_modal').click(function() {
    elements.addClass('active');
});

$('.close-modal').click(function() {
    console.log('Cerrar clase')
    elements.removeClass('active');
});