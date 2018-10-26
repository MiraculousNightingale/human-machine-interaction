let PORT = 8007;
let express = require('express');
let app = express();

let phpExpress = require('php-express')({
    binPath: 'php'
});

app.set('views', __dirname + '/..');
app.use('/src', express.static('src'));
app.use('/styles', express.static('styles'));

app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
app.all(/.+\.php$/, phpExpress.router);

app.get('/', function (req, res) {
    res.render('lw2_2');
});

let server = app.listen(PORT);

