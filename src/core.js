// Core javaScript file.

// Assign event handlers to buttons. CHEECKI BREEKU EIPTA
[...document.getElementsByClassName('task-exec-btn')].forEach(item => {
    let initial = item.innerHTML;
    item.onmouseover = function () {
        this.innerHTML = 'I V DAMKI';
    };
    item.onmouseleave = function () {
        this.innerHTML = initial;
    }
});



