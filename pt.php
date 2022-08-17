<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manifesto da terceira paisagem</title>
  <link rel="stylesheet" href="css/terceirapaisagem.css"> 
  <link rel="stylesheet" href="css/print.css" media="print">

  <?php $media = "screen" ?>
  <?php if(isset($_GET["print"])): ?>
    <?php $media = "printa4" ?>
    <script src="paged/hyphens.pt.js"></script>
    <script src="paged/Hyphenopoly/Hyphenopoly_Loader.js"></script>
    <script src="paged/paged.polyfill.js"></script>
    <script src="paged/createToc.js"></script>
    <script src="paged/footNotes.js"></script>
    <script src="paged/reloadInPlace.js"></script>
    <script src="paged/hyphenationHook.js"></script>
    <script src="paged/handlers.js"></script>
    <link rel="stylesheet" href="paged/pagedjs.css">
  <?php endif ?>

  <?php if(isset($_GET["printa5"])): ?>
    <?php $media = "printa5" ?>
    <script src="paged/hyphens.pt.js"></script>
    <script src="paged/Hyphenopoly/Hyphenopoly_Loader.js"></script>
    <script src="paged/paged.polyfill.js"></script>
    <script src="paged/createToc.js"></script>
    <script src="paged/footNotes.js"></script>
    <script src="paged/reloadInPlace.js"></script>
    <script src="paged/hyphenationHook.js"></script>
    <script src="paged/imposition.js"></script>
    <script src="paged/imageTranslation.js"></script>
    <link rel="stylesheet" href="css/a5.css">
    <link rel="stylesheet" href="paged/pagedjs-a5.css">
  <?php endif ?>
