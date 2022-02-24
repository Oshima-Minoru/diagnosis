<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <meta name="description" content="○○○○○○○○">
    <meta name="keywords" content="○○○○○○○○○">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Quiz">
    <meta property="og:type" content="article">
    <meta property="og:url" content="○○○○○○○">
    <meta property="og:image" content="img/icon.png">
    <meta property="og:description" content="○○○○○○○○">
    <meta property="og:site-name" content="Quiz">
    <link rel="icon" href="img/icon.png">
    <link rel="apple-touch-icon" sizes="180×180" href="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/aos.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    
  </head>

  <body>
    <div id="wrap">
      <header class="header">
      </header>

      <main>
        <div class="content">
          <div class="top-page">
            <div class="top-title">
            <img src="./img/charge-me-logo.png" alt="">
            <h2>パーソナルプロテイン無料診断</h2>
            </div>
            <img src="./img/toppage-banner.svg" alt="">
            <div class="button" onclick="startBtnClick()">
              診断を始める
              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                  <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                    <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                    <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                  </g>
                  <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                    <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                    <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                  </g>
                </g>
              </svg>
            </div>
          </div>
          <div class="quiz result-page">
            <div class="banner banner-result">
              <!-- <img class="banner-subtext" src="img/subtext-1.svg" alt=""> -->
            </div>
            <div class="loader-desc">
              <span name="username" class="text-bold">xx</span>さん専用にパーソナライズ中...
            </div>
            <p class="quiz-title"><span name="username" class="text-bold">xx</span>さんの診断結果</p>
            <div class="quiz-content">
              <div class="result-chart">
                <canvas id="marksChart" width="400" height="300"></canvas>
              </div>
              <div id="result-protain" class="result-explain">
                <p class="result-title">
                  <span name="username" class="text-bold">xx</span>さんは、タンパク質の充足度が一番小さい<span class="text-bold">です。</span>
                </p>
                <p class="result-text">
                  <span name="username" class="text-bold">xx</span>さんにお勧めのケアは、タンパク質を補給することです。<br>
                  普段からお肉、魚、卵や豆を意識して取りましょう。ただし、普段の食事だけではタンパク質は不足しがちです。<br>
                  身体を動かすときには更に多くのタンパク質が必要です。<br>
                  <span name="username" class="text-bold">xx</span>さんには脂質控えめでタンパク質が摂れる、プロテインを多く配合いたします。
                </p>
                <p class="result-attension">
                  <br>
                  <span class="attension-title">注意点</span>
                  <br>
                  <span class="attension1">・自然由来の原料を用いておりますが、サプリメントに抵抗がある方は、良ければ<a href="http://kinnikushokudo.jp/">こちらのサービス</a>もご覧下さい。<br></span>
                  <span class="attension2">・自然由来の原料を用いておりますが、必要に応じて医師に相談の上、サービスのご利用を検討下さい。<br></span>
                  <span class="attension3">・お腹に優しい豆由来のプロテインなどをご用意致します。</span>
                </p>
                <p class="result-notice">
                  美と健康に拘った玄米プロテインをベースに、<span name="username" class="text-bold">xx</span>さんにパーソナライズされた栄養素を配合いたします。
                </p>
                <a class="button" href="https://test-diagnosis.herokuapp.com/">
                  ご購入をご検討の方はこちらからお進み下さい。
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                    <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                      <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                        <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                      </g>
                      <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                        <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <div id="result-break" class="result-explain">
                <p class="result-title">
                  <span name="username" class="text-bold">xx</span>さんは、休憩の充足度が一番小さい<span class="text-bold">です。</span>
                </p>
                <p class="result-text">
                  <span name="username" class="text-bold">xx</span>さんにお勧めのケアは、身体の回復です。<br>
                  健やかな毎日を過ごすためには、腸内環境を整えるのが効果的。<br>
                  イヌリンオリゴ糖は善玉菌を支え、身体を中から整えます。<br>
                  ただし、普段の食事だけではこれらの栄養素は不足しがちです。<br>
                  <span name="username" class="text-bold">xx</span>さんには体内環境を整える成分を多く配合いたします。
                </p>
                <p class="result-attension">
                  <br>
                  <span class="attension-title">注意点</span>
                  <br>
                  <span class="attension1">・自然由来の原料を用いておりますが、サプリメントに抵抗がある方は、良ければ<a href="http://kinnikushokudo.jp/">こちらのサービス</a>もご覧下さい。<br></span>
                  <span class="attension2">・自然由来の原料を用いておりますが、必要に応じて医師に相談の上、サービスのご利用を検討下さい。<br></span>
                  <span class="attension3">・お腹に優しい豆由来のプロテインなどをご用意致します。</span>
                </p>
                <p class="result-notice">
                  美と健康に拘った玄米プロテインをベースに、<span name="username" class="text-bold">xx</span>さんにパーソナライズされた栄養素を配合いたします。
                </p>
                <a class="button" href="https://test-diagnosis.herokuapp.com/">
                  ご購入をご検討の方はこちらからお進み下さい。
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                    <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                      <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                        <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                      </g>
                      <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                        <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <div id="result-exercise" class="result-explain">
                <p class="result-title">
                  <span name="username" class="text-bold">xx</span>さんは、運動の充足度が一番小さい<span class="text-bold">です。</span>
                </p>
                <p class="result-text">
                  <span name="username" class="text-bold">xx</span>さんにお勧めのケアは、運動習慣です。<br>
                  運動には脂肪をエネルギーに変換するパントテン酸、身体作りにカルシウムとタンパク質が必要です。<br>
                  ただし、普段の食事だけではこれらの栄養素は不足しがちです。<br>
                  <span name="username" class="text-bold">xx</span>さんにはプロテイン、カルシウムなどをバランスよく配合いたします。         
                </p>
                <p class="result-attension">
                  <br>
                  <span class="attension-title">注意点</span>
                  <br>
                  <span class="attension1">・自然由来の原料を用いておりますが、サプリメントに抵抗がある方は、良ければ<a href="http://kinnikushokudo.jp/">こちらのサービス</a>もご覧下さい。<br></span>
                  <span class="attension2">・自然由来の原料を用いておりますが、必要に応じて医師に相談の上、サービスのご利用を検討下さい。<br></span>
                  <span class="attension3">・お腹に優しい豆由来のプロテインなどをご用意致します。</span>
                </p>
                <p class="result-notice">
                  美と健康に拘った玄米プロテインをベースに、<span name="username" class="text-bold">xx</span>さんにパーソナライズされた栄養素を配合いたします。
                </p>
                <a class="button" href="https://test-diagnosis.herokuapp.com/">
                  ご購入をご検討の方はこちらからお進み下さい。
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                    <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                      <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                        <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                      </g>
                      <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                        <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <div id="result-gap" class="result-explain">
                <p class="result-title">
                  <span name="username" class="text-bold">xx</span>さんは、理想の体重とのGAPの充足度が一番小さい<span class="text-bold">です。</span>
                </p>
                <p class="result-text">
                  <span name="username" class="text-bold">xx</span>さんにお勧めのケアは、体重管理です。<br>
                  体重のコントロールには脂肪のコントロールが必要になります。<br>
                  脂肪の燃焼にはLカルニチン,DHA,緑茶カテキンなどが効果的です。<br>
                  ただし、普段の食事だけではこれらの栄養素は不足しがちです。<br>
                  <span name="username" class="text-bold">xx</span>さんには脂肪の燃焼を助ける成分を多く配合いたします。
                </p>
                <p class="result-attension">
                  <br>
                  <span class="attension-title">注意点</span>
                  <br>
                  <span class="attension1">・自然由来の原料を用いておりますが、サプリメントに抵抗がある方は、良ければ<a href="http://kinnikushokudo.jp/">こちらのサービス</a>もご覧下さい。<br></span>
                  <span class="attension2">・自然由来の原料を用いておりますが、必要に応じて医師に相談の上、サービスのご利用を検討下さい。<br></span>
                  <span class="attension3">・お腹に優しい豆由来のプロテインなどをご用意致します。</span>
                </p>
                <p class="result-notice">
                  美と健康に拘った玄米プロテインをベースに、<span name="username" class="text-bold">xx</span>さんにパーソナライズされた栄養素を配合いたします。
                </p>
                <a class="button" href="https://test-diagnosis.herokuapp.com/">
                  ご購入をご検討の方はこちらからお進み下さい。
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                    <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                      <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                        <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                      </g>
                      <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                        <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
              <div id="result-vitamin" class="result-explain">
                <p class="result-title">
                  <span name="username" class="text-bold">xx</span>さんは、ビタミン・ミネラルの充足度が一番小さい<span class="text-bold">です。</span>
                </p>
                <p class="result-text">
                  <span name="username" class="text-bold">xx</span>さんにお勧めのケアは、ビタミン・ミネラルの補給です。<br>
                  ビタミン・ミネラルが不足すると身体のバランスが崩れてしまいます。<br>
                  野菜や果物、海藻類に多く含まれます。<br>
                  ただし、普段の食事だけではこれらの栄養素は不足しがちです。<br>
                  <span name="username" class="text-bold">xx</span>さんにはビタミン・ミネラルを多く配合いたします。          
                </p>
                <p class="result-attension">
                  <br>
                  <span class="attension-title">注意点</span>
                  <br>
                  <span class="attension1">・自然由来の原料を用いておりますが、サプリメントに抵抗がある方は、良ければ<a href="http://kinnikushokudo.jp/">こちらのサービス</a>もご覧下さい。<br></span>
                  <span class="attension2">・自然由来の原料を用いておりますが、必要に応じて医師に相談の上、サービスのご利用を検討下さい。<br></span>
                  <span class="attension3">・お腹に優しい豆由来のプロテインなどをご用意致します。</span>
                </p>
                <p class="result-notice">
                  美と健康に拘った玄米プロテインをベースに、<span name="username" class="text-bold">xx</span>さんにパーソナライズされた栄養素を配合いたします。
                </p>
                <a class="button" href="https://test-diagnosis.herokuapp.com/">
                  ご購入をご検討の方はこちらからお進み下さい。
                  <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="-1 -1 44 44">
                    <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                      <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                        <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                        <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                      </g>
                      <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                        <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                        <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <div class="slider">
            <div class="quiz quiz_01">
              <div class="banner banner-meal">
              </div>
              <p class="quiz-title">1. 普段朝食を食べますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/1-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-1-1" name="quiz-1" value="1">
                    <label name="quiz-1-1" for="quiz-1-1">食べない</label>
                  </div>
                  <div>
                    <img src="img/1-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-1-2" name="quiz-1" value="0.5">
                    <label name="quiz-1-2" for="quiz-1-2">週1-2回食べる</label><br>
                  </div>  
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/1-3.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-1-3" name="quiz-1" value="1">
                    <label name="quiz-1-3" for="quiz-1-3">週3-5回食べる</label>
                  </div>
                  <div>
                    <img src="img/1-4.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-1-4" name="quiz-1" value="0">
                    <label name="quiz-1-4" for="quiz-1-4">週6回以上食べる</label>
                  </div>  
                </div>
              </div>
            </div>
            <div class="quiz quiz_02">
              <div class="banner banner-meal">
              </div>
              <p class="quiz-title">2. どんな食材をよく食べますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/2-1.png" alt="">
                    <input type="checkbox" id="quiz-2-1" name="quiz-2" value="-1">
                    <label name="quiz-2-1" for="quiz-2-1">肉類</label>    
                  </div>
                  <div>
                    <img src="img/2-2.png" alt="">
                    <input type="checkbox" id="quiz-2-2" name="quiz-2" value="-1">
                    <label name="quiz-2-2" for="quiz-2-2">豆・納豆・豆腐</label><br>    
                  </div>
                  <div>
                    <img src="img/2-3.png" alt="">
                    <input type="checkbox" id="quiz-2-3" name="quiz-2" value="0">
                    <label name="quiz-2-3" for="quiz-2-3">米</label>
                  </div>
                  <div>
                    <img src="img/2-4.png" alt="">
                    <input type="checkbox" id="quiz-2-4" name="quiz-2" value="0">
                    <label name="quiz-2-4" for="quiz-2-4">麺類</label>
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/2-5.png" alt="">
                    <input type="checkbox" id="quiz-2-5" name="quiz-2" value="-1">
                    <label name="quiz-2-5" for="quiz-2-5">魚介類</label>    
                  </div>
                  <div>
                    <img src="img/2-6.png" alt="">
                    <input type="checkbox" id="quiz-2-6" name="quiz-2" value="0">
                    <label name="quiz-2-6" for="quiz-2-6">野菜</label><br>    
                  </div>
                  <div>
                    <img src="img/2-7.png" alt="">
                    <input type="checkbox" id="quiz-2-7" name="quiz-2" value="0">
                    <label name="quiz-2-7" for="quiz-2-7">パン</label>
                  </div>
                  <div>
                    <img src="img/2-8.png" alt="">
                    <input type="checkbox" id="quiz-2-8" name="quiz-2" value="1">
                    <label name="quiz-2-8" for="quiz-2-8">菓子類</label>
                  </div>  
                </div>
              </div>
            </div>
            <div class="quiz quiz_03">
              <div class="banner banner-lifestyle">
              </div>
              <p class="quiz-title">3. 仕事や日常の活動について教えて下さい</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/3-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-3-1" name="quiz-3" value="0">
                    <label name="quiz-3-1" for="quiz-3-1">デスクワークや座っていることが多い</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/3-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-3-2" name="quiz-3" value="20">
                    <label name="quiz-3-2" for="quiz-3-2">身体を動かすことが多い</label>    
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz-04">
              <div class="banner banner-lifestyle">
              </div>
              <p class="quiz-title">4. 普段どのくらい運動をしますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/4-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-4-1" name="quiz-4" value="20">
                    <label name="quiz-4-1" for="quiz-4-1">ほとんど運動をしない</label>    
                  </div>
                  <div>
                    <img src="img/4-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-4-2" name="quiz-4" value="40">
                    <label name="quiz-4-2" for="quiz-4-2">週1-2回運動する</label>    
                  </div>
                </div>
                <div class="right-content">
                <div>
                    <img src="img/4-3.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-4-3" name="quiz-4" value="60">
                    <label name="quiz-4-3" for="quiz-4-3">週3-5回運動する</label>    
                  </div>
                  <div>
                    <img src="img/4-4.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-4-4" name="quiz-4" value="80">
                    <label name="quiz-4-4" for="quiz-4-4">週6回以上運動する</label>    
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz-05">
              <div class="banner banner-lifestyle">
              </div>
              <p class="quiz-title">5. 平均の睡眠時間はどのぐらいですか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/5-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-5-1" name="quiz-5" value="70">
                    <label name="quiz-5-1" for="quiz-5-1">3時間未満</label>    
                  </div>
                  <div>
                    <img src="img/5-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-5-2" name="quiz-5" value="80">
                    <label name="quiz-5-2" for="quiz-5-2">3~6時間未満</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/5-3.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-5-3" name="quiz-5" value="100">
                    <label name="quiz-5-3" for="quiz-5-3">6~8時間未満</label>   
                  </div>
                  <div>
                    <img src="img/5-4.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-5-4" name="quiz-5" value="90">
                    <label name="quiz-5-4" for="quiz-5-4">8時間以上</label>    
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_06">
              <div class="banner banner-body">
              </div>
              <p class="quiz-title">6. 疲れやすいですか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/6-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-6-1" name="quiz-6" value="0">    
                    <label name="quiz-6-1" for="quiz-6-1">疲れやすい</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/6-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-6-2" name="quiz-6" value="1">
                    <label name="quiz-6-2" for="quiz-6-2">疲れにくい</label>   
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_07">
              <div class="banner banner-body">
              </div>
              <p class="quiz-title">7. 肌荒れが気になりますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/7-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-7-1" name="quiz-7" value="0">
                    <label name="quiz-7-1" for="quiz-7-1">気になる</label>
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/7-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-7-2" name="quiz-7" value="1">
                    <label name="quiz-7-2" for="quiz-7-2">気にならない</label>   
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_08">
              <div class="banner banner-body">
              </div>
              <p class="quiz-title">8. 目の疲れが気になりますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/8-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-8-1" name="quiz-8" value="0">
                    <label name="quiz-8-1" for="quiz-8-1">気になる</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/8-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-8-2" name="quiz-8" value="1">
                    <label name="quiz-8-2" for="quiz-8-2">気にならない</label>   
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_09">
              <div class="banner banner-body">
              </div>
              <p class="quiz-title">9. 歯や骨の強さが気になりますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/9-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-9-1" name="quiz-9" value="0">
                    <label name="quiz-9-1" for="quiz-9-1">気になる</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/9-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-9-2" name="quiz-9" value="1">
                    <label name="quiz-9-2" for="quiz-9-2">気にならない</label>   
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_10">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">10. あなたのお名前を教えてください（ニックネーム可）</p>
              <div class="quiz-content">
                  <input type="text" class="name" id="quiz-name" name="quiz-name" placeholder="お名前">
              </div>
            </div>
            <div class="quiz quiz_11">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">11. あなたの性別を教えてください</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/11-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-11-1" name="quiz-11" value="0">
                    <label name="quiz-11-1" for="quiz-11-1">男性</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/11-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-11-2" name="quiz-11" value="-5">
                    <label name="quiz-11-2" for="quiz-11-2">女性</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_12">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">12. あなたの年齢を教えてください</p>
              <div class="quiz-content quiz-single">
                <div class="input-field">
                  <!-- <img src="img/11.png" alt=""> -->
                  <input type="number" class="edit-number" id="quiz-old" name="quiz-old" placeholder="30" min="0">歳  
                </div>
            </div>
            </div>
            <div class="quiz quiz_13">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">13. あなたの身長を教えてください</p>
              <div class="quiz-content quiz-single">
                <img src="img/13.png" alt="">
                <div class="input-field">
                  <input type="number" class="edit-number" id="quiz-length" name="quiz-length" placeholder="160" min="0">cm
                </div>
              </div>
            </div>
            <div class="quiz quiz_14">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">14. あなたの体重を教えてください</p>
              <div class="quiz-content quiz-single">
                <img src="img/14.png" alt="">
                <div class="input-field">
                  <input type="number" class="edit-number" id="quiz-weight" name="quiz-weight" placeholder="50" min="0">kg
                </div>
              </div>
            </div>
            <div class="quiz quiz_15">
              <div class="banner banner-yourself">
              </div>
              <p class="quiz-title">15. あなたの理想とする体重を教えてください</p>
              <div class="quiz-content quiz-single">
                <img src="img/15.png" alt="">
                <div class="input-field">
                  <input type="number" class="edit-number" id="quiz-ideal-weight" name="quiz-ideal-weight" placeholder="50" min="0">kg
                </div>
              </div>
            </div>
            <div class="quiz quiz_16">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">16. サプリメントには抵抗がありますか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/16-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-16-1" name="quiz-16" value="0">
                    <label name="quiz-16-1" for="quiz-16-1">抵抗がある</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/16-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-16-2" name="quiz-16" value="1">
                    <label name="quiz-16-2" for="quiz-16-2">抵抗はない</label>   
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_17">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">17. 乳製品を取るとお腹を壊しやすいですか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/17-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-17-1" name="quiz-17" value="0">
                    <label name="quiz-17-1" for="quiz-17-1">はい</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/17-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-17-2" name="quiz-17" value="1">
                    <label name="quiz-17-2" for="quiz-17-2">いいえ</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_18">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">18. 大きな病歴があれば教えて下さい</p>
              <div class="quiz-content quiz-single">
                <img src="img/18.png" alt="">
                <div class="radio-content">
                  <div>
                    <input type="radio" id="quiz-18-1" name="quiz-18" value="0">
                    <label name="quiz-18-1" for="quiz-18-1">ある</label>  
                  </div>
                  <div>
                    <input class="next-radio" type="radio" id="quiz-18-2" name="quiz-18" value="1">
                    <label name="quiz-18-2" for="quiz-18-2">特にない</label>  
                  </div>
                </div>
                <textarea id="quiz-medical" name="quiz-medical" rows="3" cols="50" placeholder="テキスト" disabled onchange="medicalChanged()"></textarea>
              </div>
            </div>
            <div class="quiz quiz_19">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">19. アレルギーをお持ちですか？</p>
              <div class="quiz-content quiz-single">
                <img src="img/19.png" alt="">
                <div class="radio-content">
                  <div>
                    <input type="radio" id="quiz-19-1" name="quiz-19" value="0">
                    <label name="quiz-19-1" for="quiz-19-1">はい</label>  
                  </div>
                  <div>
                    <input type="radio" id="quiz-19-2" name="quiz-19" value="1">
                    <label name="quiz-19-2" for="quiz-19-2">いいえ</label>  
                  </div>
                </div>
                <textarea id="quiz-allergy" name="quiz-allergy" rows="3" cols="50" placeholder="テキスト" disabled onchange="allergyChanged()"></textarea>
              </div>
            </div>
            <div class="quiz quiz_20">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">20. 妊娠中ですか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/20-1.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-20-1" name="quiz-20" value="0">
                    <label name="quiz-20-1" for="quiz-20-1">はい</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/20-2.png" alt="">
                    <input class="next-radio" type="radio" id="quiz-20-2" name="quiz-20" value="1">
                    <label name="quiz-20-2" for="quiz-20-2">いいえ</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="quiz quiz_21">
              <div class="banner banner-attention">
              </div>
              <p class="quiz-title">21. 授乳中ですか？</p>
              <div class="quiz-content">
                <div class="left-content">
                  <div>
                    <img src="img/21-1.png" alt="">
                    <input type="radio" id="quiz-21-1" name="quiz-21" value="0">
                    <label name="quiz-21-1" for="quiz-21-1">はい</label>    
                  </div>
                </div>
                <div class="right-content">
                  <div>
                    <img src="img/21-2.png" alt="">
                    <input type="radio" id="quiz-21-2" name="quiz-21" value="1">
                    <label name="quiz-21-2" for="quiz-21-2">いいえ</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="progress" data-name="progressbar" role="progressbar" aria-valuemin="0" aria-valuemax="100">
            <span class="slider__label sr-only"></span>
          </div>

          <div class="button evaluate-btn" onclick="output_result()">
            診断結果を確認する
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 41 41">
              <g id="Group_2" data-name="Group 2" transform="translate(-820.328 -612.328)">
                <g id="Ellipse_1" data-name="Ellipse 1" transform="translate(820.328 612.328)" fill="none" stroke="#fff" stroke-width="1">
                  <circle cx="20.5" cy="20.5" r="20.5" stroke="none"/>
                  <circle cx="20.5" cy="20.5" r="20" fill="none"/>
                </g>
                <g id="Group_1" data-name="Group 1" transform="translate(830.656 629.367)">
                  <path id="Path_1" data-name="Path 1" d="M829.75,633.5h20.026" transform="translate(-829.75 -630.039)" fill="none" stroke="#fff" stroke-width="1"/>
                  <path id="Path_2" data-name="Path 2" d="M847.359,628.82l3.578,3.578-3.578,3.578" transform="translate(-830.733 -628.82)" fill="none" stroke="#fff" stroke-width="1"/>
                </g>
              </g>
            </svg>
          </div>
        </div> <!-- end content -->
      </main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
      </script>
    </div>
    <!-- JavaScript読み込み -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>

    <script src="scripts/aos.js"></script>
    <script src="scripts/file.js"></script>
    <script src="scripts/main.js"></script>

    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>

    <!-- <script>
      var marksCanvas = document.getElementById("marksChart");
  
      var marksData = {
          labels: ["English", "Maths", "Physics", "Chemistry", "Biology"],
          datasets: [{
              label: "Student A",
              backgroundColor: "rgba(200,0,0,0.2)",
              data: [65, 75, 70, 80, 60]
          }]
      };
  
      var radarChart = new Chart(marksCanvas, {
          type: 'radar',
          data: marksData
      });
    </script> -->
    <script>
    function output_result(){
      $("#msg").html("");
      var outString = getOutString();
      if(outString != "")
      {
        $.ajax({
          url : "output_result.php", 
          type : "GET",
          data : 'user_data='+outString,
          beforeSend: function(xhr){
            $(".loader").css("display", "block");
            $(".loader-desc").css("display", "block");
          },
          error: function(xhr,status,error){
            $(".loader").css("display", "none");
            $(".loader-desc").css("display", "none");
            $("#msg").html("<label class='error'>サーバーとの通信でエラーが発生しました。</label>");
          },
          success: function(result){
            $(".loader").css("display", "none");
            $(".loader-desc").css("display", "none");
            $("#msg").html("success");
            //startDiagnosis();

            var outValue = getOutValue();
            if(outValue != "")
            {
              $.ajax({
                url : "output_result.php", 
                type : "GET",
                data : 'user_data_value='+outValue,
                beforeSend: function(xhr){
                  $(".loader").css("display", "block");
                  $(".loader-desc").css("display", "block");
                },
                error: function(xhr,status,error){
                  $(".loader").css("display", "none");
                  $(".loader-desc").css("display", "none");
                  $("#msg").html("<label class='error'>サーバーとの通信でエラーが発生しました。</label>");
                },
                success: function(result){
                  $(".loader").css("display", "none");
                  $(".loader-desc").css("display", "none");
                  $("#msg").html("success");
                  startDiagnosis();
                }
              });
            }
          }
        });
      }
    }
    </script>
  </body>
</html>