<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias em Destaque</title>
    <meta name="description" content="Fique por dentro das principais notícias em destaque, incluindo ciência, saúde e tecnologia.">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Notícias em Destaque</h1>
        <nav>
            <ul>
                <li><a href="index.php" aria-label="Página inicial">Home</a></li>
                <li><a href="receitas.html" aria-label="Receitas">Receitas</a></li>
                <li><a href="saude.html" aria-label="Saúde">Saúde</a></li>
                <li><a href="tecnologia.html" aria-label="Tecnologia">Tecnologia</a></li>
                <li><a href="entretenimento.html" aria-label="Entretenimento">Entretenimento</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <article class="destaque">
            <h2>Nova Descoberta Científica: O Impacto das Mudanças Climáticas na Biodiversidade</h2>
            <img width="626px" height="417px" src="https://cienciahoje.org.br/wp-content/uploads/2024/09/AdobeStock_573969318-725x480.jpeg" alt="Mudanças Climáticas">
            <p>A pesquisa recente revela que as mudanças climáticas estão afetando a biodiversidade global de maneiras sem precedentes, ameaçando espécies e ecossistemas.</p>
            <a href="#" aria-label="Leia mais sobre as mudanças climáticas">Leia mais...</a>
        </article>
        
        <section class="noticias">
            <h2>Outras Notícias</h2>
            <article>
                <h3>Inovações na Tecnologia: A Chegada da 5G no Brasil</h3>
                <img width="626px" height="417px" src="https://investnews.com.br/wp-content/uploads/2020/07/200612-F-PO640-1478.jpeg" alt="Tecnologia 5G">
                <p>A implementação da tecnologia 5G no Brasil promete revolucionar a conectividade e trazer melhorias significativas em vários setores.</p>
                <a href="#" aria-label="Leia mais sobre a tecnologia 5G">Leia mais...</a>
            </article>

            <article>
                <h3>Saúde Pública: Campanha de Vacinação Contra a Gripe</h3>
                <img width="626px" height="417px"  src="https://images02.brasildefato.com.br/cc02c9b8df34c448f623a973d2e4aa51.jpeg" alt="Vacinação">
                <p>A campanha de vacinação contra a gripe começa na próxima semana, visando proteger a população durante a temporada de doenças sazonais.</p>
                <a href="#" aria-label="Leia mais sobre a campanha de vacinação">Leia mais...</a>
            </article>
        </section>

        <section class="autores">
            <h2>Nossos Autores</h2>
            <p>Conheça a equipe que traz as melhores notícias para você:</p>
            <ul>
                <li>João Silva - Especialista em Ciência e Tecnologia</li>
                <li>Maria Oliveira - Jornalista de Saúde</li>
                <li>Carlos Mendes - Editor de Política</li>
                <li>Ana Costa - Colunista de Cultura</li>
            </ul>
        </section>

        <section class="contato">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = htmlspecialchars($_POST['nome']);
                    $email = htmlspecialchars($_POST['email']);
                    $mensagem = htmlspecialchars($_POST['mensagem']);
    
                if (!empty($nome) && !empty($email) && !empty($mensagem)) {
                    $to = "seu-email@exemplo.com";
                    $subject = "Contato do Site";
                    $body = "Nome: $nome\nEmail: $email\nMensagem: $mensagem";
                    $headers = "From: $email";
    
                if (mail($to, $subject, $body, $headers)) {
                    echo "<p>Mensagem enviada com sucesso!</p>";
                } else {
                    echo "<p>Falha ao enviar a mensagem. Tente novamente mais tarde.</p>";
                    }
                } else {
                    echo "<p>Por favor, preencha todos os campos.</p>";
                }
            }
            ?>

            <h2>Fale Conosco</h2>
            <form action="index.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <br>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Notícias em Destaque</p>
        <div class="redes-sociais">
            <h3>Sigam-nos nas redes sociais:</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>