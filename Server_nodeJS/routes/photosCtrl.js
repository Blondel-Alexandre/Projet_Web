//Imports
var bcrypt  = require('bcrypt');
var jwt     = require('jsonwebtoken');
var models = require('../models');

//Routes
module.exports = {
    addPhoto: function(req, res){

        //parameters
        var date = req.body.date ;
        var author = req.body.author;
        var picture = req.body.picture;
        var public = req.body.public;
        var like = req.body.like;
        var email = req.body.email;



        if (email == null || date == null || author == null || picture == null || public == null || like == null ){
            return res.status(400).json({ 'error': 'missing parameters'})
        }

        models.users.findOne({
            attributes: ['email'],
            where: { email: email}
        })
            .then(function(userFound){
                if (!userFound){
                    bcrypt.hash(password, 5, function(err, bcryptedPassword){
                        var newPhoto = models.tpphotos.create({
                            date:date,
                            author:author,
                            picture:picture,
                            public:public,
                            like:like,
                            email:email,
                        })
                            .then(function(newPhoto){
                                return res.status(201).json({
                                    'photoId': newPhoto.id
                                })
                            })
                            .catch(function(err){
                                return res.status(500).json({ 'error': 'cannot add photo'});
                            })
                    });

                }else{
                    return res.status(409).json({'error': 'photo already exist'});
                }
            })
            .catch(function(err){
                return res.status(500).json({'error': 'unable to verify photo'});
            });



    },

}