<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cor</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    
</head>

<body>
   <form action="procura.php">
    <div class="container">
       <div class="columns"><div class="column"></div></div>
        <div class="columns is-mobile">
            <div class="column is-6 is-offset-2">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <div class="field is-horizontal">
                                <div class="field-label is-normal">
                                    <label class="label">Procurar:</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input class="input" type="text" name="palavra">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="field-label is-normal">
                                    <label class="label">Texto:</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <textarea name="texto" cols="67" rows="10">A educação abrange os processos formativos que se desenvolvem na vida familiar, na convivência humana, no trabalho, nas instituições de ensino e pesquisa, nos movimentos sociais e organizações da sociedade civil e nas manifestações culturais.
                                            </textarea>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <p class="control">
                                            <input class="button is-info" type="submit" value="Entrar">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>

</html>
