
<?php require 'partials/nav.php'; ?>

    <h1>My Tasks</h1>
    
    <form method = "GET" action="/names">

    <input name = "name"></input>
    <button type = "submit">Submit</button>
    
    <p id="demo"></p>

    <script>
        document.getElementById("demo").innerHTML = 5 + 6;
    </script>

    </form>
<?php require 'partials/footer.php'; ?>