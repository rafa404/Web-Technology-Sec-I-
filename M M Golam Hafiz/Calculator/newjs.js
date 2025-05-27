function appendNumber(num) {
  let display = document.getElementById("display");
  let current = display.innerHTML;

  if (current === "0" || current === "Error") current = "";

  if (num === "√") {
    display.innerHTML = Math.sqrt(parseFloat(current) || 0);
  } else {
    display.innerHTML = current + num;
  }
}

function calculate() {
  let display = document.getElementById("display");
  let expression = display.innerHTML.replace(/%/g, "/100");
}

function clearDisplay() {
  document.getElementById("display").innerHTML = "0";
}
