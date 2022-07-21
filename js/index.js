/**
 * countdown timer
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
end countdown timer
*/


/**
 * this is a click and hide method event
 * $(document).ready(function(){
      $("button").click(function(){
          $("#test").hide();
      });
  });
 */
  
/**
 * this is the HSout app application
 */

$(document).ready(function(){ //ready ur documents
    $('#submit').on('click', function(){ //handler -> get submit when its clicked
        let name = $('#name').val(); //get the input
        let shout = $('#shout').val();
        // let date = getDate();
        let dataString = 'name=' + name + '&shout=' + shout + '&date'; //key value pair send to the php file

        //validation here
        if(name == "" || shout == ""){
            alert('please, fill in your name and SHOUT OUT!!!');
        } else{
            //call ajax
            $.ajax({
                type:"POST",
                url:"../enistic/shout.php",
                data : dataString,
                cache: false,
                success: function(html){
                    $('#shouts ul').prepend(html);
                },
            })
        }
        return false;
    });
});

// departments
// $(document).ready(function(){
//     $('#departments').value();
//     $('#courses').value();

//     load_data('dc_data');

//     function load_data(type, department_tb_id) {
//         $.ajax({
//             url: "../enistic/load_data.php",
//             method: "POST",
//             data:{type:type, department_tb_id:department_tb_id},
//             dataType:"json",
//             success:function(data){
//                 let html = '';
//                 for(let count = 0; count < data.length; count++){
//                     html+= '<option value="' +data[count].id+'">'+data[count].name+'</option>';
//                 }
//                     if(type == 'dc_data'){
//                         $('#departments').value();
//                         $('#departments').value();
//                     }
//                     else{
//                         $('#courses').value();
//                         $('#courses').value();
//                     }
//             }
//         })
//     }
//     $(document).on('change', '#departments', function(){
//         let department_tb_id = $('#departments').val();
//         load_data('courses', department_tb_id);
//     });
// });


// return department
$(document).ready(function(){
    $.ajax({
        // type: "GET",
        url:"load_data.php",
        dataType:"html",
        cache: false,
        success: function(dept){
            $('#departments').html(dept);
        }
    })
})





















// End of Shout-app App


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



  /**
   * XMLHTTP REQUEST
   */
  
  