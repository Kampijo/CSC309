var WebSocketServer = require('ws').Server
   ,wss = new WebSocketServer({port: 10551});

var messages=[];

wss.on('close', function() {
    console.log('disconnected');
});

wss.broadcast = function(message){
	for(let ws of this.clients){ 
		ws.send(message); 
	}

	// Alternatively
	// this.clients.forEach(function (ws){ ws.send(message); });
}

wss.on('connection', function(ws) {
	var i;
	for(i=0;i<messages.length;i++){
		ws.send(messages[i]);
	}
	ws.on('message', function(message) {
		console.log(message);
		wss.broadcast(message);
		messages.push(message);
	});
});
