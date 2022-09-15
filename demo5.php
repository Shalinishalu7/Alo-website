<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>







<style>
   
   html {
  background: #222831;
  /* color: #eee;
  font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
  Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
  'Segoe UI Symbol'; */
  font-size: 0.875rem;
  line-height: 1.375rem;
  cursor: url("data:image/svg+xml,%3Csvg height='6' width='6' viewBox='0 0 8 8' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='4' cy='4' fill='%23eee' r='4'/%3E%3C/svg%3E") 3 3, auto;
}

.stroke-only {
  fill: none;
  stroke: #eee;
  stroke-width: 4;
  stroke-linecap: round;
  stroke-linejoin: round;
  transition: 600ms transform cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.transform-center-center {
  transform-origin: center center;
}
a.link:hover .stroke-only {
  stroke: #b55400;
}
a.link:hover .move-up {
  transform: translateY(-16px);
}
a.link:hover .move-right {
  transform: translateX(10px);
}
a.link:hover .move-down {
  transform: translateY(16px);
}
a.link:hover .move-left {
  transform: translateX(-10px);
}
a.link:hover .move-up-little {
  transform: translateY(-4px);
}
a.link:hover .move-up-medium {
  transform: translateY(-6px);
}
.svg-search {
  transform-origin: 26px 26px;
}
a.link:hover .turn-90 {
  transform: rotate(90deg);
}
a.link:hover .turn-15 {
  transform: rotate(15deg);
}

.container {
  position: relative;
  /* max-width: auto;
  margin: auto;
  margin-top: 4rem;
  padding: 1rem;
  border: 1px solid #393e46;
  border-radius: 0.25rem; */
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}

.close, .min, .max {
  position: absolute;
  top: 1rem;
  width: 0.75rem;
  height: 0.75rem;
  background-color: #393e46;
  border-radius: 50%;
}
.close {
  left: 1rem;
  background-color: #b55400;
}
.min {
  left: 2.5rem;
}
.max {
  left: 4rem;
}

.navigation {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  align-content: center;
  margin-top: 1.75rem;
  padding: 0.125rem 0;
}

.margin-left-auto {
  margin-left: auto;
}

.content {
  padding: 1rem;
}
.content h1 {
  line-height: 1;
  margin-top: 0;
}
.content p {
  line-height: 2;
}

.cursor {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: var(--width);
  height: var(--height);
  transform: translate(calc(var(--x) - var(--width) / 2), calc(var(--y) - var(--height) / 2));
  /* transition-duration: 125ms;
  transition-timing-function: cubic-bezier(0.39, 0.575, 0.565, 1);
  transition-property: width, height, transform; */
  transition: 150ms width cubic-bezier(0.39, 0.575, 0.565, 1),
              150ms height cubic-bezier(0.39, 0.575, 0.565, 1),
              150ms transform cubic-bezier(0.39, 0.575, 0.565, 1);
  z-index: 1;
  pointer-events: none;
  will-change: transform;
}
@media (pointer: fine) {
  .cursor {
    display: block;
    color: blue;
  }
}
.cursor::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  border-radius: var(--radius);
  border: 2px solid blue;
  opacity: var(--scale);
  -webkit-transform: scale(var(--scale));
          transform: scale(var(--scale));
  transition: 300ms opacity cubic-bezier(0.39, 0.575, 0.565, 1),
              300ms transform cubic-bezier(0.39, 0.575, 0.565, 1),
              150ms border-radius cubic-bezier(0.39, 0.575, 0.565, 1);
}

html:not(html:hover) .cursor::after {
  opacity: 0;
  transform: scale(0);
}

.link {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 52px;
  height: 52px;
  background: none;
  border-radius: 50%;
}

.btn {
  appearance: none;
  border: none;
  color: #eee;
  font-size: 1rem;
  line-height: 1.5rem;
  cursor: inherit;
  margin: -0.125rem -0.375rem;
  padding: 0.125rem 0.375rem;
  background: none;
  border-radius: 0.25rem;
  text-decoration-line: underline;
  text-decoration-style: dotted;
}
.btn:hover {
  text-decoration-line: none;
}


