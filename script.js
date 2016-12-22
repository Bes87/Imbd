//modal trailer videos
$('.trailer-btn').click(function() {
	var video = $(this).closest('.active').attr('data-attribute');
	$('.modal iframe').attr('src', video);
}); 
//Modal trailer videos - End

// Range Slider
var min = 0;
var max = 10;

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.box',
  layoutMode: 'fitRows',
  // filter with function
  filter: function( i, itemElem ) {
    var $number = $( itemElem ).find('.number');
     var number = parseInt( $number.text(), 10 );
    return number >= min && number <= max;
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

$grid.isotope();

var $rangeOutput = $('.min-max-range-output');

function updateOutput() {
  $rangeOutput.text( min + ' - ' + max );
}

updateOutput();

//Range Slider - End

$("#line").click(function() {
	   $('.grid > div').removeClass('box').addClass('box-line');	
		 $('.grid').isotope({
			  itemSelector: '.box-line',
			  percentPosition: true,
		}) 
});

$("#cell").click(function() {
	   $('.grid > div').removeClass('box-line').addClass('box');	
		 $('.grid').isotope({
			  itemSelector: '.box',
			  percentPosition: true,
		}) 
});

