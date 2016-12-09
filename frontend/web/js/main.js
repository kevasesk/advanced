function initMap() {
	var mapCanvas = document.getElementById('map'); //блок, куда генерируется карта
	var myLatLng = {lat: 50.013067, lng: 36.229590}; //переменнная для координат карты и маркера
	var mapOptions = {
		zoom: 17, // уровень приближения
		center: myLatLng, // координаты указанные для переменной myLatLng будут показаны по центру карты
		mapTypeId: google.maps.MapTypeId.ROADMAP, // тип карты ROADMAP, SATELLITE, HYBRID или TERRAIN
		//disableDefaultUI: true,
		// или
		mapTypeControl: false, // переключатель типа карты - ROADMAP, SATELLITE, HYBRID или TERRAIN
		streetViewControl: false, // человечек
		panControl: false, // круг с позиционированием
		zoomControl: false, // ползунок для масштабирования
		scaleControl: true // шкала масштаба
	};
	var map = new google.maps.Map(mapCanvas, mapOptions);
	// стилизируем карту. https://snazzymaps.com/

	// Маркер
	var marker = new google.maps.Marker({
		map: map,
			// Define the place with a location, and a query string.
			place: {
				location: myLatLng, //указываем координаты для маркера из переменной myLatLng (строка 3)
				query: 'Строка для определения'
			},
		icon: 'images/marker.png' //картинка маркера
	});

	// Construct a new InfoWindow.
	var infoWindow = new google.maps.InfoWindow({
		content: 'Peregrin Capital Group'
	});

	// Opens the InfoWindow when marker is clicked.
	marker.addListener('click', function() {
		infoWindow.open(map, marker);
	});
}


// Загружаем карту
//google.maps.event.addDomListener(window, 'load', initMap);