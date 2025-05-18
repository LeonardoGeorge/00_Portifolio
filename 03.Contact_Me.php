<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title> Leo | PORT </title>
    <link rel="stylesheet" href="CSS/03.e-mail.css">
    <link rel="stylesheet" href="CSS/facebook-form.css">
    <script src="JS/script.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <header class="menu">
        <div class="logo">
            <h1><a id="logo_header" href="01.index.php">Leo</a></h1>
        </div>
        <nav>
            <ul>
                <li><a class="link" href="01.index.php">Inicio</a></li>
                <li><a class="link" href="02.About_Me.php">Sobre Mim</a></li>
            </ul>
        </nav>
    </header>
<header>
    <?php 
    include 'Partes/header.php';
    ?>
</header>
<body>
    <section class="container_contato">  
        <main>
            <div class="facebook-form">
                <h2>Formulário de Contato</h2>
                <form action="mailto:leonardogeorge30@gmail.com" method="post" enctype="text/plain">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="assunto">Assunto</label>
                        <input type="text" id="assunto" name="assunto" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensagem">Descreva o trabalho que deseja</label>
                        <textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Enviar Mensagem
                    </button>
                </form>
            </div>
        </main>
    </section>
</body>
</html>