<?php
require_once('header.php'); 

?>    

<body class="light-theme">
    <div>
        <p>&nbsp</p>        
    </div>
    <div class="carbox">
        <div class="col-25">
            <img id="carro" onclick="changeColor()" src="img/onix1.png">   
            <h4>Clique no carro para alternar as cores.</h4>         
        </div>
        <div class="col-25">
            <h4>Onix Plus 1.0 Turbo 2022</h4>
            <p>Potência:</br>
                116cv(A)  116cv (G)   a 5500 RPM</br></br>
                
                Dimensões:</br>
                Comprimento: 4474 mm</br>                
                Largura: 1730 mm</br>                
                Altura: 1474 mm</br></br>    
                Porta-mala: 469 litros         

                Consumo:</br>                
                Urbano: 8,6km/l(A) 10,9km/l(G)</br>
                Rodoviário: 12km/l(A) 15km/l(G)</br>
            </p>
        </div>
    <div>
    
    <div class="btn-menu">    
            <button id="switch-car-button" onclick="switchTheme()">Alternar Tema</button>                                 
    </div>
<body>
    
<script>
    var currentImgIndex=1;
    var ImgSrcArray = [ //caminho das imagens
    'img/onix1.png',
    'img/onix2.png',
    'img/onix3.png'
];

function switchTheme() {
        document.body.classList.toggle('dark-theme');
        document.body.classList.toggle('light-theme');

        document.body.setAttribute('aria-label', 'Trocando o tema');

        const theme = document.body.classList[0];
      }

function changeColor(){

  if(currentImgIndex == ImgSrcArray.length) //reseta quando o contador for igual ao tamanho da array e volta a 1° imagem
  {
    currentImgIndex=0;
  }
  document.getElementById("carro").src=ImgSrcArray[currentImgIndex]; //altera a imagem do elemento "carro" de acordo com o índice
    currentImgIndex++; // incrementa a refêrencia

}
</script>
<?php require_once('footer.php') ?>