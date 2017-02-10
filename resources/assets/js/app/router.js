var Marionette = require('backbone.marionette');

module.exports = function (controller, appRoutes, navigItemName) {

    return Marionette.AppRouter.extend({
        controller: controller,
        appRoutes: appRoutes,

        onRoute: function (name, path, arguments) {
            console.log('route #' + path + ' with method ' + name);
        }
    });

};

