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
                width:500px;
                text-align:center;
                margin-left:500px;
                margin-top:20px;

                }
            label{
                color:rgb(255, 153, 153);
                font-size:15px;
            }
            h1{
                color:rgb(255, 153, 153);
                font-size:25px;
                font-weight: bold;
            }

            body{
                background-color: white;

                }
            img{
                width:650px;
                height:180px;
                margin-top:20px;
                margin-left:29%;

            }

        </style>


</head>

<body>

    <div class="imagem">
        <img src="/img/1.png"  alt="logo jacqueline">
        </div>

    <div class="lista">
    <h1>Cadastro de Filme</h1>

<div style="width:500px">
    <form class="" action="/cadastrarFilme" method="POST">
    @csrf

    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="title">Nome Filme</label>
        <input class="form-control" type="text" name="title" value="" placeholder="Harry Potter"></div>
    
    <div class="form-group">
    <label for="rating">Avaliação</label>
        <input class="form-control" type="number" name="rating" value="" placeholder="Nota filme"></div></div>

    <div class="form-group">
    <label for="awards">Premiações</label>
        <input class="form-control" type="number" name="awards" value="" placeholder="Premiações 1..2..3"></div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="release_date">Data lançamento</label>
        <input class="form-control" type="date" name="release_date" value="" placeholder="Data lançamento"></div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="length">Duração</label>
        <input class="form-control" type="text" name="length" value="" placeholder="Duração"></div></div>
        <br>
        <button type="submit" type="button" class="btn btn-light" style="height:50px; margin-left:29%;">Cadastrar</button> 
            </form>
                </div>
                @if(isset($resultado))
                    @if($resultado)
                    <h1>Filme cadastrado com Sucesso!</h1>
                        @else
                            <h1>Erro ao salvar o filme!</h1>
                            @endif
                            @endif
        </div>
        </div>


    </body>
</html>


