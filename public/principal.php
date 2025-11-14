<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>EvoluIA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/principal.css">
</head>
<body>
  <header class="header">
    <h1 class="logo">EvoluIA</h1>
  </header>
<div class="background-svg">
  <svg viewBox="0 0 935 280" xmlns="http://www.w3.org/2000/svg">
    <!-- Céu -->
    <defs>
      <linearGradient id="grad" x1="0" y1="280" x2="0" y2="0">
        <stop offset="0%" stop-color="#ffd1b3"/>
        <stop offset="100%" stop-color="#ffb399"/>
      </linearGradient>
    </defs>
    <rect width="935" height="280" fill="url(#grad)" />

<defs>
  <!-- Gradiente radial do Sol -->
  <radialGradient id="gradienteSol" cx="50%" cy="50%" r="50%">
    <stop offset="70%" stop-color="#FFB74D"/> <!-- Cor do círculo interno -->
    <stop offset="100%" stop-color="#FFD65A"/> <!-- Cor do círculo externo -->
  </radialGradient>
</defs>
   

<!-- Raios do Sol (atrás do círculo) -->
<g stroke="#FFD65A" stroke-width="5" stroke-linecap="round">
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(0,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(30,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(60,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(90,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(120,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(150,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(180,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(210,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(240,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(270,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(300,140,90)"/>
  <line x1="140" y1="15" x2="140" y2="90" transform="rotate(330,140,90)"/>
</g>

<!-- Sol com gradiente -->
<circle cx="140" cy="90" r="50" fill="url(#gradienteSol)" />

<!-- Nuvens -->
<g fill="#fff6e8" opacity="0.9">
  <ellipse cx="650" cy="60" rx="55" ry="28"/>
  <ellipse cx="690" cy="50" rx="45" ry="23" transform="rotate(-5 690 50)"/>
  <ellipse cx="720" cy="55" rx="40" ry="20" transform="rotate(5 720 55)"/>
  <ellipse cx="610" cy="65" rx="40" ry="20" transform="rotate(-3 610 65)"/>
  <ellipse cx="655" cy="70" rx="50" ry="25" transform="rotate(3 655 70)"/>
</g>

<g fill="#fff6e8" opacity="0.85">
<ellipse cx="810" cy="90" rx="30" ry="15" transform="rotate(4 810 90)"/>  
<ellipse cx="780" cy="95" rx="35" ry="18" transform="rotate(-3 780 95)"/>
  <ellipse cx="840" cy="97" rx="25" ry="12" transform="rotate(-2 840 97)"/>
</g>

<g fill="#fff6e8" opacity="0.8">
<ellipse cx="930" cy="93" rx="25" ry="12" transform="rotate(-4 930 93)"/>  
<ellipse cx="900" cy="95" rx="30" ry="15" transform="rotate(3 900 95)"/>
  <ellipse cx="960" cy="100" rx="20" ry="10" transform="rotate(2 960 100)"/>
</g>  -

    <!-- Montanhas -->
 <path fill="#FF9B87" fill-opacity="1" d="M0,160L30,154.7C60,149,120,139,180,144C240,149,300,171,360,160C420,149,480,107,540,117.3C600,128,660,192,720,218.7C780,245,840,235,900,208C960,181,1020,139,1080,138.7C1140,139,1200,181,1260,192C1320,203,1380,181,1410,170.7L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
<path fill="#FF8A75" fill-opacity="0.9" d="M0,180L40,172C80,164,120,180,160,175C200,170,240,190,280,185C320,180,360,200,400,190C440,180,480,160,520,170C560,180,600,160,640,165C680,170,720,200,760,190C800,180,840,210,880,200C920,190,960,180,1000,185C1040,190,1080,175,1120,180L1440,180L1440,320L0,320Z"></path> 
 <path fill="#6EC1A6" fill-opacity="1" d="M0,256L21.8,256C43.6,256,87,256,131,250.7C174.5,245,218,235,262,229.3C305.5,224,349,224,393,224C436.4,224,480,224,524,229.3C567.3,235,611,245,655,240C698.2,235,742,213,785,192C829.1,171,873,149,916,160C960,171,1004,213,1047,229.3C1090.9,245,1135,235,1178,240C1221.8,245,1265,267,1309,261.3C1352.7,256,1396,224,1418,208L1440,192L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>

<!-- -->

  <!-- Flores  -->
    <g class="flores">
      <!-- Lado esquerdo  -->
      <image href="img/flor5.png" x="60" y="180" width="140" height="140"/>
      <image href="img/flor5.png" x="160" y="185" width="130" height="130"/>

      <!-- Lado direito  -->
      <image href="img/flor5.png" x="710" y="180" width="140" height="140"/>
      <image href="img/flor5.png" x="810" y="185" width="130" height="130"/>
    </g>
  </svg>
</div>

  <main class="container">
    <section class="greeting">
      <img src="img/avatares1.png" alt="Avatar do usuário" class="avatar">
      <h2>Bom dia, <?php echo "Usuário"; ?>!</h2>
    </section>

    <section class="cards">
      <div class="card coral">
        <h3>Como está seu dia hoje?</h3>
        <button>Check-in de Humor</button>
      </div>
      <div class="card mint">
        <h3>Sua Missão do Dia</h3>
        <button>Vamos lá</button>
      </div>
      <div class="card purple">
        <h3>Desafio de Hoje</h3>
        <button>Começar</button>
      </div>
    </section>


    <button class="sos">Um passo de cada vez, a jornada é sua!</button>

   <nav class="menu">
      <a href="principal.php"><img src="img/iconcasa-rem.png" alt=""> Início</a>
      <a href="diario.html"><img src="img/icondiario-rem.png" alt=""> Diário</a>
      <a href="comunidade.php"><img src="img/iconecomun-rem.png" alt=""> Comunidade</a>
      <a href="plano.html"><img src="img/iconerecur-rem.png" alt=""> Recursos Pro</a>
      <a href="perfil.php"><img src="img/icone_perfil-rem.png" alt=""> Perfil</a>
    </nav>
  </main>
</body>
</html>
