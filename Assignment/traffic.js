let vehicleGreen = document.getElementById("green");
let vehicleYellow = document.getElementById("yellow");
let vehicleRed = document.getElementById("red");
let pedestrialGreen = document.getElementById("green1");
let pedestrialYellow = document.getElementById("yellow1");
let pedestrialRed = document.getElementById("red1");

let currentVehicleState = "yellow"

function control() {
  if (currentVehicleState === "yellow") {
    vehicleRed.className = "red--light"
    pedestrialGreen.className = "green--light"
    vehicleYellow.className = "grey--light"
    pedestrialYellow.className = "grey--light"
    vehicleGreen.className = "grey--light"
    pedestrialRed.className = "grey--light"
    currentVehicleState = "red"
  }else if(currentVehicleState === "red") {
    vehicleGreen.className = "green--light"
    pedestrialRed.className = "red--light"
    vehicleYellow.className = "grey--light"
    pedestrialYellow.className = "grey--light"
    vehicleRed.className = "grey--light"
    pedestrialGreen.className = "grey--light"
    currentVehicleState = "green"
  }else {
    vehicleYellow.className = "yellow--light"
    pedestrialYellow.className = "yellow--light"
    vehicleRed.className = "grey--light"
    pedestrialRed.className = "grey--light"
    vehicleGreen.className = "grey--light"
    pedestrialGreen.className = "grey--light"
    currentVehicleState = "yellow"
}

};

setInterval(control, 5000);

// function toggleLight(lightId, className, io) {
//   let lightEle = document.getElementById(lightId);
//   if (io == "on") {
//     if (lightEle.classList.contains("grey--light")) {
//       lightEle.className = className;
//     }
//   } else {
//     if (lightEle.classList.contains(lightId + "--light")) {
//       lightEle.className = className;
//     }
//   }
// }

// function greenLight(interval) {
//   toggleLight("green", "green--light", "on");
//   toggleLight("yellow", "grey--light", "off");
//   toggleLight("red", "grey--light", "off");
//   toggleLight("red1", "red--light", "on");
//   toggleLight("yellow1", "grey--light", "off");
//   toggleLight("green1", "grey--light", "off");
//   yellowLight("red", interval);
// }

// function yellowLight(nextLight, num) {
// //   toggleLight("yellow", "yellow--light", "on");
//   setInterval(() => {
//     if (nextLight == "red") {
//       redLight(num);
//     } else {
//       greenLight(num);
//     }
//   }, num);
// }

// function redLight(interval) {
//   toggleLight("green", "grey--light", "off");
//   toggleLight("yellow", "grey--light", "off");
//   toggleLight("red", "red--light", "on");
//   toggleLight("red1", "red--light", "off");
//   toggleLight("yellow1", "grey--light", "off");
//   toggleLight("green1", "grey--light", "on");
//   yellowLight("green", interval);
// }

// yellowLight("red", 20000);
