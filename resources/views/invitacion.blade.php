<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Cumpleaños Simón</title>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="/css/style.css">
        
        </head>
        <body style="background: url(/img/fondo.jpg) center no-repeat;">

            <div class="lightning">
                <div class="noisy">
                  <span>MI CUMPLEAÑOS</span>
                  SIMÓN
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
              <i class="fa fa-calendar" aria-hidden="true"></i>   Agendar cumple en Calendario</a>
                
              </body>
              </html>
         
 