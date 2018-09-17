// Laboratory Work 1


// Task 1: Find a middle number out of three entered.
function middleNumber() {
    let _values = [];

    [...document.getElementsByClassName('middle-num-input')].forEach(item => {
        _values.push(item.value);
    });

    _values.forEach(value => {
        if (value > Math.min(..._values) && value < Math.max(..._values))
            alert('Middle number is ... ' + value);
    });
}



