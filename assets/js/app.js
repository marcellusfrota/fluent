// assets/js/app.js

// loads the jquery package from node_modules
var $ = require('jquery'); 

// import the function from greet.js (the .js extension is optional)
// ./ (or ../) means to look for a local file
var greet = require('./dashboard');

$(document).ready(function() {
    $('body').prepend('<h1>'+greet('john')+'</h1>');
});