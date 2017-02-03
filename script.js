//Modal Versione Data-Attribute. Necessita dei link dei trailer inseriti come data attribute nei div ".item"

//modal trailer videos
// $('.trailer-btn').click(function() {
// 	var video = $(this).closest('.active').attr('data-attribute');
// 	$('.modal iframe').attr('src', video);
// }); 
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

var $sort = $('.grid').isotope({
  itemSelector: '.box',
  layoutMode: 'fitRows',
  getSortData: {
    number: '.number parseInt',
  }
});

$sort.isotope({ sortBy: 'number' });

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

//Gestione Visualizzazione Box o Lista

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

// var $sort = $('.grid').isotope({
//   itemSelector: '.box',
//   layoutMode: 'fitRows',
//   getSortData: {
//     number: '.number',
//   }
// });

// $sort.isotope({ sortBy: 'number' });

// slideshow prova

// init Isotope
var $list = $('.grid').isotope({
  itemSelector: '.box',
  layoutMode: 'fitRows',
  getSortData: {
    number: '.number parseInt',
  },
  sortBy: function( itemSelector ) {
    var $number = $( itemSelector ).find('.number');
     var number = parseInt( $number.text(), 10 );
  }

});

$list.isotope({ sortBy: 'number' });


$('.trailer-btn').click(function() {
  var x = $(this).closest('.item').index();
  var title = $(this).parents('.title').find('h3').text();
  var videos = [
    "https://www.youtube.com/embed/Ue4PCI0NamI",
    "https://www.youtube.com/embed/hEJnMQG9ev8", 
    "https://www.youtube.com/embed/3PkkHsuMrho", 
    "https://www.youtube.com/embed/RFinNxS5KN4",
    "https://www.youtube.com/embed/79Q2rrQlPW4"
    ];
  $('.modal iframe').attr('src', videos[x]);
  $('.modal .tr-title').text(title).css({
    "color": "#D3B521" ,
    "text-transform": "uppercase",
    "text-align": "center",
    "font-size" : "bold",
    "margin-top" : "15px"
  });
}); 


