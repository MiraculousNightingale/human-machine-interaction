class Worker {

    // Кожен запис за штатним розкладом підприємства містить наступні дані: номер цеху, прізвище і ініціали, професію,
    // розряд, стаж роботи. Скласти список слюсарів і фрезерувальників, що працюють на даному підприємстві більше 10 років
    // і що мають розряд вище четвертого.


    constructor(fac_id, name, surname, midname, profession, level, exp) {
        this.fac_id = fac_id;
        this.name = name;
        this.surname = surname;
        this.midname = midname;
        this.profession = profession;
        this.level = level;
        this.exp = exp;
    }

    getInitials() {
        return this.name[0] + '. ' + this.midname[0] + '.';
    }

    static getRandomProfession() {
        let professions = ['locksmith', 'freezer', 'cleaner', 'smith'];
        return professions[getRandomInt(0, professions.length)];
    }
}

let workers = [];
let dataProvider = [];

function getRandomInt(min = 0, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}

function getRandomName() {
    let names = [
        'Adam', 'James', 'Sergey', 'John', 'Viktor',
        'Wilson', 'Illya', 'Valeriy', 'Pope', 'Thompson',
        'Rick', 'Vladislav', 'Vladimir', 'Oleg', 'Ulric',
        'Petrovich', 'Stanislav', 'Yuriy', 'Miroslav', 'Sedrik',
        'Colson', 'Cole', 'Johaness', 'Johannson', 'Joel',
    ];
    return names[getRandomInt(0, names.length)];
}

function addRecord() {
    workers.push(new Worker(
        parseInt(document.getElementById('fac_id').value),
        document.getElementById('name').value,
        document.getElementById('surname').value,
        document.getElementById('midname').value,
        document.getElementById('profession').value,
        parseInt(document.getElementById('level').value),
        parseInt(document.getElementById('exp').value)
    ));
    renderContent();
}

function renderContent(filter = false) {
    dataProvider = [];
    if (filter) {
        let exp = document.getElementById('exp-filter'),
            fac = document.getElementById('fac-filter');
        let prof = [];
        [...document.getElementsByClassName('prof-filter')].forEach(element => {
            if (element.checked) prof.push(element.getAttribute('placeholder'));
        });
        if (prof.length < 1) prof = ['locksmith', 'freezer', 'cleaner', 'smith'];
        workers.forEach(value => {
            if (fac.value === undefined || fac.value === null || fac.value === "") {
                if (value.exp >= parseInt(exp.value) && prof.includes(value.profession))
                    dataProvider.push(value);
            }
            else if (value.exp >= parseInt(exp.value) && value.fac_id === parseInt(fac.value) && prof.includes(value.profession))
                dataProvider.push(value);
        });
    } else
        workers.forEach(value => dataProvider.push(value));


    let container = document.getElementById('content');
    container.innerHTML = document.getElementById('headers').innerHTML;

    dataProvider.forEach(value => {
        let row = document.createElement('tr');

        let col = document.createElement('td');
        col.innerHTML = value.fac_id;
        row.appendChild(col);

        col = document.createElement('td');
        col.innerHTML = value.surname + ' ' + value.getInitials();
        row.appendChild(col);

        col = document.createElement('td');
        col.innerHTML = value.profession;
        row.appendChild(col);

        col = document.createElement('td');
        col.innerHTML = value.level;
        row.appendChild(col);

        col = document.createElement('td');
        col.innerHTML = value.exp;
        row.appendChild(col);

        container.appendChild(row);
    });
}

function randomFill() {
    for (let i = 0; i < 15; i++)
        workers.push(
            new Worker(
                getRandomInt(1, 4),
                getRandomName(),
                getRandomName(),
                getRandomName(),
                Worker.getRandomProfession(),
                getRandomInt(1, 6),
                getRandomInt(1, 30)
            )
        );
}


// Auto exec

randomFill();
renderContent();