var data = {
    "users": [
     {
        "id": 10,
        "name": "Ethyl Medhurst",
        "email": "noah.hand@example.org",
        "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        "created_at": "2019-03-26 04:55:04",
        "updated_at": "2019-03-26 04:55:04"
      },
      {
        "id": 9,
        "name": "Eula Lebsack PhD",
        "email": "schroeder.sylvan@example.org",
        "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      },
      {
        "id": 8,
        "name": "Mrs. Kathlyn Parisian DDS",
        "email": "ggrimes@example.net",
        "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      }
    ]
};
var bang=document.createElement("table.tb");
function create_Table(){

    var row=document.createElement("tr");
    for(var k=0;k<6;k++){
        if(k=1){
            var col=document.createElement("th");
            var info=document.createTextNode("id");
            col.appendChild(info);
            row.appendChild(col);
        }
        if(k=2){
            var col=document.createElement("th");
            var info=document.createTextNode("name");
            col.appendChild(info);
            row.appendChild(col);
        }
        if(k=3){
            var col=document.createElement("th");
            var info = document.createTextNode("email");
            col.appendChild(info);
            row.appendChild(col);
        }
        if(k=4){
           var col=document.createElement("th");
            var info=document.createTextNode("password");
            col.appendChild(info);
            row.appendChild(col);
        }
         if(k=5){
            var col=document.createElement("th");
             var info=document.createTextNode("created_at");
             col.appendChild(info);
             row.appendChild(col);
        }
        if(k=6){
             var col=document.createElement("th");
             var info=document.createTextNode("updated_at");
             col.appendChild(info);
             row.appendChild(col);
         }
    }
    bang.appendChild(row);
    for(var i=0;i<3;i++){
        add_Table(i);
        //var row=document.createElement("tr");
        // for(var j=0;j<6;j++){            
        //     if(j=1){
        //         var col=document.createElement("td");
        //         var info=document.createTextNode(data.users[i].id);
        //         col.appendChild(info);
        //         row.appendChild(col);
        //     }
        //     if(j=2){
        //         var col=document.createElement("td");
        //         var info=document.createTextNode(data.users[i].name);
        //         col.appendChild(info);
        //         row.appendChild(col);
        //     }
        //     if(j=3){
        //         var col=document.createElement("td");
        //         var info = document.createTextNode(data.users[i].email);
        //         col.appendChild(info);
        //         row.appendChild(col);
        //     }
        //     if(j=4){
        //        var col=document.createElement("td");
        //         var info=document.createTextNode(data.users[i].password);
        //         col.appendChild(info);
        //         row.appendChild(col);
        //     }
        //      if(j=5){
        //         var col=document.createElement("td");
        //          var info=document.createTextNode(data.users[i].created_at);
        //          col.appendChild(info);
        //          row.appendChild(col);
        //     }
        //     if(j=6){
        //          var col=document.createElement("td");
        //          var info=document.createTextNode(data.users[i].updated_at);
        //          col.appendChild(info);
        //          row.appendChild(col);
        //      }            
        //     //row.appendChild(col);
        
        // }
        //bang.appendChild(row);
    }
    document.getElementById("print").appendChild(bang);
    
}

function add_Table(i){
    // i=1;
    var row=document.createElement("tr");
        for(var j=0;j<6;j++){            
            if(j=1){
                var col=document.createElement("td");
                var info=document.createTextNode(data.users[i].id);
                col.appendChild(info);
                row.appendChild(col);
            }
            if(j=2){
                var col=document.createElement("td");
                var info=document.createTextNode(data.users[i].name);
                col.appendChild(info);
                row.appendChild(col);
            }
            if(j=3){
                var col=document.createElement("td");
                var info = document.createTextNode(data.users[i].email);
                col.appendChild(info);
                row.appendChild(col);
            }
            if(j=4){
               var col=document.createElement("td");
                var info=document.createTextNode(data.users[i].password);
                col.appendChild(info);
                row.appendChild(col);
            }
             if(j=5){
                var col=document.createElement("td");
                 var info=document.createTextNode(data.users[i].created_at);
                 col.appendChild(info);
                 row.appendChild(col);
            }
            if(j=6){
                 var col=document.createElement("td");
                 var info=document.createTextNode(data.users[i].updated_at);
                 col.appendChild(info);
                 row.appendChild(col);
             }
        }
        bang.appendChild(row);
}

