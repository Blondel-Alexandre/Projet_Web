//Imports
var express = require('express');
var usersCtrl = require('./routes/usersCtrl');
var activitiesCtrl = require('./routes/activitiesCtrl');
var photosCtrl = require('./routes/photosCtrl');
var commentCtrl = require('./routes/commentCtrl');
var productCtrl = require('./routes/productCtrl');

//Routes
exports.router = (function(){
    var apiRouter = express.Router();

    //Users routes
    apiRouter.route('/users/register/').post(usersCtrl.register);
    apiRouter.route('/users/login/').post(usersCtrl.login);

    apiRouter.route('/users/me/').get(usersCtrl.getUserProfile);
    apiRouter.route('/activity/addEvent').post(activitiesCtrl.addEvent);

    apiRouter.route('/photo/addPhoto').post(photosCtrl.addPhoto);
    apiRouter.route('/comment/addComment').post(commentCtrl.addComment);
    apiRouter.route('/product/addProduct/').post(productCtrl.addProduct);

    apiRouter.route('/product/').get(productCtrl.listProduct);

    apiRouter.route('/photo/').get(photosCtrl.listPhoto);
    apiRouter.route('/comment/').get(commentCtrl.listComment);
    apiRouter.route('/activity/').get(activitiesCtrl.listActivity);

    return apiRouter;
})();
