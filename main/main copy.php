<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그 만들기</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- SCRIPT -->
    <script defer src="assets/js/common.js"></script>
    
</head>
<body class="gray">
    
    <div id="skip">
        <a href="#header">헤더 영역 바로가기</a>
        <a href="#main">컨텐츠 영역 바로가기</a>
        <a href="#footer">푸터 영역 바로가기</a>
    </div>
    <!-- //skip -->

    <header id="header">
        <div class="header__inner container">
            <div class="left">
                <a href="../index.html" class="star">
                    <span class="blind">리스트보기</span>
                </a>
            </div>
            <h1 class="logo">
                <a href="main.html">Developer Blog</a>
            </h1>
            <div class="right">
                <ul>
                    <li><a href="join.html">회원가입</a></li>
                </ul>
            </div>
        </div>
        <nav class="nav__inner">
            <ul>
                <li><a href="join.html">회원가입</a></li>
                <li><a href="login.html">로그인</a></li>
                <li><a href="board.html">게시판</a></li>
                <li><a href="blog.html">블로그</a></li>
            </ul>
        </nav>
    </header>
    <!-- //header -->

    <main id="main" class="container">
        <div class="intro__inner bmStyle">
            <picture class="intro__images">
                <source srcset="assets/img/intro01.png, assets/img/intro01@2x.png 2x, assets/img/intro01@3x.png 3x" />
                <img src="assets/img/intro01.png" alt="소개이미지">
            </picture> 
            <p class="intro__text">
                어떤 일이라도 노력하고 즐기면 그 결과는 빛을 바란다고 생각합니다.
                신입의 열정과 도전정신을 깊숙히 새기며 배움에 있어 겸손함을 
                유지하며 세부적인 곳까지 파고드는 개발자가 되겠습니다.
            </p>
        </div>
        
        <div class="blog__inner">
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col4">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x" />
                            <img src="assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩의 기초</h3>
                            <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog02.jpg, assets/img/blog02@2x.jpg 2x, assets/img/blog02@3x.jpg 3x" />
                            <img src="assets/img/blog02.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 팁 및 트릭</h3>
                            <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg 2x, assets/img/blog03@3x.jpg 3x" />
                            <img src="assets/img/blog03.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog04.jpg, assets/img/blog04@2x.jpg 2x, assets/img/blog04@3x.jpg 3x" />
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col3">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x" />
                            <img src="assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩의 기초</h3>
                            <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog02.jpg, assets/img/blog02@2x.jpg 2x, assets/img/blog02@3x.jpg 3x" />
                            <img src="assets/img/blog02.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 팁 및 트릭</h3>
                            <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg 2x, assets/img/blog03@3x.jpg 3x" />
                            <img src="assets/img/blog03.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog04.jpg, assets/img/blog04@2x.jpg 2x, assets/img/blog04@3x.jpg 3x" />
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog05.jpg, assets/img/blog05@2x.jpg 2x, assets/img/blog05@3x.jpg 3x" />
                            <img src="assets/img/blog05.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog06.jpg, assets/img/blog06@2x.jpg 2x, assets/img/blog06@3x.jpg 3x" />
                            <img src="assets/img/blog06.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap bmStyle">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col2 line2">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x" />
                            <img src="assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩의 기초</h3>
                            <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog02.jpg, assets/img/blog02@2x.jpg 2x, assets/img/blog02@3x.jpg 3x" />
                            <img src="assets/img/blog02.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 팁 및 트릭</h3>
                            <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                        </div>
                        <div class="card__info">
                            <span class="author">글쓴이</span>
                            <span class="date">라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg 2x, assets/img/blog03@3x.jpg 3x" />
                            <img src="assets/img/blog03.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog04.jpg, assets/img/blog04@2x.jpg 2x, assets/img/blog04@3x.jpg 3x" />
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__wrap">
                <h2>Javascript Topic</h2>
                <div class="cards__inner col6">
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog01.jpg, assets/img/blog01@2x.jpg 2x, assets/img/blog01@3x.jpg 3x" />
                            <img src="assets/img/blog01.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩의 기초</h3>
                            <p>코딩은 컴퓨터에게 지시를 내리기 위해 컴퓨터가 이해할 수 있는 언어인 프로그래밍 언어를 사용하는 과정입니다. 코딩은 웹 사이트, 애플리케이션 및 소프트웨어를 만드는 데 사용됩니다. 코딩은 창의적이고 도전적이며 보람 있는 활동이 될 수 있습니다.</p>
                        </div>
                        <div class="card__info">
                            <a href="#" class="more">더보기</a>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog02.jpg, assets/img/blog02@2x.jpg 2x, assets/img/blog02@3x.jpg 3x" />
                            <img src="assets/img/blog02.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 팁 및 트릭</h3>
                            <p>주석을 적극 활용하여 코드의 의도와 로직을 명확히 설명하세요. 이를 통해 다른 개발자들이 코드를 이해하고 협업하는 데 도움이 됩니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog03.jpg, assets/img/blog03@2x.jpg 2x, assets/img/blog03@3x.jpg 3x" />
                            <img src="assets/img/blog03.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog04.jpg, assets/img/blog04@2x.jpg 2x, assets/img/blog04@3x.jpg 3x" />
                            <img src="assets/img/blog04.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog05.jpg, assets/img/blog05@2x.jpg 2x, assets/img/blog05@3x.jpg 3x" />
                            <img src="assets/img/blog05.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>코딩 최신 트렌드</h3>
                            <p>코딩의 최신 트렌드는 인공 지능, 기계 학습 및 블록체인과 같은 분야의 새로운 기술과 사용입니다. 이 기술은 코딩을 사용하여 새로운 방식으로 문제를 해결하고 새로운 애플리케이션을 만들 수 있는 새로운 가능성을 열어줍니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                    <div class="card">
                        <figure class="card__img">
                            <source srcset="assets/img/blog06.jpg, assets/img/blog06@2x.jpg 2x, assets/img/blog06@3x.jpg 3x" />
                            <img src="assets/img/blog06.jpg" alt="">
                        </figure>
                        <div class="card__title">
                            <h3>자바스크립트</h3>
                            <p>자바스크립트는 웹 페이지를 동적으로 만드는 데 사용되는 스크립트 언어입니다. 브라우저에서 실행되며 HTML 및 CSS와 함께 사용됩니다. 자바스크립트는 배우고 사용하기 쉬운 언어이며 웹 개발에 매우 강력한 도구입니다.</p>
                        </div>
                        <div class="card__info">
                            <span>더보기</span>
                            <span>글쓴이</span>
                            <span>뷰</span>
                            <span>라이크</span>
                        </div>
                    </div>
                </div>          
            </div>
        </div>

        <!-- 
            <div class="sliders__inner"></div> 각 페이지 소개 배너
            <div class="join__inner"></div> 회원가입 페이지
            <div class="login__inner"></div> 로그인 페이지
            <div class="board__inner"></div> 게시판 페이지
            <div class="blog__inner"></div> 블로그 페이지

            <div class="joinAdmin__inner1"></div> 관리자 페이지
            <div class="joinAdmin__inner1"></div> 관리자 페이지
            <div class="joinAdmin__inner1"></div> 관리자 페이지
            
        <div class="banners__inner"></div>
        <div class="cards__inner"></div>
        <div class="images__inner"></div>
        <div class="ads__inner"></div>
        <div class="texts__inner"></div>
        <div class="login__inner"></div>
      
        <div class="bolg__inner"></div> -->
    </main>
    <!-- //main -->

    <footer id="footer">
        <div class="footer__inner btStyle mb100 container">
            <div>Copyright @ 2023 seungyeon</div>
            <div><a href="adminAgree.html">관리자 로그인</a> blog by seungyeon</div>
        </div>
    </footer>
    <!-- //footer -->
</body>
</html>