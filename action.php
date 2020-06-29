<?php

     // ------------------------------ IMAGEM ------------------------------ //

    $extensõesValidas = ['image/jpeg', 'image/png', 'image/jpg'];
    $caminhoImagem = 0;


    if ($_FILES['imagem']['error'] == 0) {
        if (array_search($_FILES['imagem']['type'], $extensõesValidas) === false) {
            echo "O tipo de arquivo é invalido!";
            exit;
        }

        if (move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem = 'images/'.$_FILES['imagem']['name'])) {
            echo "Arquivo enviado com sucesso!";                  
        }else {
            echo "Erro no salvamento do arquivo";
        }
        
        
    }else {
        echo "Erro no envio do arquivo";
    }

   

   

    // ------------------------------ SENHA ------------------------------ //

    $senha = $_POST['senha'];
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);
    $confirmarSenha= $_POST['confirmarSenha'];

    password_verify ($senha, $senhaCriptografada);

    if (password_verify($confirmarSenha, $senhaCriptografada)) {
        echo "Senha correta";
    } else{
        echo "Senha Incorreta";
    }



    $formulario = ['nome' => $_POST['nome'], 'email' => $_POST['email'], 'senha' => $senhaCriptografada, 'imagem' => $caminhoImagem];

    $string_json = json_encode($formulario);

    file_put_contents("dados.txt", $string_json);

    ?>

