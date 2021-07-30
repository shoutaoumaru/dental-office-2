<?php
 /* Template Name: expense
 */
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>自費治療について | 歯科テンプレート2</title>
  <?php get_header(); ?>
</head>

<body>
  <div id="main-wrapper" class="expense-wrapper animsition">
    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a class="animsition-link" href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a href=" <?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/')); ?>"><span>ホーム</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/about')); ?>"><span>当院について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/treatment')); ?>"><span>診療について</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href=" <?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="/recruit"><span>採用情報</span></a>
            </li>
          </ul>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li><a href="tel:092-686-7954"><i class="icon-tel"></i></a></li>
          <li><a target="_blank" href="https://epark.jp/dentistry/"><i class="icon-net"></i></a></li>
          <li><a href="https://goo.gl/maps/CyWuFwBDtuB9U6Ld7" target="_blank"><i class="icon-map"></i></a></li>
        </ul>
      </nav>
      <!-- /.sp-navbtn -->
    </header>
    <!-- /.header -->
    <div class="expense-contents">
      <div id="expense" class="expense">
        <div class="c-container">
          <h2 class="page-ttl-under clip-js1 top">自費治療について</h2>
          <div class="expense__block">
            <div class="page-lead-box appear up">
              <p class="item"> 口元に自信が持てる<br />本当の笑顔を手に入れませんか？</p>
            </div>
            <!-- title-sec -->
            <section class="first appear up">
              <h3 class="page-sub-ttl item">
                <span class="jpn">ホワイトニング</span>
                <span class="c-txt-md">WHITENING</span>
              </h3>
            </section>
            <!-- info-sec -->
            <div class="intro-sec  appear up">
              <div class="intro-img item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/whitenig__2.jpg" alt="" />
              </div>
              <div class="intro-desc item">
                <p class="c-txt-sm">
                  ホワイトニングはあなたの素敵な笑顔を一生涯サポートさせていただくために、歯と口もとの美と健康をトータルでサポートさせていただく審美歯科サロンです。<br />豊富なデンタルエステメニューを取り揃え、心地よく通っていただける接遇やサービスをご用意し、あなたの来店を心からお待ち申し上げます。
                </p>
              </div>
            </div>
            <!-- recommend-sec -->
            <div class="recommend-sec appear up">
              <div class="recommend-sec__inner item">
                <div class="recommend__ttl-side">
                  <p class="recommend__ttl">
                    <span>このような方に<br />オススメです</span>
                  </p>
                </div>
                <div class="recommend-list-side">
                  <ul class="recommend-list c-txt-sm">
                    <li>歯を白くしたいと思っている方</li>
                    <li>笑顔がより素敵になりたい方</li>
                    <li>歯科医院の雰囲気が苦手な方</li>
                    <li>
                      30歳を超え、口臭や歯周病などの生活習慣病が気になってきており、予防改善したい方
                    </li>
                    <li>歯のみならず、トータル的に口元の美人力を高めたい方</li>
                    <li>
                      将来インプラントや入れ歯にならないよう、今のうちから継続的にメンテナンスを受けられたい方
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- privaterroom-sec -->
            <section class="privateroom-sec appear up">
              <div class="expense-sub-ttl-wapper item">
                <h3 class="expense-sub-ttl">個室空間をご用意しています</h3>
              </div>
              <div class="privateroom-sec-inner item">
                <div class="privateroom-img">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home/room.jpg" alt="" />
                </div>
                <div class="privateroom-desc">
                  <section>
                    <h4>座り心地の良いチェアシート</h4>
                    <p class="c-txt-sm">
                      ホワイトニングの施術を提供する部屋はすべて個室となります。プライバシーが守られるので安心して相談できるのもポイントです。施術を提供する個室は、木・石・布といった自然界にある素材を使用することでゆっくりと寛いでいただけるような環境を整えております。<br />個室に完備されているのはホワイトニング専用で開発されたヘブンリーチェア。チェアシートは低反発ウレタン素材と上質なシーツでくるまれており、高級ホテルのベッドのような快適さが自慢です。
                    </p>
                  </section>
                  <section>
                    <h4>お母様も安心のキッズコーナー</h4>
                    <p class="c-txt-sm">
                      通ってみたいけど、こどもがいるから…とお悩みの方もご安心ください。<br />当医院にはキッズコーナーも完備しておりますので、お子様連れのお母様も安心して施術を受けられます。
                    </p>
                  </section>
                </div>
              </div>
            </section>
            <!-- effect-sec -->
            <section class="effect-sec">
              <div class="expense-sub-ttl-wapper appear up">
                <h3 class="expense-sub-ttl item">
                  歯にも身体にも優しく、確実な効果を提供します
                </h3>
              </div>
              <ul class="effect-list appear up">
                <li class="item">
                  <section>
                    <h4>歯を削らない<br />身体にやさしい施術です。</h4>
                    <p class="c-txt-sm">
                      ホワイトエッセンスは、歯を傷つけずに健康な人がもっと健康でいられる、より素敵な笑顔を手に入れることができるデンタルエステサロンです。
                    </p>
                  </section>
                </li>
                <li class="item">
                  <section>
                    <h4>効果に<br />自信があります。</h4>
                    <p class="c-txt-sm">
                      これまでの膨大な症例実績データにより症例結果を予測することが可能になりました。これにより、目標色に到達させるための各種コースをご用意いたしました。<br />白さ結果保障コース等。
                    </p>
                  </section>
                </li>
                <li class="item">
                  <section>
                    <h4>痛みなく<br />快適な施術が特徴です。</h4>
                    <p class="c-txt-sm">
                      痛み無く歯にやさしいホワイトニングをはじめ、眠ってしまうほど快適なクリーニング、施術後の爽快感が定評の造顔マッサージなど。気持ちよくキレイになれるサロンとしてご好評いただいております。
                    </p>
                  </section>
                </li>
              </ul>
            </section>
            <!-- other-sec -->
            <section class="other-sec appear right">
              <h3 class="page-sub-ttl item">
                <span class="jpn">その他の治療</span>
                <span class="c-txt-md">OTHER TREATMENT</span>
              </h3>
              <!-- other-treatment-list -->
              <ul class="other-treatment-list item">
                <li class="treatment01">
                  <img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/expense/images/icon-other03.svg" />
                  <p>インプラント</p>
                </li>
                <li class="treatment02">
                  <img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/expense/images/icon-other02.svg"
                    alt="" />
                  <p>ホワイトニング</p>
                </li>
                <li class="treatment03">
                  <div class="list-inner-left">
                    <img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/expense/images/icon-other01.svg"
                      alt="" />
                    <p>補綴物</p>
                  </div>
                  <div class="list-inner-right">
                    <p class="c-txt-sm">
                      オールセラミックス<br />メタルセラミックス<br />ハイブリッド<br />金属床<br />インプラント体<br />上部構造<br />インプラントアバットメント
                    </p>
                  </div>
                </li>
              </ul>
            </section>
          </div>
        </div>
      </div>
      <!-- /.expense -->
      <section id="information" class="p-information">
        <div class="c-container appear up">
          <div class="p-information__block item">
            <div class="p-information__left">
              <h2 class="sec-title">
                <span class="c-txt-xs">INFORMATION</span>
                <span class="c-txt-md">診療時間</span>
              </h2>
              <div class="p-information__tel">
                <p class="tel-num"><span>TEL. </span><a href="tel:092-686-7954">092-686-7954</a></p>
              </div>
            </div>
            <div class="p-information__right">
              <div class="p-information__open">
                <table class="p-information__open__table">
                  <tbody>
                    <tr>
                      <th class="th-hour-ttl">診療時間</th>
                      <th class="th-week01">月</th>
                      <th class="th-week02">火</th>
                      <th class="th-week03">水</th>
                      <th class="th-week04">木</th>
                      <th class="th-week05">金</th>
                      <th class="th-week06">土</th>
                      <th class="th-week07">日・祝</th>
                    </tr>
                    <!-- 01 -->
                    <tr>
                      <th>9:00-12:00</th>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/images/hour-slash.svg" alt=""
                          class="opening-tbl-slash"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="https://www.haru-shika.jp/wp/wp-content/themes/haru/images/hour-slash.svg" alt=""
                          class="opening-tbl-slash"></td>
                    </tr>
                    <!-- 02 -->
                    <tr>
                      <th>15:00-19:00</th>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-slash"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-circle.svg" alt="" class="opening-tbl-circle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-triangle"></td>
                      <td><img src="<?php echo get_template_directory_uri(); ?>/images/hour-slash.svg" alt="" class="opening-tbl-slash"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="p-information__text">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/hour-triangle.svg" alt=""><span>15:00～18:00</span></p>
                <p>休診日　木曜・日曜・祝日</p>
                <p>祝日がある週の木曜日は診療いたします。</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.p-information -->
    </div>
    <!-- /.expense-contents -->
    <footer id="footer" class="p-footer">
      <div class="p-footer__inner">
        <div class="p-footer__block01">
          <div class="p-footer__sec01">
            <p class="p-footer-clinic-name">RivRound歯科医院</p>
            <p class="p-footer-address">福岡県福岡市博多区博多駅前3-27-25第二岡部ビル9F<br>Tel：092-686-7954<br class="sp"></p>
          </div>
        </div>
        <div class="p-footer__block02">
          <ul class="p-footer__nav">
            <li class="gnav01"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
            <li class="gnav02"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/about')); ?>">当院について</a></li>
            <li class="gnav02"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
            <li class="gnav04"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
            <li class="gnav06"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
            <li class="gnav06"><a class="animsition-link c-txt-sm" href=" <?php echo esc_url( home_url('/expense')); ?>">採用情報</a></li>
          </ul>
          <small class="copyright">© RivRound.inc</small>
        </div>
      </div>
    </footer>
    <!-- /.footer -->
    <div class="mobile-menu">
      <nav class="mobile-menu__nav">
        <ul class="mobile-menu__list">
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">ホーム</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/about')); ?>">当医院について</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/treatment')); ?>">診療について</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/news')); ?>">お知らせ</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>">よくあるご質問</a></li>
          <li class="mobile-menu__item"><a class="animsition-link" href="<?php echo esc_url( home_url('/expense')); ?>">採用情報</a></li>
        </ul>
        <div class="reserve-btn-wrap">
          <div class="reserve-btn-tel">
            <h4>電話予約はこちら</h4>
            <div class="reserve-btn">
              <a href="tel:092-686-7954"><span>092-686-7954</span></a>
            </div>
          </div>
          <div class="reserve-btn-net">
            <h4>ネット予約はこちら</h4>
            <div class="reserve-btn">
              <a href="https://beauty.hotpepper.jp/" target="_blank"><span>ONLINE RESERVE</span></a>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- /.mobile-menu -->
  </div>
  <!-- /#main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <?php get_template_part('includes/c-footer'); ?>      
</body>

</html>