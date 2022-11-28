<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Cumpleaños Simón</title>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="/css/style.css?v=1">
         
<!-- MOVIMIENTO -->
        <link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/> 

<style>
  .lightning {   
  animation: bounceInRight; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 2s; /* don't forget to set a duration! */
}
 
</style> 
<link href="https://fonts.bunny.net/css2?family=Acme:wght@400;600;700&display=swap" rel="stylesheet">
<style>
    .texto {
        font-family: 'Acme', sans-serif;
    }
    .btn{
        
        font-family: 'Acme', sans-serif;
        display: inline-block;
        outline: none;
        cursor: pointer;
        font-weight: 500; 
        padding: 15px 18px;
        border-radius: 4px;
        color: #fff;
        background: #a70000;
        line-height: 1.15;
        font-size: 16px;  
        text-decoration: none;  
        border: none;
        text-align: center;
        box-shadow: 0px 3px 1px -2px rgb(0 0 0 / 20%), 0px 2px 2px 0px rgb(0 0 0 / 14%), 0px 1px 5px 0px rgb(0 0 0 / 12%);
        transition: box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        
                
    }
</style> 
        </head>
        <body style="background: url(/img/fondo.jpg) center no-repeat fixed #FFFF01; width:100%;">
            <div style="background: rgba(255,255,255,0.85);
            border-radius: 10px;
            padding: 40px;
            margin: 10px;">
            <div class="lightning">
                <div class="noisy">
                  <span>MI CUMPLEAÑOS</span>
                  <center>SIMÓN</center>
                  <span>1 AÑO</span>
                </div>
              
              
              </div> 
              
              
              <svg id="svgfilters" width="50" height="50" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
              
                <defs>
              
                  <filter id="squiggly-00">
              
                    <feTurbulence baseFrequency="0.32" id="turbulence-00" numOctaves="3" result="noise" seed="10"></feTurbulence>
              
                    <feDisplacementMap id="displacement-00" in2="noise" in="SourceGraphic" scale="18"></feDisplacementMap>
              
                  </filter>
              
                  <filter id="squiggly-0">
              
                    <feturbulence basefrequency="0.02" id="turbulence-0" numoctaves="3" result="noise" seed="0"></feturbulence>
              
                    <fedisplacementmap id="displacement-0" in2="noise" in="SourceGraphic" scale="2"></fedisplacementmap>
              
                  </filter>
              
                  <filter id="squiggly-1">
              
                    <feturbulence basefrequency="0.02" id="turbulence-1" numoctaves="3" result="noise" seed="1"></feturbulence>
              
                    <fedisplacementmap in2="noise" in="SourceGraphic" scale="3"></fedisplacementmap>
              
                  </filter>
              
                  <filter id="squiggly-2">
              
                    <feturbulence basefrequency="0.02" id="turbulence-2" numoctaves="3" result="noise" seed="2"></feturbulence>
              
                    <fedisplacementmap in2="noise" in="SourceGraphic" scale="2"></fedisplacementmap>
              
                  </filter>
              
                  <filter id="squiggly-3">
              
                    <feturbulence basefrequency="0.02" id="turbulence-3" numoctaves="3" result="noise" seed="3"></feturbulence>
              
                    <fedisplacementmap in2="noise" in="SourceGraphic" scale="3"></fedisplacementmap>
              
                  </filter>
              
                  <filter id="squiggly-4">
              
                    <feturbulence basefrequency="0.02" id="turbulence-4" numoctaves="3" result="noise" seed="4"></feturbulence>
              
                    <fedisplacementmap in2="noise" in="SourceGraphic" scale="1"></fedisplacementmap>
              
                  </filter>
              
              
              
                  <filter id="disp">
              
                    <feTurbulence id="feTurbulence836" result="turbulence" baseFrequency="1" seed="360" numOctaves="1" type="fractalNoise" />
              
                    <feDisplacementMap id="feDisplacementMap838" xChannelSelector="R" yChannelSelector="G" scale="0.6" in2="turbulence" in="SourceGraphic" />
              
                  </filter>
              
              
              
                  <filter id="noise">
              
                    <feComponentTransfer in="SourceGraphic" result="ct">
              
                      <feFuncB type="linear" slope=".6" />
              
                      <feFuncG type="linear" slope="0" />
              
                    </feComponentTransfer>
              
                    <feTurbulence type="fractalNoise" baseFrequency="2" numOctaves="10" result="noisy" />
              
                    <feColorMatrix type="saturate" values=".5" />
              
                    <feBlend in="ct" in2="noisy" mode="multiply" />
              
                  </filter>
              
                </defs>
              
              </svg>
              <!-- partial -->
              <div class="texto" style="position: relative;">
              <p></p>
              <strong>José y Flor</strong>,
              <p></p>
              Los invito a mi primer cumpleaños a realizarse el día sábado 10/12/2022 en Bv. 
              Eva Perón y Rodriguez Peña.
              <br/>
              Te espero!
              <p></p>
              <img src="/img/flash.gif" style="position: absolute;    top: -160px;
              right: -8px;
              height: 150px; " />Simón Martín </nav><p></p>

              </div>
              
                <a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=Cumple+Sim%C3%B3n&amp;dates=20221210T180000/20221210T210000&amp;details=Te+esperamos%21&amp;location=Bv.+Eva+Per%C3%B3n+y+Rodriguez+Pe%C3%B1a&amp;trp=false&amp;sprop=www.bellnet.com.ar&amp;sprop=name:bellnet"
                 target="_blank"> 
                  <div class="btn"><img src="/img/calendar.png" style="height: 17px;">  Agendá mi cumple en el Calendario </div>
                 
                </a>
                </div>
              </body>
              </html>
         
 