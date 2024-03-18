function displayDay() {
    var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var date = new Date();
    var dayOfWeek = daysOfWeek[date.getDay()];
    let day = document.querySelector('#day')
    let openhours = document.querySelector('#openhours')
    if (dayOfWeek == "Sunday") {
        day.innerHTML = "We are closed on " + dayOfWeek;
        openhours.innerHTML = "Shop will be open on Monday from 9Am to 8Pm.";
    }
    else if (dayOfWeek == "Saturday") {
        day.innerHTML = "It's "+ dayOfWeek + "!";
        openhours.innerHTML = "Shop is open today from 10Am to 5Pm.";
    }
    else {
        day.innerHTML = "It's "+ dayOfWeek + "!";
        openhours.innerHTML = "Shop is open today from 9Am to 8Pm.";
    }
  }
  