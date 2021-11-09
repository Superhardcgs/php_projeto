<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="http://127.0.0.1:8000/style.css" rel="stylesheet">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Superhardware Info</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Sobre</a>
                        </li>
                    </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
        </nav>
    </header>

<main>
    <div class="container marketing">
        <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Superhardware</br><span class="text-muted">Info</span></h2>
            <p class="lead">A Superhardware informática é um site criado por um estudante de Sistemas de Informação, da UNIPAM - Patos de Minas.</p>
            <p class="lead">Fã de hardware, jogos e tecnologia no geral.</p>
            <p class="lead">Criador de conteúdo e dono de um canal no YouTube.</p>
        </div>
        <div class="col-md-5">
            <img class="centerImg" width="150" height="150" src="https://lh3.googleusercontent.com/ogw/ADea4I5G9dSjiZulTZ8x0xXD26x-LnF_92Q3_bS_WlsytQ=s83-c-mo" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        </div>
    </div>

    <hr class="featurette-divider">
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">E-mail de contato:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentário:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                </br>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                </div>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Superhardware, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
</body>
</html>