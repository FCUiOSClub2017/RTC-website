try {
    window.$ = window.jQuery = require('./guardian/jquery.min.js');
    window.CLUB = require('./guardian/main.js');
} catch (e) {
    console.log(e);
}


