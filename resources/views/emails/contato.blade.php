<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Contato - Van Confiável</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #2563eb 0%, #f59e0b 100%);
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        .content {
            background: #f9fafb;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table td {
            padding: 10px;
            border-bottom: 1px solid #e5e7eb;
        }
        .info-table td:first-child {
            font-weight: bold;
            width: 30%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Novo Contato - Van Confiável</h2>
        <p>Alguém se interessou pelo seu serviço!</p>
    </div>
    
    <div class="content">
        <p>Você recebeu um novo contato através do formulário "Teste Grátis" do seu site:</p>
        
        <table class="info-table">
            <tr>
                <td>Nome:</td>
                <td>{{ $nome }}</td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td>Celular:</td>
                <td>{{ $celular }}</td>
            </tr>
            <tr>
                <td>Cidade:</td>
                <td>{{ $cidade }}</td>
            </tr>
            <tr>
                <td>Estado:</td>
                <td>{{ $estado }}</td>
            </tr>
            <tr>
                <td>Data/Hora:</td>
                <td>{{ now()->format('d/m/Y H:i:s') }}</td>
            </tr>
        </table>
        
        <p><strong>Próximos passos:</strong></p>
        <ul>
            <li>Entre em contato o mais breve possível</li>
            <li>Apresente os benefícios do Van Confiável</li>
            <li>Ofereça o teste grátis de 7 dias</li>
        </ul>
    </div>
</body>
</html>