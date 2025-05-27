<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css" />
  </head>
  <body>
    <div class="calculator">
      <div id="display" class="display">0</div>
      <button class="clear" onclick="clearDisplay()">C</button>
      <button onclick="appendNumber('%')">%</button>
      <button onclick="appendNumber('√')">√</button>
      <button onclick="appendNumber('/')">/</button>
      <button onclick="appendNumber('7')">7</button>
      <button onclick="appendNumber('8')">8</button>
      <button onclick="appendNumber('9')">9</button>
      <button onclick="appendNumber('*')">*</button>
      <button onclick="appendNumber('4')">4</button>
      <button onclick="appendNumber('5')">5</button>
      <button onclick="appendNumber('6')">6</button>
      <button onclick="appendNumber('-')">-</button>
      <button onclick="appendNumber('1')">1</button>
      <button onclick="appendNumber('2')">2</button>
      <button onclick="appendNumber('3')">3</button>
      <button onclick="appendNumber('+')">+</button>
      <button onclick="appendNumber('0')">0</button>
      <button onclick="appendNumber('.')">.</button>
      <button class="equal" onclick="calculate()">=</button>
    </div>
    <script src="newjs.js"></script>
  </body>
</html>
