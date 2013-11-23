var x=document.getElementById("response");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(sendPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude; 
  }

function sendPosition(position) {

  var lat = position.coords.latitude;
  var lon = position.coords.longitude;


  $.ajax({
    data: {lat: lat, lon: lon},
    type: 'post',
    url: 'scripts/tagit.php',
    success: function(responseData) {
      window.location.replace(responseData);
      //window.location.replace('members.php'), 3600;
      //$('#profile_pic').empty().html(responseData);
    },
    error: function(responseData) {
      console.log('the tagit.php ajax call failed');
    }
  });
}
