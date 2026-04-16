<?php
/*
Template Name: 00_トップページ
*/
?>
<?php
get_header();
?>
<main class="top" id="top">
    <section id="key-visual">
        <div class="container full">
            <div class="viewport-wrap first-view">
                <div class="movie">
                    <video autoplay muted playsinline loop>
                        <source src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\top-movie.mp4">
                        <p>
                            このブラウザーは HTML の動画に対応していません。
                        </p>
                    </video>
                </div>

                <div class="viewport-inner primary">
                    <div class="header-inner">
                        <h2><b class="yellow">遊</b>べて<b class="blue">学</b>べて<b class="yellow">繋</b>がれる!<span>20代〜30代向け会員制マッチングコミュニティ＆スクール</span></h2>
                    </div>
                </div>
                <div class="viewport-inner secondry">
                    <h2>NEWS</h2>
                    <p>hoge</p>
                    <p class="more">more →</p>
                </div>
            </div>
        </div>
    </section>
    <section id="story">
        <div class="wrapper orange">
            <div class="container default">
                <h2>気軽に学んで、自然につながる</h2>
                <p>ミライズは、<br>20代〜30代を対象にした “出会い・仲間・青春・成長” をまとめて叶えるコミュニティ です。<br>
                    イベント・旅行・講座・遊び・学び・マッチングがすべて1つになった、他にはない新しい居場所。<br>
                    「大人になってから、こんなに笑える場所があるなんて」そんな声がたくさん届いています。<br>
                    <br>
                    新しい出会いも大切な仲間も人生を変えるきっかけも。<br>
                    ミライズで全て手に入ります。
                </p>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="wrapper padding-less">
            <div class="container wide">
                <h2>About us</h2>
                <div class="column-single">
                    <p>今の時代、出会えるツールはたくさんあっても、一度きりの出会いばかりで、実際つながることは、なかなか難しい。心から笑った日はいつだろう。最後に恋したのはいつだっけ？思い出せない人もたくさんいることでしょう。<span class="underline-blue">大人って、もっと楽しいと思っていた。</span>けど現実は全く違った...来る日も来る日も家と職場の往復だけ。休日は家でダラダラ過ごすだけで<span class="underline-blue">毎日同じことの繰り返し。</span>刺激がない。子供の頃に思い描いていた大人になった自分は、<span class="underline-orange">もっともっとキラキラしている姿だった...</span>そんな理想と現実のギャップに、ふとため息が出る。ミライズは、そんな悩める大人たちが心から楽しめる遊び場として、ずっとつながっていける人との出会いの提供や、<span class="underline-orange">素の自分を自然と出せる場所作りをしています。</span></p>
                </div>
                <div class="column-flex">
                    <div class="inside-box">
                        <p>私たちが目指しているのは、<span class="underline-orange">参加者一人一人の幸福感と心の豊かさ（人間関係、信頼関係、生きた知識）の実現です。.</span>心から笑い合える仲間やパートナーとの出会いをキッカケに、学生の頃のような<span class="underline-orange">『今を全力で楽しむ！』.</span>をモットーに、笑いの絶えないイベントや活動を通して笑顔の輪を広げています！</p>
                    </div>
                    <div class="inside-box">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\images_aboutus-01.png">
                    </div>
                </div>
                <div class="column-flex reverse">
                    <div class="inside-box">
                        <p>ミライズには、似た価値観をしている人たちが集まってくるため、お互いの悩みや共通の体験を通し、打ち明け合うことで心の壁が自然と取り払われ、<span class="underline-orange">自分自身の可能性を広げるための新しい一歩を踏み出すことが出来ます。.</span>そして一生記憶に残るような最高の青春を感じていただき、私たちの大テーマである、『大人が青春体験をできる場所』を日々発信しております。</p>
                    </div>
                    <div class="inside-box">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\images_aboutus-02.png">
                    </div>
                </div>
                <div class="column-single text-align_center">
                    <p>本気の遊びを通して信頼関係を築き、人生を豊かにする知識を身に付けて、<br>
                        『今が最高に楽しい！』と心から思えるあなたになるためのお手伝いをさせていただいてます。<br>
                        『ミライズに出会えて本当に良かった』という喜びの声と笑顔の数が、私たちの活動の原動力です！</p>
                    <p class="catch-copy large">あなたも是非、この写真の彼らのように<br>
                        新たな青春の1ページを刻み始めませんか？</p>
                </div>
                <div class="button_cover">
                    <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\common\button_arrow.svg">
                    <a href="<?php echo home_url('/contact/'); ?>" class="button fit">
                        <p class="img-indent">
                            お問い合わせはこちら
                        </p>
                    </a>

                </div>
            </div>
    </section>
    <section id="concept">
        <div class="wrapper padding-less">
            <div class="container full">
                <div class="absolute-inner">
                    <h2>ミライズのコンセプト<span>MILIZE CONCEPT</span></h2>
                    <div class="button-wrap">
                        <div class="button_cover fit">
                            <a href="<?php echo home_url('/contact/'); ?>" class="button fit">
                                <p>
                                    お問い合わせはこちら
                                </p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="event">
        <div class="wrapper padding-less">
            <div class="container full">
                <p class="catch-copy large text-align_center">年間を通して、イベント盛りだくさん！</p>
                <div class="column-flex">
                    <div class="inside-box single">
                        <h2>EVENT<span>イベントの雰囲気紹介</span></h2>
                        <p>ミライズは毎月、いくつになっても、青春を味わえる場所を提供しています。どれに参加するかはあなた次第。みんなと仲を深めよう！</p>
                        <div class="button-wrap">
                            <div class="button_cover">
                                <a href="<?php echo home_url('/contact/'); ?>" class="button">
                                    <p>
                                        お問い合わせはこちら
                                    </p>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="inside-box double nested">
                        <div class="nested-box arrow">

                            <a href="<?php echo home_url('/contact/'); ?>" class="image-button">
                                <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\common\aroow_round.svg">
                            </a>

                        </div>
                        <div class="nested-box split">
                            <div class="split-box">
                                <div class="image-wrap">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\iamges_top-event01.png">
                                </div>
                            </div>
                            <div class="split-box">
                                <div class="import">
                                    <div class="date">
                                        <p>2025.08.21</p>
                                    </div>
                                    <div class="tag">
                                        <div class="tag_cover">
                                            <p class="tag">イベント</p>
                                            <p class="tag">イベント</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>青空の下で海水浴やビーチバレーを満喫！仲間と過ごす時間は笑顔が絶えず、夏ならではの特別な思い出になりました。</p>
                                </div>
                            </div>
                            <div class="split-box">
                                <div class="button_cover">
                                    <a href="<?php echo home_url('/contact/'); ?>" class="custom-button">
                                        <p>
                                            お問い合わせはこちら
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="nested-box split">
                            <div class="split-box">
                                <div class="image-wrap">
                                    <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\iamges_top-event02.png">
                                </div>
                            </div>
                            <div class="split-box">
                                <div class="import">
                                    <div class="date">
                                        <p>2025.08.21</p>
                                    </div>
                                    <div class="tag">
                                        <div class="tag_cover">
                                            <p class="tag">イベント</p>
                                            <p class="tag">イベント</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-box">
                                    <p>青空の下で海水浴やビーチバレーを満喫！仲間と過ごす時間は笑顔が絶えず、夏ならではの特別な思い出になりました。</p>
                                </div>
                            </div>
                            <div class="split-box">
                                <div class="button_cover">
                                    <a href="<?php echo home_url('/contact/'); ?>" class="custom-button">
                                        <p>
                                            お問い合わせはこちら
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="voice">
        <div class="container full">
            <h2>VOICE</h2>
            <div class="column-single">
                <div class="message">
                    <p>会員の方たちのリアルな声をお届け！<br>どんな出会いや学びがあったのか、リアルな体験談をお伝えします。</p>
                </div>
                <div class="television">
                    <div class="television-wrap">
                        <img src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\bg-television.svg">
                    </div>
                    <div class="television-inner">
                        <video autoplay muted playsinline loop>
                            <source src=" <?php echo get_template_directory_uri(); ?>/assets\images\top-page\top-movie.mp4">
                            <p>
                                このブラウザーは HTML の動画に対応していません。
                            </p>
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="cta">
        <div class="wrapper">
            <div class="container wide">
                <div class="column-single">
                    <h2><b class="orange">遊</b>んで、<b class="blue">学</b>んで、<b class="yellow">繋</b>がろう</h2>
                    <p class="text-align_center text-color_white">社会人になると、毎日が仕事中心。新しい仲間や刺激に出会う機会は減る。ミライズのテーマは遊べて学べて繋がれる。<br>
                        遊びを通してリフレッシュできるのはもちろん、会話や活動から自然と学びを得て、<br>
                        同世代の仲間とのつながりを広げよう。「初めてだから不安…」という気持ちは当たり前。<br>
                        でも、一歩踏み出すだけで、遊びも学びも人脈も、すべてが広がるチャンスが待っている。<br>
                        この一歩が、未来につながる大切なきっかけになるはず。<br>
                        人生を楽しむために、必要なスキルと知識を。</p>
                    <div class="button-wrap">
                        <div class="button_cover">
                            <a href="<?php echo home_url('/contact/'); ?>" class="button white">
                                <p>
                                    お問い合わせは
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="plan">
        <div class="wrapper">
            <div class="container wide">
                <h2>PLAN</h2>
                <div class="column-flex main">
                    <div class="inside-box expand orange">
                        <p class="button orange">プレミアム<span>Premium</span></p>
                        <p>期限なし</p>
                        <p>無制限</p>
                        <p>深く繋がれる距離が縮まりやすい</p>
                    </div>
                    <div class="inside-box brown">
                        <p>期限</p>
                        <p>参加可能数</p>
                        <p>出会いやすさ</p>
                    </div>
                    <div class="inside-box expand blue">
                        <p class="button blue ">スタンダード<span>Standard</span></p>
                        <p>1年間※更新可能</p>
                        <p>月3回</p>
                        <p>軽く交流する程度</p>
                    </div>

                </div>
                <div class="button-wrap">
                    <div class="button_cover">
                        <a href="<?php echo home_url('/contact/'); ?>" class="button">
                            <p>
                                お問い合わせはこちら
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blog">
        <div class="wrapper">
            <div class="container">

            </div>
        </div>
    </section>

    <?php // get_sidebar();
    ?>
    <?php get_footer(); ?>