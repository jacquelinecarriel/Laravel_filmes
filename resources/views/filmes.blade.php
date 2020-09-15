<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

<style>

            .lista{
                float:center;
                width:800px;
                text-align:center;
                margin-left:300px;
                margin-top:20px;

                }
            a{
                color:rgb(64, 64, 64);
                font-size:14px;
                float:center;

            }
            h1{
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
            .paginas{
                margin-left:40%;
                font-size:15px;            
            }

    </style>
</head>

<body>
<div class="imagem">
        <img src="/img/1.png"  alt="logo jacqueline">
        </div>

        <div class="lista">
            <h1>Lista de filmes</h1>
            <ul>
                @foreach($filmes as $filme)

                <li>{{ $filme->title }} <a href="/filmes/{{ $filme->id }}">Veja detalhes</a>
                <a href="/deletarFilme/{{ $filme->id }}">Deletar</a>
                
                @endforeach
            </ul>

            <a href="/cadastrarFilme">Cadastrar Filmes</a><br>

            <div class="paginas">
            {{ $filmes->links() }}
            </div>

    </div>
   

</body>
</html>