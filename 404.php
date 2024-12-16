<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
  <link rel="icon" href="images/Z.png">
</head>

<style>
body {
  font-family: 'Poppins', sans-serif;
  background-image: url('images/background.png'); 
  background-size: cover; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-attachment: fixed; 
  margin: 0;
  padding: 0;
  width: 100vw;
  height: 100vh; 
  overflow: hidden; 
  color: #343a40; 
}

@media (max-width: 768px) {
  body {
    background-size: cover; 
    background-attachment: scroll; 
    overflow: hidden; 
  }
}


  .error {
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }

  .error h1 {
    font-family: 'Fredoka', sans-serif;
    font-size: 6rem;
    font-weight: 700;
    color: #e74c3c;
    margin: 0;
  }

  .error img {
    max-width: 150px;
    animation: bounce 2s infinite;
  }

  .fix {
    text-align: center;
    margin-top: 20px;
  }

  .fix h1 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #2c3e50;
  }

  .fix p {
    font-size: 1.5rem;
    color: #274d60;
  }

  .fix p a {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
  }

  .fix p a:hover {
    text-decoration: underline;
    color: #2980b9;
  }

  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-30px);
    }
    60% {
      transform: translateY(-15px);
    }
  }
</style>



<body onerror="document.body.style.backgroundImage='url(images/background.png)';"></body>
  <div id="unknown" class="container-fluid">
    <div class="row g-0 error">
      <h1 class="col-2 d-flex justify-content-center align-items-center">4</h1>
      <img class="col-4" src="images/ball.png" onerror="this.onerror=null; this.src='images/ball.png';" alt="not found" width="100%">
      <h1 class="col-2 d-flex justify-content-center align-items-center">4</h1>
    </div>
    <div class="fix">
      <h1>Oops, you're out of bounds!</h1>
      <p>Let's get you back to the game!<a href="index.html" class="back">rebound here</a></p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
</body>

</html>
