$ = require('jquery');
jQuery = $;

require('jquery-migrate');
require('bootstrap-sass');

var appInstance = require('./initializers/App');

var App = new appInstance();

App.start();