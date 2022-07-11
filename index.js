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



//   $(document).ready(function(){
//       $("button").click(function(){
//           $("#test").hide();
//       });
//   });


$("p").bind("click", function(){
    $("<div>This is a click Event</div>").appendTo("body");
});

$("p").bind("dblclick", function(){
    $("<div>This is a double-click Event</div>").appendTo("body");
});


$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 10 }, "slow");
    return false;
  });

  $('a.printPage').click(function(){
      window.print();
      return false;
  });

  let maxlength = 15;
  $("textarea").keyup(function(){
      let textlen = maxlength - $(this).val().length;
      $('#rchars').text(textlen);
  });
