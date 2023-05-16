<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>관리자 회원가입 페이지</title>
    <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    <meta name="apple-mobile-web-app-title" content="CodePen">
    <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
    <link rel="canonical" href="https://codepen.io/kotAndy/pen/gJBXNK" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <script>
        window.console = window.console || function(t) {};
    </script>
    <style>
        .join__result {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100vw;
            height: 200px;
            overflow: hidden;
        }
    </style>
    <?php include "../include/head.php" ?>
</head>

<body class="gray">
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->


    <main id="main" class="container">
        <div class="intro__inner center bmStyle">
            <picture class="intro__images">
                <!-- <source srcset="assets/img/join01.png, assets/img/join01@2x.png 2x, assets/img/join01@3x.png 3x" />
                <img src="" alt="회원가입 이미지"> -->

                <div class="join__result">
                    <canvas class="illo"></canvas>
                </div>
            </picture>
            <p class="intro__text">
                회원가입이 완료되었습니다.
            </p>
        </div>
        <!-- //intro__inner -->


        <div class="join__inner">
            <h2> 완료</h2>
            <div class="index">
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li class="active">3</li>
                </ul>
            </div>
           
            <div class="intro__btn center">
                <a href="#">관리자 로그인</a>
            </div>
        </div>


    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- //footer -->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

    <script src='https://unpkg.com/zdog@1/dist/zdog.dist.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js'></script>
    <script id="rendered-js">
        const getRandom = (min, max) => {
            return Math.random() * (max - min) + min;
        };

        const illoElem = document.querySelector('.illo');
        const w = 160;
        const h = 160;
        const minWindowSize = Math.min(window.innerWidth, window.innerHeight);
        const zoom = Math.min(20, Math.floor(minWindowSize / w));
        illoElem.setAttribute('width', w * zoom);
        illoElem.setAttribute('height', h * zoom);

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
            path: [{
                    x: 20,
                    y: 40
                },
                {
                    x: 0,
                    y: 60
                },
                {
                    x: -20,
                    y: 40
                }
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
            for (let i = 0; i < 7; i += 0.1) {
                if (window.CP.shouldStopExecution(0)) break;
                let point = {
                    x: radius * 16 * Math.pow(Math.sin(i), 3) * radius,
                    y: -radius * (13 * Math.cos(i) * radius - 5 * Math.cos(2 * i) - 2 * Math.cos(3 * i) - Math.cos(4 * i))
                };

                path.push(point);
            }
            window.CP.exitedLoop(0);
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
            for (let i = 0; i < 10; i++) {
                if (window.CP.shouldStopExecution(1)) break;
                let radius = i % 2 ? starRadiusA : starRadiusB;
                let angle = TAU * i / 10 + TAU / 4;
                let point = {
                    x: Math.cos(angle) * radius,
                    y: Math.sin(angle) * radius
                };

                path.push(point);
            }
            window.CP.exitedLoop(1);
            return path;
        })();

        new Zdog.Shape({
            addTo: illo,
            path: starPath,
            translate: {
                z: -10
            },
            lineWidth: 2,
            color: '#fff',
            fill: true
        });


        // render & animate
        const deg = Math.PI / 180;

        const moveLike = new TimelineMax();
        moveLike.to({
            my: 0
        }, 5, {
            my: -20,
            onUpdate: function() {
                illo.translate.y = this.target.my;
                illo.updateRenderGraph();
            },
            ease: Back.easeInOut.config(1.7),
            repeat: -1,
            yoyo: true
        });


        const rotateLike = new TimelineMax();
        rotateLike.to({
            ry: 0
        }, 3, {
            ry: 360,
            onUpdate: function() {
                illo.rotate.y = this.target.ry * deg;
                illo.updateRenderGraph();
            },
            ease: Power1.easeInOut,
            repeat: -1,
            yoyo: true
        });
        //# sourceURL=pen.js
    </script>
</body>

</html>