var data = {
    users: [
      {
        id: 10,
        name: "Ethyl Medhurst",
        email: "noah.hand@example.org",
        password: "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        created_at: "2019-03-26 04:55:04",
        updated_at: "2019-03-26 04:55:04"
      },
      {
        id: 9,
        name: "Eula Lebsack PhD",
        email: "schroeder.sylvan@example.org",
        password: "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        created_at: "2019-03-26 04:55:03",
        updated_at: "2019-03-26 04:55:03"
      },
      {
        id: 8,
        name: "Mrs. Kathlyn Parisian DDS",
        email: "ggrimes@example.net",
        password: "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        created_at: "2019-03-26 04:55:03",
        updated_at: "2019-03-26 04:55:03"
      }
    ]
  };
  

var temp=0;
$(document).ready(function(){ 
    var i=0;
   // $("#add").click(function(){
        //for(var i=0;i<data.users.length;i++){
        if(i<data.users.length){
            var user = data.users[i];
            var info = [user.id, user.name, user.email];
            $('tbody').append(function(){
                return '<tr class="'+i+'">' +'<td>'+ info[0] +'</td>' +'<td>'+ info[1] +'</td>'+ '<td>'+ info[2] +'</td>'+'</tr>'
                
            });
            i++;
        }
            // var info = [user.id, user.name, user.email];
            // for(var j=0;j<3;j++){
            //     $().append(function(){
            //         return '<td>'+ info[j] +'</td>';
            //     });
            // }
            
        //}
  //  });
    var j=data.users.length-1;
    console.log(temp);
        console.log(j);
    $("#del").click(function(){
        
        if(j>=0){
            $('.'+j).fadeOut(1000);
           // $('.'+j).remove();
            j--;
        }
    });
});

