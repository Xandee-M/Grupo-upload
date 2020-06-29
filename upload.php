<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cadastro de usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <header>
        
    </header>
    <section>
        <div class="container">
            <form action="action.php" method="POST" enctype="multipart/form-data">
                <h1>Cadastro de usuário</h1>
                <br>
                <div>
                    <label for="nome">Nome completo</label><br>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <br>
                <div>
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" placeholder="matheus@gmail.com" class="form-control" required>
                </div>
                <br>
                <div>
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha" placeholder="*" class="form-control" required>
                </div>
                <br>
                <div>
                    <label for="confirmarSenha">Confirmação de Senha</label>
                    <input type="password" name="confirmarSenha" id="confirmarSenha" placeholder="*" class="form-control" required>
                </div>
                
                <div>
                    <label for="image">Foto</label><br>
                    <input type="file" name="imagem" />
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </section>
    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>