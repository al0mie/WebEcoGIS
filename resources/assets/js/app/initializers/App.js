var Backbone = require('backbone');
var _ = require('underscore');
var Radio = require('backbone.radio');
var Marionette = require('backbone.marionette');

Marionette.Application.prototype._initChannel = function () {
    this.channelName = _.result(this, 'channelName') || 'global';
    this.channel = _.result(this, 'channel') || Radio.channel(this.channelName);
};

var $ = require('jquery');

var appRouter = require('../router');
var appInstance = require('../instances/appInstance');
var Handlebars = require('handlebars');
var Templates = require('../templates')(Handlebars);
var mainLayoutView = require('../views/mainLayout');

var app = Marionette.Application.extend({
    initialize: function (options) {
        console.log('init');
    },

    setRootLayout: function (layout) {
        this.RootView = layout;
    },

    getRootLayout: function () {
        return this.RootView;
    },
    showRootLayout: function () {
        this.RootView.render();
    },

    setRouting: function () {
        var routers = require('../config/routers');
        var myRoutes = routers.getRouters();
        myRoutes.forEach(function (item, index) {
            var myRouter = appRouter(item.controller, item.appRoutes, item.navigItemName);
            var router = new myRouter();
        });
    },

    templateCashing: function () {
        // кешируем шаблоны
        $.each(Templates, function (key, value) {
            var templateCache = new Marionette.TemplateCache(key);
            templateCache.compiledTemplate = value;
            Marionette.TemplateCache.templateCaches[key] = templateCache;
        });
    },
    onStart: function (config) {
        this.config = config;
        this.templateCashing();
        appInstance.setInstance(this);
        this.setRootLayout(new mainLayoutView());
        this.showRootLayout();
        this.setRouting();

        if (Backbone.history) {
            Backbone.history.start();
        }
    }
});

app.navigate = function (route, options) {
    options || (options = {});
    Backbone.history.navigate(route, options);
};

app.getCurrentRoute = function () {
    return Backbone.history.fragment
};

module.exports = app;