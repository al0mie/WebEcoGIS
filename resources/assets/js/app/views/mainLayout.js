var Marionette = require('backbone.marionette');

var mainLayoutView = Marionette.LayoutView.extend({
    el: 'body',
    template: 'mainLayout',
    onRender: function () {
        alert('hello');
    }
});

module.exports = mainLayoutView;