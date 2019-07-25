    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.responseText;
        console.log(this.responseText);
      }
    };
    xhttp.open("GET", "https://namcoi.com/projects/news-website-laravel/public/api/posts?fbclid=IwAR2Vdm9Ac12D3IxrQwJLyg_TeUUjwI5sqY971CPTPTqNbz9jwkr1prE7SsU", true);
    xhttp.send();
  