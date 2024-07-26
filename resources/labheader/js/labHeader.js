completedListeners = [];

(function () {
    let labHeaderWebSocket = undefined;
    function openWebSocket() {
        return new Promise(res => {
            if (labHeaderWebSocket) {
                res(labHeaderWebSocket);
                return;
            }

            let newWebSocket = new WebSocket(location.origin.replace("http", "ws") + "/academyLabHeader");

            newWebSocket.onopen = function (evt) {
                res(newWebSocket);
            };

            newWebSocket.onmessage = function (evt) {
                const labSolved = document.getElementById('notification-labsolved');
                const keepAliveMsg = evt.data === 'PONG';
                if (labSolved || keepAliveMsg) {
                    return;
                }
                document.getElementById("academyLabHeader").innerHTML = evt.data;
                animateLabHeader();

                for (const listener of completedListeners) {
                    listener();
                }
            };

            setInterval(() => {
                newWebSocket.send("PING");
            }, 5000)
        });
    }

    labHeaderWebSocket = openWebSocket();
})();

function animateLabHeader() {
    setTimeout(function() {
        const labSolved = document.getElementById('notification-labsolved');
        if (labSolved)
        {
            let cl = labSolved.classList;
            cl.remove('notification-labsolved-hidden');
            cl.add('notification-labsolved');
        }

    }, 500);
}