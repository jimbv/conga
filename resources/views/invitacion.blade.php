<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
        <title>Cumpleaños Simón</title>

        

<style>
       
    :root {
      --size: 3;
      --skew: 7;
      --orange: hsl(20, 100%, 71%);
      --svgfilter: url(#squiggly-0);
      --boxshadow: rgb(22, 12, 3);
      --textshadow: rgb(42, 22, 23); 
    }
    @media only screen and (max-width: 600px) {
      :root {
        --size: 2;
      }
    }
    @media only screen and (max-width: 400px) {
      :root {
        --size: 1.4;
      }
    }
    .lightning {
      display: flex;
      position: relative;
      margin: 4vmin;
      filter: var(--svgfilter);
      span {
        color: black;
        letter-spacing: calc(var(--size) * 1vmin);
        font-size: 1rem;
        padding: calc(0.5 * 1rem) 0 0 0;
        margin-right: -1rem;
        text-align: left;
        text-shadow: none;
      }
      > * {
        margin: 0;
        flex-grow: 1;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: calc(var(--size) * 0.8vmin) calc(var(--size) * 1.6vmin);
        background: rgba(#f4e205, 1); //yellow;
    
        transform: skew(calc(var(--skew) * -1deg), calc(var(--skew) * -1deg));
        font-size: calc(var(--size) * 3vmax);
        font-weight: 700;
        color: Crimson;
    
        text-transform: uppercase;
        text-align: right;
        border: 3px solid var(--boxshadow);
        border-left: 0;
        text-shadow: var(--textshadow) 0px 0px 0px,
          var(--textshadow) 0.669131px 0.743145px 0px,
          var(--textshadow) 1.33826px 1.48629px 0px,
          var(--textshadow) 2.00739px 2.22943px 0px,
          var(--textshadow) 2.67652px 2.97258px 0px,
          var(--textshadow) 3.34565px 3.71572px 0px,
          var(--textshadow) 4.01478px 4.45887px 0px,
          var(--textshadow) 4.68391px 5.20201px 0px;
        box-shadow: var(--border) 0px 0px 0px,
          var(--boxshadow) 0.819152px 0.573576px 0px,
          var(--boxshadow) 1.6383px 1.14715px 0px,
          var(--boxshadow) 2.45746px 1.72073px 0px,
          var(--boxshadow) 3.27661px 2.29431px 0px,
          var(--boxshadow) 4.09576px 2.86788px 0px,
          var(--boxshadow) 4.91491px 3.44146px 0px,
          var(--boxshadow) 5.73406px 4.01504px 0px,
          var(--boxshadow) 6.55322px 4.58861px 0px,
          var(--boxshadow) 7.37237px 5.16219px 0px,
          var(--boxshadow) 8.19152px 5.73576px 0px,
          var(--boxshadow) 9.01067px 6.30934px 0px,
          var(--boxshadow) 9.82982px 6.88292px 0px,
          var(--boxshadow) 10.649px 7.45649px 0px,
          var(--boxshadow) 11.4681px 8.03007px 0px;
        &:last-child {
          left: calc(var(--size) * -1vmin);
          position: relative;
          text-align: left;
          // font-size: 8vmin;
          span {
            border-top: 1px solid;
          }
        }
      }
    }
    
    .bg {
      position: absolute;
      top: -5vh;
      left: 0;
      z-index: -1;
      width: 100vw;
      height: auto;
    }
    .orange {
      background-color: var(--orange);
    }
    
    .noisy {
      background-image: var(--noise-image);
    }
     
    svg {
      height: 1px;
    }
    body {
      display: grid;
      place-content: center;
      min-height: 100vh;
      position: relative;
    }
    
    
    </style>
    </head>
    <body>
 
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
            <i class="fa fa-calendar" aria-hidden="true"></i>   Agendar cumple en Calendario</a>
         
    </body>
</html>
