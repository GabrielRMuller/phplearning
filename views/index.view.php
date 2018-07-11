
<?php require 'partials/nav.php'; ?>

    <h1>My Tasks</h1>
    
    <form method = "GET" action="/names">

    <input name = "name"></input>
    <button type = "submit">Submit</button>
    
    <p id="demo"></p>

   
        <script>
            var fruits = ["Banana", "Orange", "Apple", "Mango Bay"];
            var flen = fruits.length

            text = "<u>";
            
            for(i=0;i<flen;i++){

                text += "<li>" +fruits[i]+ "</li>";

            }

            text +="</u>";
            document.getElementById("demo").innerHTML = text;
        </script>
    
    
    </u>
    <script>
        var fruits = ["Banana", "Orange", "Apple", "Mango"];
        fruits.sort();

    </script>


    </form>
<?php require 'partials/footer.php'; ?>