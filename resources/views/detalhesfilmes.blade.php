<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo Filme</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
<style>

    .lista{
        float:center;
        width:600px;
        text-align:center;
        margin-left:400px;
        margin-top:20px;

        }
    a{
        color:rgb(64, 64, 64);
        font-size:14px;
        float:center;

    }
    h5{
        color:rgb(255, 153, 153);
        font-size:20px;
        font-weight: bold;
    }
    li{
        color:rgb(255, 153, 153);
        font-size:15px;
        list-style: none;
    }

    body{
        background-color: white;

        }
    img{
        width:650px;
        height:180px;
        margin-top:20px;
        margin-left:30%;

    }

</style>

</head>


<body>

<div class="imagem">
        <img src="/img/1.png"  alt="logo jacqueline">
  </div>

<div class="lista">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Titulo Filme</h5>
        <p class="card-text">{{ $filmes->title }}</p>
      </div>

      <ul class="list-group list-group-flush">
        <li class="list-group-item">Avaliação {{ $filmes->rating }}</li>
          <li class="list-group-item">Premios {{ $filmes->awards }}</li>
          <li class="list-group-item">Lançamento {{ $filmes->release_date }}</li>
        <li class="list-group-item">Duração {{ $filmes->length }}</li>
          </ul>

          <div class="card-body">
            <a href="/filmes">Voltar para a lista</a>
            </div>
      </div>
  </div>
  
</body>
