var marker;

		var markes;

		var map = L.map('mapid');


		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {  
  maxZoom: 18
}).addTo(map);

		L.control.scale().addTo(map);



		$.ajax({			
			url: BASE_URL +'/api/users/map',     
			dataType: 'json'    
		})
		.done(function(result) {

 

  for (let i = 0; i < result.length; i++) {  



  	view = map.setView([result[i].latitude,result[i].longitude],2);

  	marker =  L.marker([result[i].latitude,result[i].longitude]).addTo(map);

  	marker.bindPopup(result[i].country_name).addTo(map);  

  }


});