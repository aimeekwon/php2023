// 운영체제 정보 알아내기
let os = navigator.userAgent.toLowerCase();

if(os.indexOf("macintosh") > -1){
	document.querySelector("body").classList.add("macintosh");
} else if(os.indexOf("windows") > -1){
    document.querySelector("body").classList.add("windows");
} else if(os.indexOf("iphone") > -1){
    document.querySelector("body").classList.add("iphone");
} else if(os.indexOf("android") > -1){
    document.querySelector("body").classList.add("android");
}


// 하트
const getRandom = (min, max) => {
    return Math.random() * (max - min) + min ;
  }
  
  const illoElem = document.querySelector('.illo');
  const w = 160;
  const h = 160;
  const minWindowSize = Math.min( window.innerWidth, window.innerHeight );
  const zoom = Math.min( 20, Math.floor( minWindowSize / w ) );
  illoElem.setAttribute( 'width', w * zoom );
  illoElem.setAttribute( 'height', h * zoom );
  
  let illo = new Zdog.Illustration({
    element: illoElem,
    dragRotate: true
  });
  
  const TAU = Math.PI * 2; // easier to read constant
  
  // fill bubble
  new Zdog.RoundedRect({
    addTo: illo,
      width: 120,
    height: 80,
      fill: true,
      stroke: 4,
      cornerRadius: 14,
    color: '#fe6e7b'
  });
  new Zdog.Shape({
    addTo: illo,
    path: [
      { x:   20, y: 40 },
      { x:  0, y:  60 },
      { x: -20, y:  40 },
    ],
      stroke: 4,
      fill: true,
    closed: false,
    color: '#fe6e7b'
  });
  
  // shape heart
  var heartPath = (() => {
    let path = [];
      const radius = 1.3;
    for ( let i=0; i < 7; i += 0.1 ) {
      let point = {
        x: radius * 16 * Math.pow(Math.sin( i ), 3) * radius,
        y: -radius * (13 * Math.cos( i ) * radius - 5 * Math.cos( 2 * i ) - 2 * Math.cos( 3 * i ) - Math.cos( 4 * i )),
      };
      path.push( point );
    }
    return path;
  })();
  
  new Zdog.Shape({
    addTo: illo,
    path: heartPath,
    closed: false,
    stroke: 2,
    color: '#fff',
      fill: true,
      translate: {
          z: 10
      }
  });
  
  // star shape
  var starPath = (() => {
    let path = [];
    const starRadiusA = 25;
    const starRadiusB = 15;
    for ( let i = 0; i < 10; i++ ) {
      let radius = i % 2 ? starRadiusA : starRadiusB;
      let angle = TAU * i/10 + TAU/4;
      let point = {
        x: Math.cos( angle ) * radius,
        y: Math.sin( angle ) * radius,
      };
      path.push( point );
    }
    return path;
  })();
  
  new Zdog.Shape({
      addTo: illo,
    path: starPath,
    translate: { z: -10 },
    lineWidth: 2,
    color: '#fff',
    fill: true,
  });
  
  // render & animate
  const deg = (Math.PI/180);
  
  const moveLike = new TimelineMax();
  moveLike.to({my: 0}, 5, {
      my: -20,
    onUpdate: function () {
          illo.translate.y = this.target.my;
      illo.updateRenderGraph();
    },
    ease: Back.easeInOut.config(1.7),
    repeat: -1,
    yoyo: true
  });
  
  const rotateLike = new TimelineMax();
  rotateLike.to({ry: 0}, 3, {
    ry: 360,
    onUpdate: function () {
      illo.rotate.y = this.target.ry * deg;
      illo.updateRenderGraph();
    },
    ease: Power1.easeInOut,
    repeat: -1,
    yoyo: true
  });