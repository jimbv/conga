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
  animation-duration: 4s; /* don't forget to set a duration! */
}
</style>

        </head>
        <body style="background: url(/img/fondo.jpg) center no-repeat fixed #FFFF01 ;">
            <div style="background: rgba(255,255,255,0.85);
            border-radius: 10px;
            padding: 10px;
            margin: 10px;">
            <div class="lightning">
                <div class="noisy">
                  <span>MI CUMPLEAÑOS</span>
                  <center>SIMÓN</center>
                  <span>1 AÑO</span>
                </div>
              
              
              </div> 
              
              <ul></ul>
              
              <svg id="svgfilters" viewBox="0 0 1400 1400" xmlns="http://www.w3.org/2000/svg" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
              
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
              
              <p></p>
              <strong>José y Flor</strong>,
              <p></p>
              Los invito a mi primer cumpleaños a realizarse el día sábado 10/12/2022 en Bv. 
              Eva Perón y Rodriguez Peña.
              <br/>
              Te espero!
              <p></p>
              Simón Martín </nav><p></p>
             
                <a href="http://www.google.com/calendar/event?action=TEMPLATE&amp;text=Cumple+Sim%C3%B3n&amp;dates=20221210T180000/20221210T210000&amp;details=Te+esperamos%21&amp;location=Bv.+Eva+Per%C3%B3n+y+Rodriguez+Pe%C3%B1a&amp;trp=false&amp;sprop=www.bellnet.com.ar&amp;sprop=name:bellnet">
                    Agendá mi cumple en Calendario
                </a>
                </div>
              </body>
              </html>
         
 