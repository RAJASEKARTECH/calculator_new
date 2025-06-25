<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calculator</title>
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(135deg, #1e3a8a, #9333ea);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .calculator {
      max-width: 350px;
      padding: 2rem;
      border-radius: 1.5rem;
      background: white;
      box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }
    input {
      text-align: right;
      font-size: 1.5rem;
    }
    button {
      font-size: 1.2rem;
    }
  </style>
</head>
<body>
  <div class="calculator shadow-lg">
    <h2 class="text-center mb-4 text-xl font-bold text-blue-700">V2X Calculator</h2>
    <input type="text" id="display" class="form-control mb-3 p-2" readonly />

    <div class="grid grid-cols-4 gap-3">
      <button class="btn btn-secondary" onclick="clearDisplay()">C</button>
      <button class="btn btn-secondary" onclick="deleteLast()">⌫</button>
      <button class="btn btn-secondary" onclick="appendValue('%')">%</button>
      <button class="btn btn-warning" onclick="appendValue('/')">÷</button>

      <button class="btn btn-light" onclick="appendValue('7')">7</button>
      <button class="btn btn-light" onclick="appendValue('8')">8</button>
      <button class="btn btn-light" onclick="appendValue('9')">9</button>
      <button class="btn btn-warning" onclick="appendValue('*')">×</button>

      <button class="btn btn-light" onclick="appendValue('4')">4</button>
      <button class="btn btn-light" onclick="appendValue('5')">5</button>
      <button class="btn btn-light" onclick="appendValue('6')">6</button>
      <button class="btn btn-warning" onclick="appendValue('-')">−</button>

      <button class="btn btn-light" onclick="appendValue('1')">1</button>
      <button class="btn btn-light" onclick="appendValue('2')">2</button>
      <button class="btn btn-light" onclick="appendValue('3')">3</button>
      <button class="btn btn-warning" onclick="appendValue('+')">+</button>

      <button class="btn btn-light col-span-2" onclick="appendValue('0')">0</button>
      <button class="btn btn-light" onclick="appendValue('.')">.</button>
      <button class="btn btn-success" onclick="calculate()">=</button>
    </div>
  </div>

  <script>
    const display = document.getElementById('display');

    function appendValue(value) {
      display.value += value;
    }

    function clearDisplay() {
      display.value = '';
    }

    function deleteLast() {
      display.value = display.value.slice(0, -1);
    }

    function calculate() {
      try {
        display.value = eval(display.value.replace('%', '/100'));
      } catch {
        display.value = 'Error';
      }
    }
  </script>
</body>
</html>
