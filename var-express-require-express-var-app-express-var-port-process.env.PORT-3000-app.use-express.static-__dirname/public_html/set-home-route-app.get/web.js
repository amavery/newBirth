var express = require('express');
var app = express();

var port = process.env.PORT || 3000;

app.use(express.static(__dirname + '/public_html'));
//set home route
app.get('/', function(req, res){
  res.render('index');
})
app.listen(port);
