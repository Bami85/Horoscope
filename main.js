

function updatePage() {

  var birthday = document.getElementById('födelseInput').value;

  fetch("/viewHoroscope.php", {
          method: 'GET'
      })
      .then((response) => response.json())
      .then((json) => {
          updateButtons(json);
          showSavedHoroscope(json);            
      });
}





function showSavedHoroscope(horoscopeTextJson) {
  var horoscopeText = document.getElementById('horoscope-output');
  horoscopeText.innerText = horoscopeTextJson;
}






function addHoroscope() {

  var formData = new FormData();

  formData.append('birthday', document.getElementById('födelseInput').value);

  fetch("/addHoroscope.php", {
          method: 'POST',
          credentials: 'include',
          body: formData
      }).then(updatePage());
}

function updateHoroscope() {

  var birthday = document.getElementById('födelseInput').value;
  var queryString = "birthday="+birthday;

  fetch("/updateHoroscope.php", {
          method: 'POST',
          credentials: 'include',
          body: queryString
      }).then(updatePage());
      
}

function deleteHoroscope() {
  
  var birthday = document.getElementById('födelseInput').value;
  var queryString = "birthday="+birthday;

  fetch("/deleteHoroscope.php", {
          method: 'DELETE'
      }).then((response) => response.json())
      .then((json) => {
          if (json) {
              updatePage();
          }
      });
      
}


function updateButtons(horoscopeTextJson) {
  var addHoroscopeButton = document.getElementById('addHoroscopeButton');
  var updateHoroscopeButton = document.getElementById('updateHoroscopeButton');
  var deleteHoroscopeButton = document.getElementById('deleteHoroscopeButton');

  if (horoscopeTextJson == "") {
      addHoroscopeButton.disabled = false;
      updateHoroscopeButton.disabled = true;
      deleteHoroscopeButton.disabled = true;
  } else {
      addHoroscopeButton.disabled = true;
      updateHoroscopeButton.disabled = false;
      deleteHoroscopeButton.disabled = false;
  }
}