<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário</title>
</head>
<body>
    <form action="" class="estilo" >
        <h2>Formulario</h2>
        <fieldset>
            <legend>formulário do Cliente</legend>
            <p>
                <label for="">Nome Completo</label><br>
                <input type="text">
            </p>
            
            <p>
                <label for="">Senha</label><br>
                <input type="text">
            </p>

            <p>
                <label for="">Email</label><br>
                <input type="text">
            </p>

            <p>
                <label for="">Telefone</label><br>
                <input type="text">
            </p>

            <p>
                <label for="">Sexo</label>
                <p> <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" id="masculino"></p>

                <p><label for="feminino">Feminino</label> 
                <input type="radio" name="sexo" id="feminino"></p>

                <p><label for="outros">Outros</label> 
                <input type="radio" name="sexo" id="outros"></p>
            </p>

            <p>
                <label for="">Data de nascimento</label><br>
                <input type="date" name="" id="">
            </p>

            <p>
                <label for="">Cidade</label><br>
                <input type="text">
            </p>

            <p>
                <label for="">Estado</label><br>
                <input type="text">
            </p>

            <p>
                <label for="">Endereço</label><br>
                <input type="text">
            </p>

        </fieldset>
        <button type="submit">Enviar</button>

    </form>
</body>
</html>