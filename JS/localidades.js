let map;

function initMap() {

  const initialCoordinates = { lat: 40.7128, lng: -74.0060 };
  const mapOptions = {
    center: initialCoordinates,
    zoom: 12
  };
  map = new google.maps.Map(document.getElementById('map'), mapOptions);
}

function toggleDetails(id) {
  const detailsElement = document.getElementById(id);
  detailsElement.style.display = detailsElement.style.display === 'block' ? 'none' : 'block';

  const localityElement = detailsElement.previousElementSibling;
  localityElement.classList.toggle('active');
}

function showMap(containerId, latitude, longitude, cineName) {
  if (!map) {
    initMap();
  }


  map.setCenter({ lat: latitude, lng: longitude });

  if (map.marker) {
    map.marker.setMap(null);
  }

  map.marker = new google.maps.Marker({
    position: { lat: latitude, lng: longitude },
    map: map,
    title: cineName
  });
  
  document.getElementById(containerId).appendChild(map.getDiv());
}
