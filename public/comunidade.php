<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidade - EvoluIA</title>
    
    <link rel="stylesheet" href="css/comunidade.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>

    <div class="header-wrapper">
        <div class="screen">
            <header>
                Comunidade Anônima
            </header>
        </div>
    </div>

    <main>
        <div class="screen">
            
            <div class="community-header-box">
                <h3 style="margin-top:0; color:var(--accent);">Bem-vindo(a) à sua rede de apoio!</h3>
                <p style="margin-bottom:0;">Sua identidade é sempre **anônima**. Compartilhe e acolha sem julgamento.</p>
            </div>

            <button class="btn-primary" style="width:100%; margin-bottom:25px;">
                + Iniciar Novo Tópico
            </button>

            <div class="topic-filters" style="margin-bottom: 25px;">
                <h4 style="margin-bottom: 10px;">Filtros:</h4>
                <span class="topic-tag tag-ansiedade">Ansiedade</span>
                <span class="topic-tag tag-apoio">Apoio Mútuo</span>
                <span class="topic-tag tag-geral">Geral</span>
                <span class="topic-tag tag-popular">Populares (Hoje)</span>
            </div>

            <h2 style="font-weight: 800; margin-bottom: 20px;">Tópicos Recentes</h2>

            <div class="community-topic">
                <div style="color: var(--muted); font-size: 14px; margin-bottom: 5px;">Postado há 1h • <span class="topic-tag tag-ansiedade">Ansiedade</span></div>
                <h4 style="margin: 0 0 8px 0;">"Como lidar com a sensação de nó na garganta antes de dormir?"</h4>
                <p style="font-size: 14px; color: #333; margin: 0 0 10px 0;">Sinto um peso enorme na hora que deito. Alguma dica de respiração ou meditação?</p>
                <div style="font-size: 13px; color: var(--accent); font-weight: 700;">32 Comentários • 5 Reações</div>
            </div>

            <div class="community-topic">
                <div style="color: var(--muted); font-size: 14px; margin-bottom: 5px;">Postado há 5h • <span class="topic-tag tag-apoio">Apoio Mútuo</span></div>
                <h4 style="margin: 0 0 8px 0;">"Alguém mais se sentindo esgotado no trabalho essa semana?"</h4>
                <p style="font-size: 14px; color: #333; margin: 0 0 10px 0;">Parece que a energia acabou. Se puderem mandar uma palavra de força, agradeço.</p>
                <div style="font-size: 13px; color: var(--accent); font-weight: 700;">8 Comentários • 12 Reações</div>
            </div>
            
        </div>
    </main>

    <nav class="bottom">
        <div class="item">
           <a href="principal.html"> Início</a>
        </div>
        <div class="item">
             <a href="diario.html">Diario</a>
        </div>
        <div class="item">
            <a href="plano.html"> Recursos Pro</a>
        </div>
        <div class="item active-nav">
            <a href="comunidade.php"> Comunidade</a>
        </div>
        <div class="item">
             <a href="perfil.html">Perfil</a>
        </div>
    </nav>

</body>
</html>