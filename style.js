$(document).ready(()=>{
  let d = new Date();
var h =  fun(d.getHours());
var m = fun(d.getMinutes());
var s = fun(d.getSeconds());

$("#time").val(h + "" + m + "" + s );


  $("#messages").load("ajax.php",{dat:$("#time").val() });
  $("#post").submit(()=>{
      $.post('post.php',$('#post').serialize()  ,(data)=>{


      });
  });


});
let yay = ()=>{

    $("#messages").load("ajax.php");
}
 $('#submit').click(function() {
   location.reload();
});

let fun = ( x)=>{

  if(x<10){
    return "0" +  x;

  }
  else{
    return x;
  }

}
