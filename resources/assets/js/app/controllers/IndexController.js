var Marionette = require('backbone.marionette');

module.exports = Marionette.Object.extend({

    index: function () {
        alert('ZZ');
        // app.render(new BookmarksLayout({
        //     collection: bookmarksCollection
        // }));
    }
});