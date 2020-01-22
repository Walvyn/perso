$(function(){

	// Init Tooltipped
	var tooltipped = document.querySelectorAll('.tooltipped');
	var instances = M.Tooltip.init(tooltipped, {});

	// Init scrollspy
	var scrollspy = document.querySelectorAll('.scrollspy');
	var instances = M.ScrollSpy.init(scrollspy, {});

	// Init sidenav
	var sidenav = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(sidenav, {});

	var cities = [
		{name: 'New York', latLng: [40.712776, -74.005974]},
		{name: 'Washington D.C.', latLng: [38.907192, -77.036873]},
		{name: 'Philadelphie', latLng: [39.952583, -75.165222]},
		{name: 'Londres', latLng: [51.507351, -0.127758]},
		{name: 'Rome', latLng: [41.902782, 12.496365]},
		{name: 'Amsterdam', latLng: [52.370216, 4.895168]},
		{name: 'Tampa', latLng: [27.950575, -82.457176]},
		{name: 'Miami', latLng: [25.761681, -80.191788]},
		{name: 'Las Vegas', latLng: [36.169941, -115.139832]},
		{name: 'San Diego', latLng: [32.715736, -117.161087]},
		{name: 'Los Angeles', latLng: [34.052235, -118.243683]},
		{name: 'San Francisco', latLng: [37.774929, -122.419418]},
		{name: 'La Nouvelle-Orléans', latLng: [29.951065, -90.071533]},
		{name: 'Houston', latLng: [29.760427, -95.369804]},
		{name: 'Dallas', latLng: [32.776665, -96.796989]},
		{name: 'Austin', latLng: [30.267153, -97.743057]},
		{name: 'San Antonio', latLng: [29.424122, -98.493629]},
		{name: 'Montréal', latLng: [45.501690, -73.567253]},
		{name: 'Toronto', latLng: [43.653225, -79.383186]},
		{name: 'Bangkok', latLng: [13.756331, 100.501762]},
		{name: 'Koh Lanta', latLng: [7.655380, 99.041351]}
	];

	$('.travels-world-map').vectorMap({
		map: 'world',
		zoomOnScroll: false,
		regionStyle: { 
			initial: { 
				fill: '#ffebcd' 
			}, 
			hover: { 
				fill: '#dac1af'
			}
		},
		normalizeFunction: 'polynomial',
		hoverOpacity: 0.5,
		hoverColor: false,
		backgroundColor: '#383f47',
		markers: cities,
    markerStyle: {
      initial: {
        image: '/public/images/pin.png'
      }
    }
	});
});