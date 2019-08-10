// var data = {
//     users: [
//       {
//         id: 10,
//         name: "Ethyl Medhurst",
//         email: "noah.hand@example.org",
//         password: "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
//         created_at: "2019-03-26 04:55:04",
//         updated_at: "2019-03-26 04:55:04"
//       },
//       {
//         id: 9,
//         name: "Eula Lebsack PhD",
//         email: "schroeder.sylvan@example.org",
//         password: "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
//         created_at: "2019-03-26 04:55:03",
//         updated_at: "2019-03-26 04:55:03"
//       },
//       {
//         id: 8,
//         name: "Mrs. Kathlyn Parisian DDS",
//         email: "ggrimes@example.net",
//         password: "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
//         created_at: "2019-03-26 04:55:03",
//         updated_at: "2019-03-26 04:55:03"
//       }
//     ]
//   };
  

var temp=0;
$(document).ready(function(){ 
  $.get("https://namcoi.com/projects/users-crud-laravel/public/api/users?fbclid=IwAR12bUU3hgAUlFhzXtMCjFKjo_qqudk2ipCf5A3XTsAR6R7Sm6lDi0x9SHA",function(data){
    console.log(data);
    //var i=0;
    $("#add").click(function(){
        // for(var i=0;i<data.users.length;i++){        
        //if(i<data.users.length){
        //     var user = data.users[i];
        //     var info = [user.id, user.name, user.email];
        //     $('tbody').append(function(){
        //         return '<tr class="'+i+'">' +'<td>'+ info[0] +'</td>' +'<td>'+ info[1] +'</td>'+ '<td>'+ info[2] +'</td>'+'</tr>'
                
        //     });
        //     i++;
        // }

        for(var i=0;i<data.users.length;i++){
            var user = data.users[i];
            var info = [user.id, user.name, user.email];
            $('tbody').append("<tr id='row-"+i+"'>");
            for(var j=0;j<info.length+1;j++){
                $("#row-"+i).append("<td id='data-"+i+j+"'>");
                $("#data-"+i+j).text(info[j]);
                $("#data-"+i+info.length).append("<button id='del-"+i+"'>Delete");
            }    
         }
         xoa();
         $("#del").click(function(){       
            for(var i=0;i<data.users.length;i++){
                $('#row-'+i).remove();
            }
        });
    });
    
    
    
    // for(var i=0;i<data.users.length;i++){
    //     $("#del-"+i).click(function(){
    //         $("#row-"+i).fadeOut(1000);
    //     });
    //  }
  });

});

function xoa(){
    $("#del-"+0).click(function(){
        $("#row-"+0).fadeOut(1000);
    });
    $("#del-"+1).click(function(){
        $("#row-"+1).fadeOut(1000);
    });
    $("#del-"+2).click(function(){
        $("#row-"+2).fadeOut(1000);
    });
    $("#del-"+3).click(function(){
        $("#row-"+3).fadeOut(1000);
    });
    $("#del-"+4).click(function(){
        $("#row-"+4).fadeOut(1000);
    });
    $("#del-"+5).click(function(){
        $("#row-"+5).fadeOut(1000);
    });
}
