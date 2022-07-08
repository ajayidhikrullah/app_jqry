var countDown = 1000000000000000000;
var timer = setInterval(function(){
    if(countDown <= 0){
        clearInterval(timer);
        document.getElementById('timer').innerHTML = "Done, but I am slow";

    } else{
        document.getElementById('timer').innerHTML = countDown;
    }
    countDown -= 1;
}, 1000);
