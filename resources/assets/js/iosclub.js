try {
    window.$ = window.jQuery = require('./guardian/jquery.min.js');
    window.CLUB = require('./guardian/main.js');
    require('./guardian/superfish.js');
} catch (e) {
    console.log(e);
}


