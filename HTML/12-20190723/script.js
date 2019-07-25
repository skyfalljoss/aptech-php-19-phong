// $(document).ready(function(){
//     $("button").click(function(){
//       $("#demo-1").load("https://namcoi.com/projects/users-crud-laravel/public/api/users")
      
//     })
//     var x= $('#demo-1').text();
//     console.log(x);  
// });

$(document).ready(function(){
    $("button").click(function(){
        $.get("https://namcoi.com/projects/users-crud-laravel/public/api/users",function(data,status){
        
        });
    })

});