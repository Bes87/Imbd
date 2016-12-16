$('.trailer-btn').click(function() {
	var video = $(this).closest('.active').attr('data-attribute');
	$('.modal iframe').attr('src', video);
}); 

// initial values
var min = 0;
var max = 10;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.box-item',
  // filter with function
  filter: function( i, itemElem ) {
    var $number = $( itemElem ).find('.number');
    var number = parseInt( $number.text());
    return number >= min && number <= max;
    $grid.isotope({ sortBy: 'number' });
  }
});



var $range = $('.min-max-range').slider({
  range: true,
  min: 0,
  max: 10,
  values: [ min, max ],
  slide: function( event, ui ) {
    min = ui.values[0];
    max = ui.values[1];
    updateOutput();
    $grid.isotope();
  }
});

updateOutput();


