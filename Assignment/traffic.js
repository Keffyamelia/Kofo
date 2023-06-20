function toggleLight(lightId, className, io) {
  let lightEle = document.getElementById(lightId);
  if (io == "on") {
    if (lightEle.classList.contains("grey--light")) {
      lightEle.className = className;
    }
  } else {
    if (lightEle.classList.contains(lightId + "--light")) {
      lightEle.className = className;
    }
  }
}

function greenLight(interval) {
  toggleLight("green", "green--light", "on");
  toggleLight("yellow", "grey--light", "off");
  toggleLight("red", "grey--light", "off");
  //   setTimeout(() => {
  //     yellowLight("red", interval);
  //   }, interval);
  yellowLight("red", interval);
}

function yellowLight(nextLight, num) {
  toggleLight("yellow", "yellow--light", "on");
  setInterval(() => {
    if (nextLight == "red") {
      redLight(num);
    } else {
      greenLight(num);
    }
  }, num);
}

function redLight(interval) {
  toggleLight("green", "grey--light", "off");
  toggleLight("yellow", "grey--light", "off");
  toggleLight("red", "red--light", "on");

  //   setTimeout(() => {
  //     yellowLight("green", interval);
  //   }, interval);
  yellowLight("green", interval);
}

yellowLight("red", 20000);
