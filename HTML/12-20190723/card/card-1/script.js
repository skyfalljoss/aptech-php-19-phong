
$(document).ready(function(){
    var a;
    $.get("https://namcoi.com/projects/news-website-laravel/public/api/posts?fbclid=IwAR2Vdm9Ac12D3IxrQwJLyg_TeUUjwI5sqY971CPTPTqNbz9jwkr1prE7SsU",function(data){
         a=data;    
        console.log(a);
        console.log(a.length);
        for(var i=0;i<a.length;i++){
        $(".container").append("<div class='card' id='card"+i+"'>")
        $("#card"+i).append("<img id='img-"+i+"'>")
        $("#img-"+i).attr("src",a[i].image_url)

        $("#card"+i).append("<h3 id='title-"+i+"'>")
        $("#title-"+i).text(a[i].title)

        $("#card"+i).append("<p id='des-"+i+"'>")
        $("#des-"+i).text(a[i].description)

        $("#card"+i).append("<div id='date-"+i+"'>")

        $("#date-"+i).append("<small id='cre-"+i+"'>")
        $("#cre-"+i).text(a[i].created_at)

        $("#date-"+i).append("<small id='upd-"+i+"'>")
        $("#upd-"+i).text(a[i].updated_at)
        console.log (i);
        
        }
        // $(".container").append("<div id='card'>")
        // $("#card").append("<img>")
        // $("img").attr("src",a[2].image_url)
        // $("#card").append("<h3>")
        // $("h3").text(a[2].title)
        // $("#card").append("<p>")
        // $("p").text(a[2].description)
        // $("#card").append("<button>")
        // $("button").text(a[2].created_at);
        // $("#card").append("<button>")
        // $("button").text(a[2].updated_at);
            $("#card0").click(function(){
            $("#card0").fadeOut(1000);   
            })
            $("#card1").click(function(){
            $("#card1").fadeOut(1000);
            })
            $("#card2").click(function(){
            $("#card2").fadeOut(1000);
            })
            $("#card3").click(function(){
            $("#card3").fadeOut(1000);
            })
            $("#card4").click(function(){
            $("#card4").fadeOut(1000);
            })
            $("#card5").click(function(){
            $("#card5").fadeOut(1000);
            })
            $("#card6").click(function(){
            $("#card6").fadeOut(1000);
            })
            $("#card7").click(function(){
            $("#card7").fadeOut(1000);
            })
            $("#card8").click(function(){
            $("#card8").fadeOut(1000);
            })
            $("#card9").click(function(){
            $("#card9").fadeOut(1000);
            })
        
        
    });
    
    

    
        
    
});
function Dem(){
    $("#card0").click(function(count){
        $("#card0").fadeOut(1000);
        count++;
        })
        $("#card1").click(function(){
        $("#card1").fadeOut(1000);
        count++;
        })
        $("#card2").click(function(){
        $("#card2").fadeOut(1000);
        count++;
        })
        $("#card3").click(function(){
        $("#card3").fadeOut(1000);
        count++;
        })
        $("#card4").click(function(){
        $("#card4").fadeOut(1000);
        count++;
        })
        $("#card5").click(function(){
        $("#card5").fadeOut(1000);
        count++;
        })
        $("#card6").click(function(){
        $("#card6").fadeOut(1000);
        count++;
        })
        $("#card7").click(function(){
        $("#card7").fadeOut(1000);
        count++;
        })
        $("#card8").click(function(){
        $("#card8").fadeOut(1000);
        count++;
        })
        $("#card9").click(function(){
        $("#card9").fadeOut(1000);
        count++;
        })
}