//Imports
var bcrypt  = require('bcrypt');
var jwt     = require('jsonwebtoken');

//Routes 
module.exports = {
    register: function(req, res){

        //parameters
        var email = req.body.email;
        var username = req.body.username;
        var password = req.body.password;
        var bio = req.body.bio;

        if (email == null || username == null || password || null){
            return res.status(400).json({ 'error': 'missing parameters'})
        }

    },
    login: function(req, res){

    }
}