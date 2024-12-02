
<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>

    <div class="container">
      
        <h1>Welcome to MIS4013hw5</h1>
          
           <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"">Page 1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page2.php">Page 2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page3.php"">Page 3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page4.php"">Page 4</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="page5.php"">Page 5</a>
              </li>
            </ul>

      <button onclick = "showMessage()"> "Click Me" </button>
      <script>
          function showMessage() {
              alert("Want to know more about our pages?");
              document.getElementById("demo").innerHTML = "Welcome, hello!";
            }
      </script>
      </div>
    
      <script>
          function showMessage() {
              alert("Want to know more about our pages?");
              document.getElementById("demo").innerHTML = "Welcome, hello!";
            }
      </script>
    
  </body>

</html>