</style>



</head>
<body>
<?php include 'common-files/head.php'; ?> 


 
<div class="cursor"></div>

<div class="container click">
  <div class="close"></div>
  <div class="min"></div>
  <div class="max"></div>
  <div class="navigation">
    <a class="link">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="0 0 64 64"
        width="24px"
        height="24px"
      >
        <rect
          x="4"
          y="34"
          class="stroke-only move-right"
          width="16"
          height="16"
        />
        <rect
          x="24"
          y="34"
          class="stroke-only move-right"
          width="16"
          height="16"
        />
        <rect
          x="24"
          y="14"
          class="stroke-only move-left"
          width="16"
          height="16"
        />
        <rect
          x="44"
          y="14"
          class="stroke-only move-left"
          width="16"
          height="16"
        />
      </svg>
    </a>
    <a class="link">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="-4 0 60 64"
        width="28px"
        height="24px"
      >
        <path
          class="stroke-only svg-search turn-90"
          d="M43.17,43.17c0.97-0.97,1.82-2.01,2.54-3.11l11.6,11.6l-5.66,5.66l-11.6-11.6
        C41.16,44.99,42.2,44.14,43.17,43.17z"
        />
        <path
          class="stroke-only svg-search turn-90"
          d="M40.83,12.54c6.84,6.84,7.69,17.41,2.54,25.17c-0.73,1.1-1.58,2.14-2.54,3.11s-2.01,1.82-3.11,2.54
        c-7.77,5.14-18.33,4.3-25.17-2.54c-7.81-7.81-7.81-20.47,0-28.28S33.02,4.73,40.83,12.54z"
        />
      </svg>
    </a>
    <a class="link margin-left-auto">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="0 0 64 64"
        width="24px"
        height="24px"
      >
        <path
          class="stroke-only transform-center-center turn-15"
          d="M32,59c3.31,0,6-2.69,6-6H26C26,56.31,28.69,59,32,59z"
        />
        <path
          class="stroke-only transform-center-center turn-15"
          d="M48,36.06V25c0-7.47-5.13-13.73-12.05-15.49C34.68,9.19,33.37,9,32,9s-2.68,0.19-3.95,0.51
          C21.13,11.27,16,17.53,16,25v11.06c0,5.48-3.1,10.49-8,12.94h16h16h16C51.1,46.55,48,41.54,48,36.06z"
        />
        <line
          class="stroke-only transform-center-center turn-15"
          x1="32"
          y1="5"
          x2="32"
          y2="9"
        />
      </svg>
    </a>
    <a class="link">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="0 0 64 64"
        width="24px"
        height="28px"
      >
        <path
          class="stroke-only"
          d="M36,44c0,2.21-1.79,4-4,4s-4-1.79-4-4H4v16h56V44H36z"
        />
        <path
          class="stroke-only"
          d="M29,12H12L4,44h24c0,2.21,1.79,4,4,4s4-1.79,4-4h24l-8-32H35"
        />
        <line
          class="stroke-only move-up-medium"
          x1="32"
          y1="4"
          x2="32"
          y2="36"
        />
        <polyline
          class="stroke-only move-up-medium"
          points="26,30 32,36 38,30 	"
        />
      </svg>
    </a>
    <a class="link">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="0 0 64 64"
        width="24px"
        height="28px"
      >
        <path
          class="stroke-only"
          d="M32,32C16.54,32,4,44.54,4,60h56C60,44.54,47.46,32,32,32z"
        />
        <circle
          class="stroke-only transform-center-center move-up-little"
          cx="32"
          cy="16"
          r="12"
        />
      </svg>
    </a>
    <a class="link">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewbox="0 0 64 64"
        width="24px"
        height="24px"
      >
        <rect x="4" y="16" class="stroke-only" width="56" height="32" />
        <line class="stroke-only" x1="16" y1="20" x2="16" y2="44" />
        <line class="stroke-only" x1="32" y1="20" x2="32" y2="44" />
        <line class="stroke-only" x1="48" y1="20" x2="48" y2="44" />
        <circle class="stroke-only move-down" cx="16" cy="24" r="2" />
        <circle class="stroke-only move-up" cx="32" cy="40" r="2" />
        <circle class="stroke-only move-down" cx="48" cy="24" r="2" />
      </svg>
    </a>
  </div>

  <div class="content">
    <h1>Hipster Ipsum<small> (hover icons and links)</small></h1>
    <p>
      Tbh venmo scenester, cloud bread sustainable lyft blue bottle.
      Truffaut <button class="btn">tacos</button> fam poutine selvage plaid
      lyft polaroid, <button class="btn">lo-fi</button> small batch. Bespoke
      godard wayfarers affogato green juice irony fam snackwave selvage ugh
      tumblr food truck VHS af. Selvage raw denim man braid migas pickled,
      subway tile leggings flexitarian PBR&B. Squid sriracha occupy godard
      plaid artisan fingerstache bushwick venmo locavore letterpress
      organic.
    </p>
    <p>
      Try-hard schlitz asymmetrical snackwave cornhole paleo. Pok pok
      raclette fam beard aesthetic XOXO keytar gluten-free
      <button class="btn">8-bit</button> mumblecore yr distillery skateboard
      tumblr put a bird on it. Meditation pour-over single-origin coffee
      master cleanse leggings,
      <button class="btn">four loko</button> typewriter. Leggings hot
      chicken edison bulb bushwick VHS health goth coloring book, vice
      kinfolk twee pitchfork succulents locavore before they sold out
      fingerstache. Forage cornhole try-hard flexitarian chillwave
      <button class="btn">craft beer</button>
      <button class="btn">la croix</button> tote bag. Activated charcoal
      cardigan celiac <button class="btn">messenger bag</button> biodiesel
      mixtape. Gochujang glossier beard tumblr gluten-free.
    </p>
    <p>
      Snackwave affogato humblebrag chia microdosing you probably haven't
      heard of them kickstarter photo booth ennui kale chips cliche austin
      poke chillwave venmo. <button class="btn">La croix</button> kombucha
      slow-carb vegan actually pitchfork cold-pressed fanny pack crucifix
      salvia brooklyn church-key disrupt. Viral brooklyn thundercats
      vaporware wayfarers, artisan mumblecore. Fingerstache raw denim
      biodiesel vape kitsch hot chicken cloud bread. Yuccie mumblecore
      dreamcatcher next level poutine. Skateboard humblebrag glossier
      distillery photo booth cornhole scenester meditation single-origin
      coffee authentic vinyl fixie copper mug shaman.
    </p>
  </div>
