window.addEventListener("load", initSite);

document.querySelector("#saveBtn").addEventListener("click", addHoroscope)
document.querySelector("#updateBtn").addEventListener("click", updateHoroscope)
document.querySelector("#deleteBtn").addEventListener("click", deleteHoroscope)

function initSite() {
    document.getElementById("dittHoroskop").innerText = "";
    viewHoroscope()
  }

  function viewHoroscope() {
    fetch("./php/viewHoroscope.php", {
      method: "GET",
    })
      .then((data) => {
        return data.json();
      })
      .then((result) => {
        dittHoroskop(result);
      })
      .catch((err) => {
        console.log(err);
      });
  }

  function dittHoroskop(horoscope) {
    let div = document.getElementById("dittHoroskop");

    if (horoscope) {
      div.innerText = horoscope;
    } else {
      div.innerText = "";
    }
  }

  function addHoroscope() {
    document.getElementById(date);

    let datum = date.value;

    if (datum == null) {
      document.getElementById("dittHoroskop").innerHTML = "Fyll i ett datum för att se tillhörande horoskop.";

    } else {
      let url = "./php/addHoroscope.php";
      let method = "POST";
      let form = new FormData();
      form.set("date", datum);

      fetch(url, {
        method: method,
        body: form,
      })
        .then((response) => {
          console.log(response);
          return response.json();
        })
        .then((result) => {
          console.log(result);
          viewHoroscope();
        })
        .catch((err) => {
          console.log("Error: ", err);
        });
    }
  }

  function updateHoroscope() {
    document.getElementById(date);

    let datum = date.value;

    if (datum == null) {
      document.getElementById("dittHoroskop").innerHTML = "Uppdatera datumet.";

    } else {
      let url = "./php/updateHoroscope.php";
      let method = "POST";
      let form = new FormData();
      form.set("date", datum);

      fetch(url, {
        method: method,
        body: form,
      })
        .then((response) => {
          console.log(response);
          return response;
        })
        .then((result) => {
          console.log(result)
          viewHoroscope()
        })
        .catch((err) => {
          console.log("Error: ", err);
        });
    }
  }

  function deleteHoroscope() {
    fetch("./php/deleteHoroscope.php", {
      method: "DELETE",
    })
      .then((data) => {
        return data.json();
      })
      .then((result) => {
        console.log(result)
        viewHoroscope();
      })
      .catch((err) => {
        console.log(err);
      });
    console.log("Det sparade horoskopet är raderat.");
  }