</head>
<body>
  <nav id="tools">
    <button id="menulink">
      <span>menu</span>
    </button>
    <ul id="menu">
      <li><a href="?print">Imprimir (A4)</a></li>
      <li><a href="#">Imprimir (A5, folheto)</a></li>
      <li><a href="#">Descarregar</a></li>
      <li><a href="#">Encomendar</a></li>
      <li>—</li>
      <li><a href="fr.php">Français</a></li>
    </ul>
  </nav>

  </nav>

  <header id="header">
    <div>
      <h1>Manifesto da <br>terceira paisagem</h1>
      <h2>Gilles Clément</h2>
      <p>Tradução de <br class="min">Lúcia Leistner</p>
    </div>
    <figure id="echo">
      <img src="images/echo.nb.png" alt="Echo d’un tiers paysage">
    </figure>
  </header>

  <blockquote id="blockquote">
    <p>“Fragmento indeciso do jardim planetário, a Terceira paisagem se compõe na soma dos espaços negligenciados pelos homens. Essas margens apresentam uma diversidade biológica que não é por ora reconhecida como sendo uma riqueza. Terceira paisagem refere-se a Terceiro Estado — e não a Terceiro Mundo; o espaço não expressando poder nem submissão ao poder. Ela faz menção ao panfleto de Sieyès, de 1789:</p>
    <p><span class="sieyes"><em>O que é o terceiro estado? — Tudo<br>O que ele realizou até agora? — Nada<br>O que ele almeja alcançar? — Algo.</em></span>”</p>
  </blockquote>
  
  <section id="index">
    <h2>Fragmento indeciso do jardim&nbsp;planetário</h2>
    <h3>Índice</h3>
    <ul>
      <li><a href="#definicoes">Definições</a></li>
      <li><a href="#origem"><span class="enum">I </span>Origem</a></li>
      <li><a href="#extensao"><span class="enum">II </span>Extensão</a></li>
      <li><a href="#caracteristicas"><span class="enum">III </span>Características</a></li>
      <li><a href="#estatuto"><span class="enum">IV </span>Estatuto</a></li>
      <li><a href="#desafios"><span class="enum">V </span>Desafios</a></li>
      <li><a href="#mobilidade"><span class="enum">VI </span>Mobilidade</a></li>
      <li><a href="#evolucao"><span class="enum">VII </span>Evolução</a></li>
      <li><a href="#escala"><span class="enum">VIII </span>Escala</a></li>
      <li><a href="#representacoes-e-limites"><span class="enum">IX </span>Representações e limites</a></li>
      <li><a href="#quanto-ao-tempo"><span class="enum">X </span>Quanto ao tempo</a></li>
      <li><a href="#quanto-a-sociedade"><span class="enum">XI </span>Quanto à sociedade</a></li>
      <li><a href="#quanto-a-cultura"><span class="enum">XII </span>Quanto à cultura</a></li>
      <li><a href="#manifesto"><span>Manifesto</span></a></li>
    </ul>
  </section>
 
  <div id="content">


  <section class="text" id="definicoes">
    <h2>Definições</h2>
    <p>Refúgios para a diversidade, constituídos pela soma dos baldios de diferentes origens, das reservas e das áreas de vegetação primária.</p>
    <p>O <em>baldio</em> resulta do abandono de um terreno tendo sido antes utilizado. Suas origens são múltiplas: devoluto agrícola, industrial, urbano, turístico, etc. Os baldios são considerados improdutivos, como as terras alqueivadas.</p>
    <p>A <em>reserva</em> é um lugar não ainda explorado<span class="fn">Em pintura, a “reserva” é a parte da tela que não é recoberta de tinta.</span>, devido ao acaso ou à dificuldade de acesso, tornando o cultivo impossível ou dispendioso. Ela surge por substração do território antropizado. As reservas existem de fato (<em>áreas de vegetação primária</em>) ou bem por decisão administrativa.</p>
    <p>O caráter indeciso da <em>Terceira paisagem</em> corresponde à evolução livre do conjunto dos seres biológicos presentes em um território em ausência de qualquer decisão humana<span class="fn">A decisão administrativa de criação de uma reserva circunscreve um território sem alterar a sua mecânica própria de evolução, ela legitima a indecisão humana neste território.</span>.</p>
    <p>O <em>Jardim planetário</em> configura o planeta como um jardim. A intuição de finitude ecológica faz aparecer os limites da biosfera como sendo o recinto<span class="fn">A palavra “jardim” vem do germânico <em>Garten</em>: cercado, curral.</span> de todos os seres vivos.</p>
    <p>A <em>diversidade</em> se refere à quantidade de diferentes espécies vivas dentre os animais, vegetais e os seres simples (bactérias, vírus, etc.). Os seres humanos estão compreendidos em uma só e única espécie, sua diversidade se exprime pelas variedades étnicas e culturais.</p>
  </section>
  
  <section class="text" id="origem">
    <h2><span class="enum">I </span>Origem</h2>
    <p>A expressão Terceira paisagem vem de uma observação singular realizada na região do <em>Limousin</em>.</p>
    <p>A análise da paisagem de Vassivière<span class="ndt">O “centro internacional de arte e da paisagem” (criado em 1983) de Vassivière é um centro de arte contemporânea criado em uma ilha, sobre um lago artificial, na região Limousin. Ele é a sede de uma renomada residência artística pluridisciplinar.</span> foi realizada em 2002, solicitada pelo <em>Centro de arte e da paisagem;</em> ela nos permitiu entrever o caráter artificial do que parece ser “naturalmente presente”: a superfície das águas represadas, as árvores de uma floresta manejada, os verdes pastos destinados aos bovinos… Um conjunto organizado segundo as facilidades do relevo, da exposição, dos acessos.</p>
    <p>O que percebe um pássaro — e que nosso olhar pode abraçar desde um topo — é um tapete tecido de formas sombrias e imperfeitas, as florestas, e de superfícies claras e bem delimitadas, as pastagens.</p>
    <p>A alternância de árvores e pastos dá espessura à paisagem, a anima de perspectivas curvas, reveladas por um relevo gracioso e intenso. Esse equilíbrio de sombras e luzes deixa transparecer um dispositivo de ordem econômica. O imenso território que abrange esse equilíbrio pode enganar o viajante: trata-se de um projeto? De uma casualidade histórica? Desmembramento de parcelas, ‘habitat’ disperso, variações do relevo; tudo isso constitui um dispositivo arraigado na geografia e na sociedade, capaz de combater duravelmente as ferramentas de remembramento consideradas. Vestígio de uma policultura passada da qual poucas fisionomias permaneceram, sendo substituídas por apenas duas riquezas dominantes: as árvores e os pastos. Puros produtos da PAC<span class="ndt">A “PAC”, Política Agrícola Comum da União Europeia, é um sistema de subsídios à agricultura e programas de desenvolvimento em áreas afins; foi criada em 1957 e posta em prática em 1962. Fortemente criticada, a PAC pesa 40% do orçamento europeu; considerada complexa e injusta, ela é constantemente renegociada.</span> cujo poder de redução, portanto considerável, ainda não eliminou toda a diversidade.</p>
    <p>Se cessarmos de ver a paisagem como um objeto da indústria, descobriremos bruscamente — seria isto um descuido do cartógrafo, uma negligência política? — uma quantidade de espaços indecisos, desprovidos de função, aos quais é difícil se atribuir uma definição. Esse conjunto não pertence nem ao território da sombra, nem ao da luz. Situa-se às margens. No limiar dos bosques, ao longo das estradas e rios, nos recantos esquecidos das culturas, lá onde as máquinas não passam. Ele cobre áreas de dimensões modestas, dispersadas como as arestas perdidas das culturas; ou então vastas, como as turfeiras, cerrados ou propriedades agrícolas recentemente alqueivadas.</p>
    <p>Em nada se assemelham formalmente esses fragmentos de paisagem. Porém, entre eles há um ponto em comum: todos constituem um refúgio para a diversidade que vem sendo rechaçada de qualquer outro lugar. Tudo isso nos leva a reuni-los em um termo comum. Proponho Terceira paisagem, terceiro termo originado por uma análise que dispôs os dados principais visíveis ou à sombra, ou bem à luz.</p>
    <figure id="fig-1">
      <span class="image">
        <img loading="lazy" src="images/Croquis-01-a.png" alt="">
        <figcaption>
          <p>Paisagem em periferia do limousin<br>Luz dominante</p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-01-b.png" alt="">
        <figcaption>
          <p>Paisagem dominante no limousin<br>Equilíbrio sombra/luz</p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-01-c.png" alt="">
        <figcaption>
          <p>Paisagem no entorno de vassiviere<br>Sombra dominante</p>
        </figcaption>
      </span>
    </figure>    
    <p>Terceira paisagem refere-se a Terceiro Estado — e não a Terceiro Mundo; o espaço não expressando poder nem submissão ao poder. Ela faz menção ao panfleto de Sieyès, de 1789<span class="ndt">Inspirado no panfleto de Emmanuel-Joseph Sieyès, 1748 – 1836. Escritor, eclesiástico e político francês, ele foi teórico revolucionário e membro da Academia Francesa. No texto citado o autor evoca que o Terceiro Estado é uma nação completa e que não necessita dos outros dois estamentos: o clero e a nobreza.</span>:</p>
    <p><span class="sieyes"><em>O que é o terceiro estado? — Tudo<br>O que ele realizou até agora? — Nada<br>O que ele almeja alcançar? — Algo.</em></span>”</p>
  </section>

  <section class="text" id="extensao">
    <h2><span class="enum">II </span>Extensão</h2>
    <p><span class="enum">1 </span>A vegetação primária e as reservas se referem aos espaços naturais.</p>
    <p><span class="enum">2 </span>Os baldios se referem a todos os espaços. A cidade, a indústria e o turismo produzem tantos baldios quanto a agricultura, a silvicultura e a pecuária.</p>
    <p><span class="enum">3 </span>O baldio é subordinado a um sistema de gestão; de modo geral, enquanto espaço abandonado, ele se origina a partir de uma estratégia de planejamento.</p>
    <p><span class="enum">4 </span>Todo planejamento produz um baldio.</p>
    <p><span class="enum">5 </span>Nas zonas rurais, os baldios ocupam os relevos acidentados, incompatíveis com as máquinas agrícolas, assim como os remanescentes diretamente ligados à sua estruturação: limites das terras cultivadas, sebes, limiares, beiras de estrada, etc.</p>
    <p><span class="enum">6 </span>Nos setores urbanos eles correspondem aos terrenos à espera de um projeto ou de sua construção, de projetos suspensos à obtenção de orçamento ou de decisões político-administrativas. Sendo esse lapso temporal frequentemente longo, os baldios urbanos favorecem o desenvolvimento de bosques (“bosques dos baldios”<span class="fn">O estudo “bosques dos baldios”, dirigido por Patrick Bouchain, demonstra como um território abandonado se converte em riqueza.</span>).</p>
    <p><span class="enum">7 </span>A cidade produz baldios proporcionais à sua extensão. Os baldios no coração da cidade são menores e raros; nas periferias, vastos e abundantes.</p>
    <figure id="fig-2">
      <span class="image">
        <img loading="lazy" src="images/Croquis-02.jpg" alt="">
        <figcaption>
          <p>Desenvolvimento concêntrico do tecido urbano</p>
          <p>◼ Baldios</p>
        </figcaption>
      </span>
    </figure>
    <p><span class="enum">8 </span>As zonas rurais apresentam baldios — e vegetação primária — mais significativos à medida que seu relevo é mais pronunciado. Eles se apresentam mais esparsos quando o relevo é tênue.</p>
    <figure id="fig-3">
      <span class="image">
        <img loading="lazy" src="images/Croquis-03-a.png" alt="">
        <figcaption>
          <p>Baldios raros ou ausentes</p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-03-b.png" alt="">
        <figcaption>
          <p>Baldios abundantes e vastos</p>
        </figcaption>
      </span>
    </figure>
    <p><span class="enum">9 </span>A disponibilidade dos territórios de refúgio para a diversidade é diretamente ligada à possibilidade de:<br> — explorar mecanicamente o setor rural;<br> — ocupar o solo dos setores urbanos.</p>
    <p><span class="enum">10 </span>Em todos os casos — planificação das zonas urbanas ou rurais — o relevo contribui com o desenvolvimento da diversidade e, portanto, da Terceira paisagem.</p>
    <p><span class="enum">11 </span>As fronteiras da Terceira paisagem são as fronteiras do Jardim planetário, os limites da biosfera.</p>
  </section>

  <section class="text" id="caracteristicas">
    <h2><span class="enum">III </span>Características</h2>
    <p>Naturalmente, a Terceira paisagem constitui um território de hospitalidade para as inúmeras espécies que não mais encontram outros refúgios. O resíduo das espécies que não se encontram abrigadas na Terceira paisagem se constitui de: plantas cultivadas, animais de criação e os outros seres diretamente dependentes da agricultura e da pecuária<span class="fn">A papoula-vermelha (<em>Papaver rhoeas</em>), vegetação das colheitas, depende das práticas agrícolas. Ele aparece quando a terra é arada ou agredida. Ela não surge em outras situações. Ela pertence — como as plantas ruderais e as outras macegas de cultura — à categoria das plantas “daninhas” que são combatidas e ameaçadas de extinção, mas dotadas de uma grande capacidade de regeneração.</span>.</p>
    <p>Os espaços de diversidade se originam de três fontes distintas: das áreas de vegetação primária, dos baldios e das reservas.</p>
    <p>As <em>áreas de vegetação primária</em> são territórios nunca explorados. Eles evoluem lentamente, ou simplesmente não mais evoluem. As espécies que lá se desenvolvem testemunham o apogeu da vida em uma determinada condição do meio ambiente (clímax). Algumas florestas primárias subsistem ainda em nosso mundo, as outras espécies ditas primárias se encontram repartidas nas pastagens alpinas, nos cerrados climácicos, nas tundras, etc. As áreas de vegetação primária apresentam um aspecto uniforme apesar de abrigarem usualmente uma forte diversidade.</p>
    <figure id="fig-4">
      <span class="image">
        <img loading="lazy" src="images/Croquis-04-a.png" alt="">
        <figcaption>
          <p>52 espécies presentes nos espaços intocados </p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-04-b.png" alt="">
        <figcaption>
          <p>16 espécies presentes em uma plantação sem tratamentos</p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-04-c.png" alt="">
        <figcaption>
          <p>5 espécies presentes em uma plantação com tratamentos (por vezes 1)</p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-04-d.png" alt="">
        <figcaption>
          <p>Exemplo tirado de um fragmento de paisagem do limousin – Primavera 2003</p>
        </figcaption>
      </span>
    </figure>
    <p>Os baldios decorrem do abandono de uma atividade; eles evoluem naturalmente rumo a uma paisagem secundária.</p>
    <p>Uma floresta secundária pode surgir em um baldio. Ela se caracteriza por uma <em>forte dinâmica</em>. Um baldio recente acolhe rapidamente as espécies pioneiras, estas desaparecerão, dando lugar às espécies mais estáveis até que se alcance um equilíbrio. As paisagens secundarizadas são heterogêneas e caóticas.</p>
    <p>As <em>reservas</em> são zonas preservadas da atividade humana, por decisão. São zonas julgadas vulneráveis, ou raras, ou sedes de uma diversidade ameaçada. Elas podem também serem consideradas sagradas (proibidas), territórios dos deuses, como o cume das montanhas Indianas, as localidades “fady” de Madagascar, os vales “leyak” de Bali...</p>
    <p><span class="enum">1 </span>As reservas e as áreas de vegetação primária se parecem. Trata-se do <em>clímax</em>, uma configuração estável da qual o aspecto pouco muda no tempo<span class="fn">A classificação dos meios instáveis em reserva se justifica pela singularidade de seu biótopo e das espécies de seu ecossistema. Uma turfeira se “fecha”, uma escombreira (entulho de mineração) se cobre de matas rapidamente, por vezes no tempo de uma vida humana. A paisagem se modifica, as espécies também; a sucessão de formas e seres constitui uma característica original, uma nova diversidade.</span>.</p>
    <p><span class="enum">2 </span>As áreas de vegetação primária abrigam, ainda hoje, as maiores diversidades planetárias.</p>
    <p><span class="enum">3 </span>Os baldios, por sua vez, nunca se beneficiam do estatuto de reserva. Eles abrigam espécies <em>pioneiras</em> apresentando um ciclo curto. Cada uma delas prepara a vinda das espécies seguintes, cujos ciclos se distendem, até que uma permanência se estabeleça.</p>
    <p><span class="enum">4 </span>O aparecimento e o desaparecimento rápido das espécies pioneiras, beneficiando às espécies mais estáveis, é uma característica dos baldios. De fato, um terreno nu, em ausência de concorrência, é a condição perfeita para que as pioneiras se estabeleçam.</p>
    <p><span class="enum">5 </span>À medida que o terreno se “fecha” a dinâmica de conquista se atenua. A vida nos baldios é curta<span class="fn">São necessários menos de quarenta anos para que um devoluto agrícola se transforme em mata densa.</span>.</p>
    <p><span class="enum">6 </span>Cada imprevisto natural contribui à reabertura de um baldio “fechado”. Ele pode ser considerado como uma reciclagem do baldio em si mesmo, permitindo o aparecimento de novas espécies pioneiras<span class="fn">Uma clareira “châblis” (consequência da queda acidental de árvores: vento, vetustez, pragas…) facilita o estabelecimento de plantas de sol. Na primavera de 2002 a clareira deixada pela tempestade <em>Lothar</em> (12/1999) já estava animada de <em>digitais</em> e <em>epilóbios</em>: Exposição “o jardim da tempestade” demonstrando a pujança jardineira dos traumatismos naturais; realizada para o Centro de Arte e da Paisagem de Vassivière em 2002, mostrada em São Dinis, na Reunião em 2003.</span>.</p>
    <p><span class="enum">7 </span>A flora dos baldios não é exclusivamente constituída de espécies nativas. Ela abriga, possivelmente, todas as floras exóticas compatíveis com o meio disponível (bioma).</p>
    <p><span class="enum">8 </span>A flora das áreas primárias e das reservas exclui todas as outras. Enquanto o meio mantém seu estágio “fechado” ele se opõe ao aparecimento dos seres exógenos<span class="fn">Excepto no caso de um ecossistema intensamente perturbado, onde a pressão das pioneiras exógenas é tão forte que os meios climácicos originais se desorganizam. Como no caso da <em>Rubus alceifolius</em> (da família das silvas: amoras, framboesas, etc.) na ilha da Réunião no oceano índico.</span>.</p>
    <p><span class="enum">9 </span>A soma dos diferentes baldios constitui o território de predileção da miscigenação planetária.</p>
    <p><span class="enum">10 </span>A soma dos meios primários constitui o único território de resistência à miscigenação planetária.</p>
    <p><span class="enum">11 </span>A emergência de um baldio, como qualquer outro mecanismo de secundarização, é acompanhada de uma perda da diversidade de espécies estáveis. Às vezes de maneira irreversível.</p>
    <p><span class="enum">12 </span>A resistência dos meios primários corresponde às situações de isolamento geográfico. A quantidade de espécies presentes em nosso planeta está diretamente vinculada à quantidade de espaços isolados geograficamente.</p>
    <p><span class="enum">13 </span>À variação das situações de isolamento — durante o desenvolvimento da vida na Terra — corresponde uma variação da quantidade das espécies.</p>
    <p><span class="enum">14 </span>Uma pangeia (continente único) abriga menos espécies que diversos continentes separados de mesma superfície. A Terra vivenciou várias derivas continentais mas também vários períodos de convergência, ao menos cinco.</p>
    <p><span class="enum">15 </span>A forma atual de nosso planeta corresponde a um pico em termos de diversidade.</p>
    <p><span class="enum">16 </span>As atividades humanas aceleram o processo de um movimento levando a uma situação análoga a uma nova pangeia, diminuindo assim a quantidade de espécies isoladas e, por conseguinte, a quantidade total de espécies.</p>
    <figure id="fig-5">
      <span class="image">
        <img loading="lazy" src="images/Croquis-05-a.png" alt="">
        <figcaption>
          <p>
            Áreas de vegetação primaria e reservas<br>
            — Grande diversidade específica<br>
            — espécies estáveis<br>
            — dinâmica lenta<br>
            — forte endemismo
          </p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-05-b.png" alt="">
        <figcaption>
          <p>
            Baldios<br>
            — Diversidade específica heterogênea (endógena e exógena)<br>
            — espécies instáveis<br>
            — fraco endemismo
          </p>
        </figcaption>
      </span>
      <span class="image">
        <img loading="lazy" src="images/Croquis-05-c.png" alt="">
        <figcaption>
          <p>
            Espaços controlados<br>
            — Diversidade específica rara ou inexistente<br>
            — espécies mantidas artificialmente graças á energia contrária<br>
            — endemismo mínimo ou nulo
          </p>
        </figcaption>
      </span>
    </figure>
    <p><span class="enum">17 </span>O desenvolvimento contínuo da antropização planetária leva à produção constante de baldios e à redução das áreas de vegetação primária.</p>
    <p><span class="enum">18 </span>A fase subsequente desse processo é a eliminação das áreas de vegetação primária e a generalização dos meios secundários. Nesse ponto o planeta pode se assimilar a um imenso baldio, funcionando a partir de um número reduzido de espécies em equilíbrio com a atividade humana.</p>
    <p><span class="enum">19 </span>O incógnito é a quantidade e a natureza das espécies originadas pela miscigenação planetária e capazes de atingir esse equilíbrio. Esse equilíbrio é ele mesmo suspenso, de acordo com a quantidade de seres humanos em atividade.</p>
    <p><span class="enum">20 </span>A Terceira paisagem, território de diversidade, é diretamente ligada à demografia, questão tabu.</p>
  
  </section>

  <section class="text" id="estatuto">
    <h2><span class="enum">IV </span>Estatuto</h2>
    <p><span class="enum">1 </span>A Terceira paisagem se encontra dispersada em territórios múltiplos, apresentando estatutos oficiais variados, atendendo a diferentes objetivos e desafios, por vezes contraditórios.</p>
    <p><span class="enum">2 </span>De um ponto de vista administrativo, um território declarado “reserva” é submetido à proteção, monitoramento, multas. Uma beira de estrada ou baldio urbano não são submetidos à proteção. São espaços que buscamos restringir ou eliminar. Eles constituem, entretanto, reservas de biodiversidade.</p>
    <p><span class="enum">3 </span>Os desafios próprios à Terceira paisagem se situam além — ou mesmo acima — das questões territoriais.</p>
    <p><span class="enum">4 </span>A realidade da Terceira paisagem é de ordem cognitiva. Ela está relacionada com a maleabilidade do objeto estudado: o da vida no planeta. Ela coincide, temporariamente, com os traçados administrativos. Mas se encontra, de maneira perene, no âmbito ético do cidadão planetário.</p>
    <p><span class="enum">5 </span>Por sua função de hospitalidade, pelos desafios que representa a diversidade, pela necessidade de protegê-la — ou preservar sua dinâmica —, a Terceira paisagem adquire uma dimensão política.</p>
    <p><span class="enum">6 </span>O estatuto da Terceira paisagem, demonstrado mas não formalizado, é de ordem planetária. A sua preservação não depende de uma corporação de sábios, mas da consciência coletiva.</p>
    <p><span class="enum">7 </span>Um fragmento compartilhado pela consciência coletiva.</p>
  </section>

  <section class="text" id="desafios">
    <h2><span class="enum">V </span>Desafios</h2>
    <p>Os desafios da Terceira paisagem são os desafios da diversidade</p>
    <p><span class="enum">1 </span>A diversidade se manifesta pela quantidade de espécies presentes no planeta e pela variedade de seus <em>comportamentos</em>.</p>
    <p><span class="enum">2 </span>A variedade de comportamentos depende da latitude oferecida a cada espécie (liberdade de ação), mas também da amplitude biológica de cada uma delas (capacidade de adaptação).</p>
    <p><span class="enum">3 </span>Nas sociedades humanas a variedade de comportamentos se desenrola dentro de uma só espécie (<i>Homo sapiens</i>). Esta variedade é tributária da cultura dentro da qual cada indivíduo evolui.</p>
    <p><span class="enum">4 </span>Teoricamente a diversidade é infinita.</p>
    <p><span class="enum">5 </span>A quantidade — das espécies e dos comportamentos — aumenta ou diminui segundo as modificações dos meios.</p>
    <p><span class="enum">6 </span>As catástrofes (meteoritos, atividade vulcânica, guerras) conduzem a uma redução massiva e brutal da quantidade. As transformações lentas (glaciação ou tropicalização) conduzem à substituição das espécies, à redução ou à expansão progressiva da quantidade.</p>
    <p><span class="enum">7 </span>A antropização planetária, se comparada aos fenômenos naturais, conduz à redução da quantidade — semelhante à causada por uma catástrofe.</p>
    <p><span class="enum">8 </span>A uniformização das práticas antrópicas leva à redução das variedades de comportamento.</p>
    <p><span class="enum">9 </span>Perante esta oscilação da quantidade, a Terceira paisagem se posiciona enquanto território de refúgio (situação passiva) e enquanto espaço de inventividade possível (situação ativa).</p>
    <p><span class="enum">10 </span>Enquanto reservatório das inúmeras configurações genéticas planetárias, a Terceira paisagem representa o porvir biológico.</p>
    <figure id="fig-6">
      <span class="image">
        <img loading="lazy" src="images/Croquis-06.jpg" alt="">
      </span>
      <figcaption>
        <p>
          Floresta decícua temperada<br>
          Vegetação mediterrânea<br>
          Deserto tropical<br>
          Savana seca<br>
          Floresta tropical e subtropical seca e savana úmida<br>
          Deserto costeiro<br>
          Vegetação mediterrânea<br>
          Floresta pluvial temperada
        </p>
        <p>
          Ártico<br>
          Floresta boreal de coníferas<br>
          Floresta decícua<br>
          Deserto temperado<br>
          Floresta de monção<br>
          Floresta tropical úmida<br>
          Floresta pluvial equatorial<br>
          Floresta tropical úmida<br>
          Pampas<br>
          Estepes frias
        </p>
        <p>
          O continente teórico<br>
          Segundo a “carta dos biomas” de C. Troll<br>
          em “les végétaux dans la biosphère” de P. Ozenda<br>
        </p>
      </figcaption>
    </figure>
    <p><span class="enum">11 </span>Toda alteração fatal da Terceira paisagem compromete as possibilidades de invenção biológica e orienta a evolução, reduzindo a quantidade de roteiros possíveis.</p>
    <p><span class="enum">12 </span>A amplitude biológica das espécies animais e vegetais nunca ultrapassa a capacidade dos biomas do qual fazem parte<span class="fn">Excepcionalmente, algumas espécies cosmopolitas são capazes de atravessar os limites das zonas climáticas e se adaptar a outros biomas. Como a <em>Pteris aquilina</em> (samambaia águia), comum na Europa mas também nos outros continentes, mesmo nas zonas tropicais.</span>.</p>
    <p><span class="enum">13 </span>A espécie humana, por sua vez, não obedece às regras do meio que lhe seja favorável (por exemplo, uma zona climática temperada); ela se adapta a todas as zonas climáticas.</p>
    <p><span class="enum">14 </span>As próteses (roupas, casas, veículos…) aumentam a amplitude biológica natural da espécie humana. Elas permitem aos humanos se adaptar a todas as condições de vida.</p>
    <p><span class="enum">15 </span>A multiplicação da quantidade de humanos no planeta não corresponde ao acréscimo da diversidade de comportamentos sociais. A miscigenação cultural se traduz na redução das possibilidades de comportamento.</p>
    <p><span class="enum">16 </span>Em relação aos animais e vegetais, a miscigenação planetária opera seletivamente — extinção devido à competição — mas também de maneira dinâmica — comportamentos inéditos, hibridação, mutações e, até mesmo, surgimento de novas espécies.</p>
    <p><span class="enum">17 </span>A ocupação planetária do gênero humano induz à redução dos territórios disponíveis para a Terceira paisagem, ou seja, à diversidade.</p>
    <p><span class="enum">18 </span>A redução massiva da diversidade provém, além dos efeitos provocados pela miscigenação planetária<span class="fn">A miscigenação planetária provoca uma concorrência súbita entre os seres. A esta confrontação, a resposta no tempo coincide com a perda do número de espécies (pressão seletiva). Mais este tempo é longo, mais a perda é importante.</span>, da contração dos territórios disponíveis ao seu desenvolvimento, assim como das práticas exercidas nestes meios.</p>
    <p><span class="enum">19 </span>A diversidade — por conseguinte a evolução dos seres vivos — é diretamente tributária do número de humanos e de suas atividades e práticas.</p>
    <p><span class="enum">20 </span>O incremento do número de humanos impacta os territórios reservados à Terceira paisagem.</p>
    <p><span class="enum">21 </span>As práticas de exploração planetárias impactam os substratos: água, terra, ar. Elas alteram as capacidades biológicas e reduzem o desempenho do “motor” biológico, proporcionalmente à energia adversa<span class="fn">Toda energia empregada em restringir a natureza pode ser considerada uma “energia contrária”. A energia contrária se opõe à “energia própria” da qual dispõe cada ser para se desenvolver. As práticas chamadas “moderadas” tendem a minimizar a energia contrária e explorar vantajosamente a energia própria.</span> disponibilizada para as atividades de exploração.</p>
    <p><span class="enum">22 </span>As práticas de exploração planetárias atuais respondem massivamente à economia de mercado calcada na estratégia liberal na qual o objetivo é o lucro imediato.</p>
    <p><span class="enum">23 </span>A economia de mercado calcada nessa estratégia intensifica a produção de produtos de consumo, conduz a um acréscimo constante do número de consumidores, portanto, de habitantes.</p>
    <p><span class="enum">24 </span>A perenidade da Terceira paisagem — e da diversidade do futuro biológico — está ligada ao número de humanos e, sobretudo, às práticas por eles perpetradas.</p>
  </section>

  <section class="text" id="mobilidade">
    <h2><span class="enum">VI </span>Mobilidade</h2>
    <p>Por ser a sede de fortes dinâmicas, a Terceira paisagem muda de aspecto no tempo.</p>
    <p><span class="enum">1 </span>Em decorrência dos intercâmbios internos: <br>— dinâmica natural rumo ao clímax florestal.</p>
    <figure id="fig-7">
      <span class="image">
        <img loading="lazy" src="images/Croquis-07.jpg" alt="">
      </span>
      <figcaption>
        <div><p>Devoluto jovem</p><p>Diversidade média</p></div>
        <p>→</p>
        <div><p>Devoluto guarnecido</p><p>Pico de diversidade</p></div>
        <p>→</p>
        <div><p>Floresta</p><p>Diversidade média</p></div>
      </figcaption>
    </figure>
    <p><span class="enum">2 </span>Em decorrência dos intercâmbios com o meio: <br>— uma pressão intensa do entorno do território antropizado (práticas poluentes) conduz à perda de diversidade da Terceira paisagem. <br>— uma pressão tênue do entorno do território antropizado (práticas não poluentes) mantém uma diversidade equilibrada da Terceira paisagem que pode influenciar positivamente o meio ambiente.</p>
    <figure id="fig-8">
      <span class="image">
        <img loading="lazy" src="images/Croquis-08.jpg" alt="">
      </span>
      <figcaption>
        <p>Equilíbrio terceira paisagem<br>E território antropizado<br>(limousin)</p>
        <p>Pressão do território antropizado<br>Sobre a terceira paisagem<br>Efeitos de esterilização e<br>Perda de diversidade</p>
        <p>Leve pressão do<br>Território antropizado<br>Efeitos de propagação e<br>Acréscimo da diversidade</p>
        <p>Intercâmbios com o meio circunvizinho<br>Influências “naturais”</p>
        <p>T.P. = Terceira paisagem<br>T.A. = Território antropizado</p>
      </figcaption>
    </figure>
    <p><span class="enum">3 </span>A Terceira paisagem adapta sua forma e constituição segundo as necessidades do mercado e da atualidade política.</p>
    <figure id="fig-9">
      <span class="image">
        <img loading="lazy" src="images/Croquis-09.jpg" alt="">
      </span>
      <figcaption>        
        <p>Desbravamento<br>perda de diversidade</p>
        <p>(Devoluto) Renaturalização<br>acréscimo da diversidade</p>
        <p>Flexibilidade da relação T.P. / T.A.<br>de acordo com o estímulo do mercado<br>e das manobras políticas</p>
      </figcaption>
    </figure>
  </section>
    
  <section class="text" id="evolucao">
    <h2><span class="enum">VII </span>Evolução</h2>
    <p><span class="enum">1 </span>O desenvolvimento territorial da Terceira paisagem coincide com o desenvolvimento da planificação territorial.</p>
    <p><span class="enum">2 </span>A expansão urbana e das vias de comunicação conduz ao incremento da quantidade de baldios.</p>
    <p><span class="enum">3 </span>O incremento da quantidade de baldios produzidos pela planificação territorial nem sempre conduz ao acréscimo da superfície global da Terceira paisagem, mas frequentemente à sua fragmentação.</p>
    <p><span class="enum">4 </span>A multiplicação de fragmentos da Terceira paisagem é um fator seletivo de sua diversidade. Sobrevivem somente as espécies cujo território biológico é compatível com a superfície disponível no fragmento.</p>
    <p><span class="enum">5 </span>A planificação a partir do desenvolvimento produz uma trama territorial, o tecido urbano.</p>
    <figure id="fig-10">
      <span class="image">
        <img loading="lazy" src="images/Croquis-10-A.jpg" alt="">
      </span>
      <figcaption>
        <p>Baldio compacto<br>Estabilidade da quantidade de espécies</p>
        <p>Baldio fragmentado<br>Redução da quantidade de espécies</p>
      </figcaption>
    </figure>
    <figure id="fig-11">
      <span class="image">
        <img loading="lazy" src="images/Croquis-10-B.jpg" alt="">
      </span>
      <figcaption>
        <p>Malha aberta</p>
        <p>Malha fechada</p>
        <p>Vias de comunicação<br>
        Tecido urbano<br>
        Espaços não construídos</p>
      </figcaption>
    </figure>
    <p><span class="enum">6 </span>A malha dessa trama se contrai junto às grandes cidades. À medida que nos afastamos das aglomerações urbanas a malha se alarga.</p>
    <p><span class="enum">7 </span>As possibilidades de continuidade biológica se reduzem quando a malha se contrai. Em consequência a diversidade diminui.</p>
    <figure id="fig-12">
      <span class="image">
        <img loading="lazy" src="images/Croquis-11.jpg" alt="">
      </span>
      <figcaption>
        <p>Tecido urbano</p>
        <p>Terceira paisagem fragmentada</p>
        <p>Vias de comunicação</p>
      </figcaption>
    </figure>
    <p><span class="enum">8 </span>A multiplicação dos baldios, resultado do planejamento junto às malhas, é a oportunidade de constituição de refúgios para a diversidade.</p>
    <p><span class="enum">9 </span>A ruptura da continuidade das malhas desse tecido aparece como uma possibilidade de comunicação entre os “vacúolos”.</p>
    <p><span class="enum">10 </span>A contração total das malhas desse tecido elimina os intercâmbios naturais entre os vacúolos e resulta na impossibilidade de “invenções” biológicas resultantes dos encontros.</p>
    
  </section>
    
  <section class="text" id="escala">
    <h2><span class="enum">VIII </span>Escala</h2>
    <p><span class="enum">1 </span>A Terceira paisagem não tem escala.</p>
    <p><span class="enum">2 </span>Ela abrange o conjunto dos ecossistemas capazes de assegurar a perenidade da diversidade.</p>
    <p><span class="enum">3 </span>Uma floresta constitui um ecossistema. <br>Um líquen constitui um ecossistema. <br>Uma orla… <br>Uma casca… <br>Uma montanha… <br>Um rochedo… <br>Uma nuvem...</p>
    <p><span class="enum">4 </span>Os dispositivos de observação da Terceira paisagem vão do satélite ao microscópio.</p>
    <p><span class="enum">5 </span>A análise das informações coletadas por satélites fornece, em particular, dados da atividade da biomassa de uma região e traduz a expressão de uma infinidade de ecossistemas interligados.</p>
    <p><span class="enum">6 </span>A análise das informações coletadas por microscópios descreve, em particular, os seres mais simples vivendo dentro de um ecossistema.</p>
    <figure id="fig-13">
      <span class="image">
        <img loading="lazy" src="images/Croquis-12.jpg" alt="">
      </span>
      <figcaption>
        <p>Do  satélite  ao  microscópio</p>
      </figcaption>
    </figure>
    <p><span class="enum">7 </span>Todos os dispositivos intermediários possibilitam o inventário dos ‘habitats’ e de seus habitantes.</p>
  </section>
  
  <section class="text" id="representacoes-e-limites">
    <h2><span class="enum">IX </span>Representações e limites</h2>
    <p><span class="enum">1 </span>A representação da Terceira paisagem depende das possibilidades de estabelecer os limites geográficos.</p>
    <p><span class="enum">2 </span>Os limites surgem nas fronteiras dos baldios com os territórios explorados: <br>— limiar floresta / agricultura ou cidade; <br>— limite cerrado / agricultura ou cidade; <br>— limite agreste / agricultura ou cidade; <br>— limite pantanal / agricultura ou cidade; <br>— limite baldio / agricultura ou cidade.</p>
    <figure id="fig-14">
      <span class="image">
        <img loading="lazy" src="images/Croquis-13.jpg" alt="">
      </span>
      <figcaption>
        <div>
          <p>Diversidade escassa<br>Campos e cidades administrados</p>  
          <p>Diversidade abundante <br>Campos e cidades administrados</p>
          <p>Floresta manejada</p>
        </div>
        <div>
          <p>Ecossistema primário estável</p>
          <p>Floresta climácica segundária</p>
          <p>Baldio evoluindo rumo a uma floresta</p>
          <p>Baldio recente</p>
        </div>
        <div>
          <p>⟺ Inter-relação privilegiada</p>
          <p>↔ Inter-relação escassa</p>
        </div>
      </figcaption>
    </figure>
    <p><span class="enum">3 </span>Os limites situados entre os baldios recentes ou antigos (bosques provenientes de baldios) não são visíveis. Do ponto de vista da Terceira paisagem eles não existem.</p>
    <p><span class="enum">4 </span>Um baldio evolui rumo a uma floresta (salvo algumas exceções, como os cerrados climácicos, pastagens de altitude, pântanos, etc.). Seus limites podem ser confundidos com os de uma floresta manejada. Do ponto de vista da Terceira paisagem eles existem.</p>
    <p><span class="enum">5 </span>Uma floresta proveniente de baldios abriga uma diversidade superior àquela de uma floresta manejada.</p>
    <p><span class="enum">6 </span>Uma floresta proveniente de baldios faz parte da Terceira paisagem.</p>
    <p><span class="enum">7 </span>A floresta climácica, as zonas de vegetação primária, os baldios evoluindo rumo a uma floresta e os baldios recentes podem ser cartografados e representados da mesma maneira, como territórios de refúgio para a diversidade.</p>
    <p><span class="enum">8 </span>O encadeamento das zonas primárias e dos baldios oferece à diversidade uma continuidade territorial.</p>
    <p><span class="enum">9 </span>A continuidade territorial aparece abundantemente no caso das “reservas” bem constituídas ou no caso da contiguidade destas com os baldios. Nos outros casos ela aparece de forma sequencial (corredores biológicos: sebes, bordas de campos cultivados, beiras de estrada, vegetação ribeirinha), ou ainda sob forma de ilhas.</p>
    <figure id="fig-15">
      <span class="image">
        <img loading="lazy" src="images/Croquis-14.jpg" alt="">
      </span>
      <figcaption>
        <p>Reserva</p>
        <p>Corredor biologico</p>
        <p><span>Discontinuidade biológica</span> <span>Continuidade biológica</span></p>
      </figcaption>
    </figure>
    <p><span class="enum">10 </span>A dimensão do território de acolhimento da diversidade é um fator de limitação da quantidade de espécies.</p>
    <p><span class="enum">11 </span>As fronteiras — <em>interface</em>, dossel florestal, limiares, bordas, orlas — constituem uma espessura biológica. Suas riquezas são frequentemente superiores às dos meios que estas delimitam.</p>
    <p><span class="enum">12 </span>A representação das fronteiras da Terceira paisagem não traduz objetivamente sua espessura biológica, mas pode evocá-la.</p>    
    <figure id="fig-16">
      <span class="image">
        <img loading="lazy" src="images/Croquis-15.jpg" alt="">
      </span>
      <figcaption>
        <p>Limite administrativo</p>
        <p>Limite biológico</p>
      </figcaption>
    </figure>
  </section>
 
  <section class="text" id="quanto-ao-tempo">
    <h2><span class="enum">X </span>Quanto ao tempo</h2>
    <p><span class="enum">1 </span>A evolução da Terceira paisagem é subordinada à inter-relação biológica.</p>
    <p><span class="enum">2 </span>A complexidade da inter-relação biológica é correlacionada à quantidade das espécies presentes.</p>
    <p><span class="enum">3 </span>Os intercâmbios potencializados podem ser modelizados, mas são imprevisíveis quanto à temporalidade. É possível codificar-se os termos desta evolução: pousio recente, pousio agreste, macega, prado, turfeira, etc. Em contrapartida, não é possível antecipar um calendário nem a sucessão exata das formas.</p>
    <p><span class="enum">4 </span>O porvir de um sistema subordinado à inter-relação biológica é, por natureza, imprevisível.</p>
    <p><span class="enum">5 </span>A evolução de um sistema subordinado à inter-relação biológica não corresponde a um cronograma preestabelecido, ela corresponde às necessidades de adaptação ao meio.</p>
    <p><span class="enum">6 </span>A prioridade de um sistema biológico não é alcançar um resultado, mas organizar suas próprias oportunidades de existência.</p>
    <p><span class="enum">7 </span>De um ponto de vista biológico, existir se assemelha a uma <em>performance</em>.</p>
    <p><span class="enum">8 </span>A duração da <em>performance</em> é a duração da existência de cada ser.</p>
    <p><span class="enum">9 </span>A duração da existência de cada ser é tributária do sistema no qual ele se encontra e de sua própria configuração.</p>
    <figure id="fig-17">
      <span class="image">
        <img loading="lazy" src="images/Croquis-16.jpg" alt="">
      </span>
      <figcaption>
        <p>Evolução constante<br>Adaptação</p>
        <p>Evolução inconstante<br>Adaptações progressivas<br>Transformação</p>
      </figcaption>
    </figure>
    <p><span class="enum">10 </span>A Terceira paisagem não evolui segundo uma curva temporal simples, ela corresponde ao modelo biológico do meio.</p>
    <p><span class="enum">11 </span>A impermanência temporal dos sistemas biológicos corresponde ao ajustamento constante dos elementos à flutuação do meio.</p>
    <p><span class="enum">12 </span>A impermanência temporal dos sistemas biológicos é a garantia de sua resistência no tempo.</p>
    <p><span class="enum">13 </span>Enquanto a evolução constante apresenta um risco de colapso, a evolução inconstante se desenvolve sem lacunas, por reabilitações sucessivas.</p>
    <figure id="fig-18">
      <span class="image">
        <img loading="lazy" src="images/Croquis-17.jpg" alt="">
      </span>
      <figcaption>
        <p>Colapso<br>Seleção</p>
        <p>Continuidade<br>Transformações evolutivas</p>
      </figcaption>
    </figure>
    <p><span class="enum">14 </span>A Terceira paisagem é a sede de uma evolução globalmente inconstante.</p>
    <p><span class="enum">15 </span>A maioria das espécies de um sistema biológico livre (Terceira paisagem) evoluem de maneira inconstante por adaptações sucessivas (transformismo). As espécies (ou sistemas) de evolução constante, cuja configuração se enrijece ao passar do tempo, são mais vulneráveis à pressão seletiva causada pela mobilidade do meio.</p>
    <p><span class="enum">16 </span>O processo evolutivo constante levando ao colapso é do tipo darwiniano. O processo evolutivo inconstante, acompanhado de transformações, é do tipo lamarckiano.</p>
    <p><span class="enum">17 </span>O processo darwiniano corresponde à alterações bruscas e rápidas, o processo lamarckiano à alterações moduladas e lentas.</p>
    <p><span class="enum">18 </span>O processo global da evolução pode ser compreendido como uma sucessão de fenômenos curtos e lentos (darwinianos e lamarckianos) no que diz respeito aos sistemas.</p>
    <figure id="fig-19">
      <span class="image">
        <img loading="lazy" src="images/Croquis-18.jpg" alt="">
      </span>
      <figcaption>
        <div>
          <p>Colapso</p>
          <p>Lapso de tempo curto</p>
        </div>
        <div>
          <p>Lapso de tempo longo (transformação)</p>
        </div>
        <div>
          <p>Colapso</p>
          <p>Seleção</p>
        </div>
        <div>
          <p>Transformação</p>
        </div>
        <div>
          <p>Colapso</p>
        </div>
      </figcaption>
    </figure>
    <p><span class="enum">19 </span>Esse processo é também relativo às espécies, tomadas individualmente. Em um sistema em evolução lenta podem existir casos isolados de evolução rápida, decorrentes da pressão seletiva exercida.</p>
    <p><span class="enum">20 </span>A dimensão temporal autorizada pelo processo lamarckiano permite que os seres confrontados com as transformações do meio ambiente busquem novas soluções de sobrevivência.</p>
    <p><span class="enum">21 </span>Por sua configuração heterogênea, sua inconstância e sua vasta temporalidade, a Terceira paisagem aparece como sendo o território da invenção biológica.</p>
  </section>
 
  <section class="text" id="quanto-a-sociedade">
    <h2><span class="enum">XI </span>Quanto à sociedade</h2>
    <p>De um ponto de vista social, a Terceira paisagem pode ser entendida como: <br>— um espaço de natureza (confiscação da Terceira Paisagem pela instituição) <br>— um espaço de lazer <br>— um espaço improdutivo (abandono da Terceira Paisagem pela instituição) <br>— um espaço sagrado</p>
    <p><span class="enum">1 </span>A confiscação da Terceira Paisagem pela instituição conduz à: <br>— enumerar critérios positivos <br>— definir limites precisos <br>— definir usos <br>— estabelecer o estatuto jurídico e as regras de direito, segurança e seguro.</p>
    <p><span class="enum">2 </span>Um fragmento da Terceira Paisagem sob proteção, elevado à posição de patrimônio (nacional ou mundial), vê seu território: <br>— posto sob vigilância <br>— apresentado como modelo <br>— organizado para não se alterar no tempo</p>
    <p><span class="enum">3 </span>Assim, quando elevada à posição de patrimônio, a Terceira Paisagem é condenada a desaparecer.</p>
    <p><span class="enum">4 </span>A alteração das formas, a sucessão das espécies, o mecanismo de evolução próprio à Terceira Paisagem, são incompatíveis com a noção de patrimônio.</p>
    <p><span class="enum">5 </span>O abandono da Terceira Paisagem pela instituição corresponde à:<br>— um olhar desvalorizante: alqueivados, baldios, entulhos, despejos, terrenos vagos, etc.<br>— um olhar moralizador: sítios sagrados ou proibidos.</p>
    <p><span class="enum">7 </span>O abandono da Terceira Paisagem pela instituição garante a preservação e o desenvolvimento da diversidade.</p>
    <p><span class="enum">8 </span>O abandono da Terceira Paisagem pela instituição não é sinônimo de abandono absoluto.</p>
    <p><span class="enum">9 </span>A utilização não institucional da Terceira paisagem faz parte dos usos mais antigos do espaço.</p>
    <p><span class="enum">10 </span>O usuário não institucional da Terceira paisagem adquire um estatuto compartilhado por todos os seres deste território. Ele faz parte do sistema evolutivo.</p>
    <p><span class="enum">11 </span>As razões do abandono residem no olhar da instituição sobre uma certa categoria de seu território:<br>— exploração impossível ou irracional<br>— exploração não lucrativa<br>— espaço desestruturado, desconfortável, impraticável<br>— espaço de despejo, de entulhos, marginal<br>— espaço perigoso<br>— espaço sem possível reivindicação, sem esperança.</p>
    <p><span class="enum">12 </span>As razões do confisco são análogas: <br>— este espaço se adaptaria a um projeto? <br>— este espaço seria lucrativo? <br>— este espaço poderia ser a sede de desenvolvimento, de crescimento?</p>
    <p><span class="enum">13 </span>A ideia de evolução anima a Terceira paisagem.</p>
    <p><span class="enum">14 </span>Os princípios de evolução biológica e de desenvolvimento econômico não podem se sobrepor.</p>
    <p><span class="enum">15 </span>Desenvolvimento e crescimento exprimem a dinâmica do sistema econômico enquanto acumulação.</p>
    <p><span class="enum">16 </span>Desenvolvimento e crescimento exprimem a dinâmica do sistema biológico enquanto transformação.</p>
    <p><span class="enum">17 </span>A Terceira paisagem, território predileto da diversidade — ou seja, da evolução —, favorece a inventividade e se opõe à acumulação.</p>
  </section>
 
  <section class="text" id="quanto-a-cultura">
    <h2><span class="enum">XI </span>Quanto à cultura</h2>
    <p><span class="enum">1 </span>A Terceira paisagem pode ser considerada como o fragmento compartilhado de uma consciência coletiva, desde que esta partilha se faça dentro de uma cultura comum.</p>
    <p><span class="enum">2 </span>A Terceira paisagem aparece culturalmente em referência e em oposição ao território organizado.</p>
    <p><span class="enum">3 </span>A fisionomia de um território organizado varia segundo as culturas<span class="fn">A roça amazonense, uma porção de floresta ajardinada, pode ser vista como um elemento da Terceira paisagem, ao passo que para os índios ela é vista como um jardim. Para um índio que assimila um puma ou uma árvore, a um homem disfarçado em puma ou em árvore, a Terceira paisagem não tem sentido.</span>.</p>
    <p><span class="enum">4 </span>Em todos os casos a Terceira paisagem pode ser vista como parte de nosso espaço de vida, confiado ao inconsciente. Profundezas nas quais os acontecimentos se beneficiam e se manifestam de maneira aparentemente indecisa.</p>
    <p><span class="enum">5 </span>Um espaço de vida privado de Terceira paisagem seria como um espírito privado de inconsciente. Esta situação, perfeita, sem demônios, não existe em nenhuma cultura conhecida.</p>
  </section>
  
  <section class="text" id="manifesto">
    <h2>Manifesto</h2>
    <p>Cada uma das frases seguintes pode ser considerada na forma interrogativa.
    <br>— Instruir o espírito do não-fazer como instruímos o do fazer.
    <br>— Alçar a indecisão ao nível político. Possibilitar sua ponderação com o poder.
    <br>— Imaginar as propostas como um espaço de questões abertas e de prudência.
    <br>— Considerar o não-planejamento como princípio vital através do qual todo planejamento seja penetrado por centelhas de vida.
    <br>— Encarar a diversidade com admiração.</p>
    <h4>Quanto à extensão</h4>
    <p>
      — Considerar a multiplicação dos espaços de Terceira paisagem, resultantes do planejamento, como o contraponto necessário ao planejamento em si.
    <br>— Privilegiar a criação de espaços de Terceira paisagem de grande dimensão, de modo a acolher a totalidade das espécies capazes de lá viverem e se desenvolverem.
    <br>— Antecipar a conexão dos baldios às reservas, permitindo a constituição de territórios de continuidade biológica.</p>
    <h4>Quanto às características</h4>
    <p>
      — Considerar a miscigenação planetária — mecânica inerente à Terceira paisagem — como motor da evolução.
    <br>— Ensinar os motores da evolução como ensinamos as línguas, as ciências, as artes.
    <br>— Informar os usuários das precauções necessárias à manipulação e à exploração dos seres dos quais eles dependem.
    <br>— A fragilidade de um sistema está ligada ao volume e à natureza das práticas.</p>
    <h4>Quanto ao estatuto</h4>
    <p>
      — Considerar a dimensão planetária.
    <br>— Preservar a Terceira paisagem da desregulamentação moral, social e política.
    <br>— Identificar a Terceira paisagem, fragmento indeciso do Jardim planetário, não como sendo um bem patrimonial, mas sim como um espaço comum do futuro.</p>
    <h4>Quanto aos desafios</h4>
    <p>
      — Manter ou incrementar a diversidade através de uma prática consensual do não-planejamento.
    <br>— Iniciar um processo de requalificação dos substratos abrigando a vida — ar, solo, água — adaptando as práticas periféricas aos espaços da Terceira paisagem, procurando não alterar a sua dinâmica, na esperança de obter uma influência.
    <br>— Estabelecer uma política territorial visando a conservação dos fragmentos existentes de Terceira paisagem e mesmo favorecendo a sua progressão.</p>
    <h4>Quanto à mobilidade e à evolução</h4>
    <p>
      — Favorecer as dinâmicas de intercâmbio entre os meios antropizados e a Terceira paisagem.
    <br>— Orientar as questões de cessão da propriedade territorial, dos remanejamentos, dos mecanismos de ligação entre os diferentes polos de atividade. Desenhar um território onde as malhas são largas e permeáveis.
    <br>— Criar tantas portas quantas forem necessárias para a comunicação entre estas.</p>
    <h4>Quanto à escala</h4>
    <p>
      — Disponibilizar as ferramentas necessárias à compreensão da Terceira paisagem.
    <br>— Facilitar o acesso às imagens de satélite e às imagens de microscópio.
    <br>— Favorecer a identificação na escala habitual do olhar. Aprender a denominar os seres.</p>
    <h4>Quanto aos limites e representação</h4>
    <p>
      — Considerar os limites como uma espessura e não como uma linha.
    <br>— Pensar a margem, intersecção de meios distintos, como território de investigação de riquezas.
    <br>— Abraçar a imprecisão e a complexidade como modos de representação da Terceira paisagem.</p>
    <h4>Quanto ao tempo</h4>
    <p>
      — Dissipar os prazos administrativos, políticos, de gestão territorial.
    <br>— Não ficar à espera: averiguar dia após dia.
    <br>— Oferecer à Terceira paisagem a possibilidade de se desenvolver segundo um processo evolutivo inconstante, pela reinterpretação cotidiana da mutabilidade dos meios.</p>
    <h4>Quanto ao vínculo com a sociedade</h4>
    <p>
      — Elevar a improdutividade à altura da política.
    <br>— Valorizar o crescimento e o desenvolvimento biológicos em oposição ao crescimento e ao desenvolvimento econômicos.
    <br>— Preservar os territórios tocados por crenças como territórios indispensáveis à divagação da consciência.</p>
    <h4>Quanto ao vínculo com a cultura</h4>
    <p>
      — Inverter a visão ocidental sobre a paisagem.
    <br>— Atribuir à Terceira paisagem a função matricial de uma paisagem global emergente.
    <br>— Declarar o território da Terceira paisagem como sede privilegiada da inteligência biológica: apta a se reinventar continuamente.
    <br>— Confrontar nossas hipóteses a outras culturas, particularmente aquelas cuja concepção se funda em vínculos profundos entre o homem e a natureza.</p>
  </section>
  
  </div>

  <section id="gilles-clement">
    <p>Gilles Clément (Argenton-sur-Creuse, 1943) é um “jardineiro” francês; paisagista, botânico, ensaísta e professor da Escola de Paisagismo de Versalhes. É autor de conceitos teóricos que marcaram os protagonistas da paisagem moderna e também o grande público, como o “jardim em movimento”, o “jardim planetário” e a “terceira paisagem”. Na prática, concebeu vários parques e espaços públicos franceses, a partir de conceitos resultantes da observação de paisagens naturais nunca cristalizadas, onde as espécies devem poder circular livremente. Desde 1977 Gilles Clément “cultiva” também o seu próprio jardim, “o vale”, sua morada, onde observa, investiga e dialoga.
  </section>
  
  <footer id="footer">
    <p>Título texto original: « Le Tiers paysage »<br>Gilles Clément, 2004</p>
    <p>Copyleft&nbsp;: esta obra é livre, pode copiá-la, distribuí-la e modificá-la nos termos da <a href="http://artlibre.org">Licença de Arte&nbsp;Livre</a>.</p>
    <hr>

    <p>Manifesto da Terceira paisagem<br><a href="https://maisondeseditions.fr/">Maison des éditions</a> — 2022 — ISBN xxxxxxxxxxxxxx</p>
    <p>
      Tradução: Lúcia Leistner ―
      Revisão: Andréa Soler Machado e Maria Clara Adams ―
      Ilustrações originais de Gilles Clément restaurados por “Éditions du commun” ―
      Imagem da capa: <i>Ecos de uma Terceira paisagem</i>, Christophe Clottes, do protocolo da série “<a href="https://dda-nouvelle-aquitaine.org/Echos-d-un-ilot-2010">Ecos de uma Ilha</a>”  ―
      Design & desenvolvimento: <a href="https://accentgrave.net/">Julien Bidoret</a>  ―
      Caracteres tipográficos <a href="http://velvetyne.fr/fonts/compagnon/">Compagnon</a> (Juliette Duhé, Léa Pradine, Valentin Papon, Chloé Lozano, Sébastien Riollier) &amp; <a href="https://software.sil.org/gentium/">Gentium Book</a> (SIL International).</p>
  
    <p>O texto original em francês <a href="_admin_13517_tierspaypublications_92045_manifeste_du_tiers_paysage.pdf">é acessível em arquivo</a>. Para mais informações, ver <a href="http://www.gillesclement.com/">site do autor</a>. <br> O texto em versão português do Brasil é acessível sob os termos da licença Creative Commons “<a href="https://creativecommons.org/licenses/by/4.0/deed.pt_BR">Atribuição</a>”.</p>
  </footer>
  
  <script src="js/script.js"></script>

</body>
</html>