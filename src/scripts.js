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
  mobUtcTime.innerHTML = uh + ":" + m + " UTC";
  localDate.innerHTML = lw + " " + lm + " " + ld;
  localTime.innerHTML = lh + ":" + m + ":" + s;
  animate = setTimeout(time, 1000);
}
