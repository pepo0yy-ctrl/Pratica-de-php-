<?php
// Recebendo os dados do formulário via POST
$nomeCompleto = $_POST['nomeCompleto'];
$idade = $_POST['idade'];
$profissao = $_POST['profissao'];
$salarioPretendido = $_POST['salarioPretendido'];
$experienciaAnterior = $_POST['experienciaAnterior'];

// HTML para exibir as informações
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Processado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 600px;
        }
        .info-row {
            margin: 15px 0;
            padding: 10px;
            background-color: #f5f5f5;
            border-left: 4px solid #007bff;
        }
        .label {
            font-weight: bold;
        }
        .botao-voltar {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
        .botao-voltar:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div>
        <h1>Dados Cadastrados</h1>
        <p>Confira as informações que você enviou:</p>
        
        <div class="info-row">
            <span class="label">Nome Completo:</span> <?php echo htmlspecialchars($nomeCompleto); ?>
        </div>
        
        <div class="info-row">
            <span class="label">Idade:</span> <?php echo htmlspecialchars($idade); ?> anos
        </div>
        
        <div class="info-row">
            <span class="label">Profissão:</span> <?php echo htmlspecialchars($profissao); ?>
        </div>
        
        <div class="info-row">
            <span class="label">Salário Pretendido:</span> <?php echo htmlspecialchars($salarioPretendido); ?>
        </div>
        
        <div class="info-row">
            <span class="label">Experiência Anterior:</span><br>
            <?php echo nl2br(htmlspecialchars($experienciaAnterior)); ?>
        </div>
        
        <div>
            <h2>Mensagem Personalizada</h2>
            <p>Olá, <strong><?php echo htmlspecialchars($nomeCompleto); ?></strong>!</p>
            <p>Obrigado por se cadastrar. Sua experiência como <strong><?php echo htmlspecialchars($profissao); ?></strong> foi registrada com sucesso.</p>
            <p>Entraremos em contato em breve para mais informações.</p>
        </div>
        
        <div>
            <a href="cadastro.html" class="botao-voltar">Voltar ao Formulário</a>
        </div>
    </div>
</body>
</html>