<link rel="stylesheet" type="text/css" href="styles/reset.css">
<link rel="stylesheet" type="text/css" href="styles/core.css">
<link rel="stylesheet" type="text/css" href="styles/lw1.css">

<body>

<div class="task-block">
    <h1>El Tasko Uno</h1>
    <span>Дано три цілих числа, знайти середнє з них. Середнім назвемо число, яке більше найменшого з даних чисел, але менше максимального.</span>
    <div>
        <input class="task1-input" type="number">
        <input class="task1-input" type="number">
        <input class="task1-input" type="number">
    </div>
    <button class="task-exec-btn" onclick="taskUno()">CHEEKI BREEKI</button>
</div>

<div class="task-block">
    <h1>El Tasko Duo</h1>
    <span>Визначити кількість натуральних тризначних чисел, сума цифр яких дорівнює заданому числу N.</span>
    <div>
        <input id="task2-input" type="number" min="0">
    </div>
    <button class="task-exec-btn" onclick="taskDuo()">CHEEKI BREEKI_2_THE_SEQUEL</button>
</div>

<div class="task-block">
    <h1>El Tasko Tres</h1>
    <span>Введений рядок вивести у зворотньому вигляді( 'йцукен' - 'некуцй')</span>
    <div>
        <input id="task3-input" type="text">
    </div>
    <button class="task-exec-btn" onclick="taskTres()">CHEEKI BREEKI_3_THE_SPECIAL</button>
</div>

<div class="task-block">
    <h1>El Tasko Quadro</h1>
    <span>
        Напишіть функцію фалідації телефона. Пробіли, дужки, мінуси, можуть бути відсутні.
    </span>
    <div>
        <input id="task4-input" type="text">
    </div>
    <button class="task-exec-btn" onclick="taskQuadro()">CHEEKI BREEKI_4_THE_DLC</button>
</div>

<div class="task-block">
    <h1>El Tasko Penta</h1>
    <span>Дано одновимірний масив. Переставити в зворотному порядку елементи масиву, розташовані між мінімальним і максимальними елементами.</span>
    <div>
        <div id="task5-output"></div>
    </div>
    <button class="task-exec-btn" onclick="taskPenta()">CHEEKI BREEKI_5_PREQUEL</button>
</div>

<div class="task-block">
    <h1>El Tasko 'koroche shestoe'</h1>
    <span>Починаючи з k-го стовпця, зрушити їх вперед, а перші k поставити на місце останніх.</span>
    <div>
        <h6>Кількість рядків</h6>
        <input id="task6-rows" type="number">
        <h6>Той самий k-ий стовпець</h6>
        <input id="task6-input" type="number">
        <h6>На скільки вперед</h6>
        <input id="task6-input2" type="number">
        <div id="task6-output"></div>
    </div>
    <button class="task-exec-btn" onclick="taskSex()">CHEEKI BREEKI_6_DLC_2</button>
</div>

</body>


<!-- JS file-names are the same as php file-names. Set up dynamically -->
<script src="src/<?= basename(__FILE__, '.php') ?>.js" type="text/javascript"></script>
