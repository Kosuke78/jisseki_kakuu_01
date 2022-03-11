<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>架空サイト_イヤホン</title>
    <meta property="og:title" content="Sound_AroundのTOPページ" />
    <meta property="og:type" content="website" />
    <!-- URLは絶対パスで指定する -->
    <meta property="og:url" content="<?php echo __FILE__ ?>/index.php" /> 
    <!-- 画像は絶対パスで指定する -->
    <meta property="og:image" content="<?php echo __FILE__ ?>/assets/images/mv.jpg" />
    <meta property="og:site_name" content="Sound_Around" />
    <meta property="og:description" content="架空のイヤホン製品を紹介するWebサイトです。イヤホンで音楽を聴くと世界が変わります。" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <? echo __FILE__ ?>
    <header>
        <div class="header_inner">
            <div class="header_logo">
                <h1 class="header_title">Sound_Around</h1>
            </div>
            <div class="nav">
                <a href="" class="nav-item">シリーズ</a>
                <a href="" class="nav-item">機能</a>
                <a href="" class="nav-item">ブランド</a>
                <a href="" class="nav-item">お問い合わせ</a>
            </div>
            <div class="menu">
                <!-- checkedを効かせるためにinputが一番上かつ効かせる要素を同階層に置く -->
                <input type="checkbox" id="btn">
                <label for="btn" class="ham_btn"><span></span></label>
                <ul class="menu_list">
                <li>シリーズ</li>
                <li>機能</li>
                <li>ブランド</li>
                <li>お問い合わせ</li>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <section>
            <div class="mv_inner">
                <div class="mv_title_inner">
                    <p class="mv_title">SOUNDS</p>
                    <p class="mv_title">TECHNICAL</p>
                    <p class="mv_title">OVER THE WORLD</p>
                </div>
                <img src="./img/mv.jpg" alt="メインビジュアル" class="mv_img">
            </div>
        </section>
        <section>
            <div class="item-des-inner">
                <h2 class="common-title">FUNCTION</h2>
                <div class="item-card-u">
                    <div class="item-card-img-inner">
                        <img src="./img/item-car-img.jpg" alt="イヤホン画像1" class="item-card-img">
                    </div>
                    <div class="item-card-des-inner">
                        <p>カフェや飲食店など騒がしい場所もノイズキャンセリング。1人だけの空間を創造できます。</p>
                    </div>
                </div>
                <div class="item-card-d">
                    <div class="item-card-des-inner">
                        <p>スリーピングモードで自動的にOFFになります。夜寝る前の一曲を楽しめます。</p>
                    </div>
                    <div class="item-card-img-inner">
                        <img src="./img/item-card-img2.jpg" alt="イヤホン画像2" class="item-card-img">
                    </div>
                </div>
                <div class="item-card-d-sp">
                    <div class="item-card-img-inner">
                        <img src="./img/item-card-img2.jpg" alt="イヤホン画像2" class="item-card-img">
                    </div>
                    <div class="item-card-des-inner">
                        <p>スリーピングモードで自動的にOFFになります。夜寝る前の一曲を楽しめます。</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="product-inner">
                <h2 class="common-title">PRODUCT</h2>
                <div class="product-item-inner">
                    <div class="product-item-img-inner-l">
                        <a href="#"><p class="product-title">earphone</p><span class="filter"></span><img src="./img/製品1.jpg" alt="製品画像" class="product-img-l"></a>
                    </div>
                    <div class="product-item-img-inner-r">
                        <div class="img-r-inner">
                            <a href="#"><p class="product-title">wireless</p><span class="filter"></span><img src="./img/製品2.jpg" alt="製品画像" class="product-img-r"></a>
                        </div>
                        <div class="img-r-inner">
                            <a href="#"><p class="product-title">headphone</p><span class="filter"></span><img src="./img/製品3.jpg" alt="製品画像" class="product-img-r"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="news-inner">
                <h2 class="common-title">NEWS</h2>
                <div class="news-item-inner">
                    <div class="news-item">
                        <span class="date">2021-10-30</span>
                        <a href=""><p class="news-item-des">新製品「Air Beats」の入荷の遅延について</p></a>
                    </div>
                    <div class="news-item">
                        <span class="date">2021-10-02</span>
                        <a href=""><p class="news-item-des">「Air Sounds Pro」の不具合について</p></a>
                    </div>
                    <div class="news-item">
                        <span class="date">2021-08-15</span>
                        <a href=""><p class="news-item-des">当社製品とiOS15のペアリング時の注意点について</p></a>
                    </div>
                    <div class="news-item">
                        <span class="date">2021-09-01</span>
                        <a href=""><p class="news-item-des">冬季製品ラインナップのお知らせ</p></a>
                    </div>
                    <div class="news-item">
                        <span class="date">2021-01-04</span>
                        <a href=""><p class="news-item-des">2021年もよろしくおねがいします</p></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer_inner">
            <div class="footer_nav">
                <a href="" class="footer_nav_item">シリーズ</a>
                <a href="" class="footer_nav_item">機能</a>
                <a href="" class="footer_nav_item">ブランド</a>
                <a href="" class="footer_nav_item">お問い合わせ</a>
            </div>
        </div>
        <p class="copyright">©︎ SOUND_AROUND</p>
    </footer>
</body>
</html>