var Marionette = require('backbone.marionette');

module.exports = Marionette.Object.extend({
    index: function () {
        console.log('main layout render');
    }
});