</div>

<script>


const updateProperties = (elem, state) => {
  elem.style.setProperty('--x', `${state.x}px`)
  elem.style.setProperty('--y', `${state.y}px`)
  elem.style.setProperty('--width', `${state.width}px`)
  elem.style.setProperty('--height', `${state.height}px`)
  elem.style.setProperty('--radius', state.radius)
  elem.style.setProperty('--scale', state.scale)
}

document.querySelectorAll('.cursor').forEach(cursor => {
  let onElement

  const createState = e => {
    const defaultState = {
      x: e.clientX,
      y: e.clientY,
      width: 40,
      height: 40,
      radius: '50%'
    }

    const computedState = {}

    if (onElement != null) {
      const { top, left, width, height } = onElement.getBoundingClientRect()
      const radius = window.getComputedStyle(onElement).borderTopLeftRadius

      computedState.x = left + width / 2
      computedState.y = top + height / 2
      computedState.width = width
      computedState.height = height
      computedState.radius = radius
    }

    return {
      ...defaultState,
      ...computedState
    }
  }

  document.addEventListener('mousemove', e => {
    const state = createState(e)
    updateProperties(cursor, state)
  })

  document.querySelectorAll('a, button').forEach(elem => {
    elem.addEventListener('mouseenter', () => (onElement = elem))
    elem.addEventListener('mouseleave', () => (onElement = undefined))
  })
})





</script>


</body>
</html>