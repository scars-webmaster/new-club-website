window.onload = time;

function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function time() {
  var utcDate = document.getElementById("utcDate");
  var utcTime = document.getElementById("utcTime");
  var mobUtcTime = document.getElementById("mobUtcTime");
  var localDate = document.getElementById("localDate");
  var localTime = document.getElementById("localTime");
  var mobLocalTime = document.getElementById("mobLocalTime");

  var weekday = new Array(7);
  weekday[0] = "Sun";
  weekday[1] = "Mon";
  weekday[2] = "Tue";
  weekday[3] = "Wed";
  weekday[4] = "Thu";
  weekday[5] = "Fri";
  weekday[6] = "Sat";

  var month = new Array(12);
  month[0] = "Jan";
  month[1] = "Feb";
  month[2] = "Mar";
  month[3] = "Apr";
  month[4] = "May";
  month[5] = "Jun";
  month[6] = "Jul";
  month[7] = "Aug";
  month[8] = "Sep";
  month[9] = "Oct";
  month[10] = "Nov";
  month[11] = "Dec";

  var d = new Date();
  var uw = weekday[d.getUTCDay()];
  var lw = weekday[d.getDay()];
  var um = month[d.getUTCMonth()];
  var lm = month[d.getMonth()];
  var ud = d.getUTCDate();
  var ld = d.getDate();
  var uh = addZero(d.getUTCHours());
  var lh = addZero(d.getHours());
  var m = addZero(d.getUTCMinutes());
  var s = addZero(d.getUTCSeconds());
  utcDate.innerHTML = uw + " " + um + " " + ud;
  utcTime.innerHTML = uh + ":" + m + ":" + s;
  mobUtcTime.innerHTML = "UTC " + uh + ":" + m;
  localDate.innerHTML = lw + " " + lm + " " + ld;
  localTime.innerHTML = lh + ":" + m + ":" + s;
  mobLocalTime.innerHTML = "Local " + lh + ":" + m;
  animate = setTimeout(time, 1000);
}

// Get all of the dropdown button elements
var dropdown = document.getElementsByClassName("dropdown-button");

// Check window size against max width for mobile
var x = window.matchMedia("(max-width: 1024px)");

// Capture initial width to be able to determine later if it changes -
// this affects mobile browsers that fire resize on scrolling for some
// reason
var win_width = window.innerWidth;
var doc_width = document.body.clientWidth;
var offset_width = document.body.offsetWidth;

// Counter
var i = 0;

// Window size check
var win_size_change = true;

// TOGGLE MOBILE MENU DROPDOWNS
// Loop through all dropdown buttons to toggle between hiding and
// showing its dropdown content - This allows the user to have
// multiple dropdowns without any conflict
for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    // If menu is open & media query matches small screen
    if (dropdownContent.style.display === "flex" && x.matches) {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "flex";
    }
  });
}

// ADDRESS AFFECT OF RESIZE ON MENU
// If window is resized, check window size to see if need to switch to
// smallscreen or regular
window.addEventListener("resize", function () {
  // Double check size change for mobile browsers that trigger resize
  // event on scroll
  if (win_width != window.innerWidth) {
    win_size_change = true;
  } else {
    win_size_change = false;
  }

  // roll through all of the dropdown menus
  for (i = 0; i < dropdown.length; i++) {
    var dropdownContent = dropdown[i].nextElementSibling;
    // If matches small screen close it and hide the social media menu
    if (x.matches) {
      if (dropdownContent.parentNode.id == "social") {
        dropdown[i].style.display = "none";
        dropdownContent.style.display = "none";
      }

      //if the window size changed and its small screen, close the menus
      if (win_size_change) {
        dropdownContent.style.display = "none";
      }

      //else if its NOT small screen, keep everything open
    } else {
      dropdownContent.style.display = "flex";
      dropdown[i].style.display = "contents";
    }
  }

  // update the tracking variables to the current size for the next
  // resize event
  win_width = window.innerWidth;
  doc_width = document.body.clientWidth;
  offset_width = document.body.offsetWidth;
});
