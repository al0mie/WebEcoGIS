var IndexController = require('../controllers/IndexController');

module.exports = {
    routers: [
        {
            controller: new IndexController(),
            appRoutes: {
                '': 'index',
                'dashboard': 'index'
            },
            navigItemName: 'dashboard'
        }
    ],

    getRouters: function () {
        return this.routers;
    }
};


