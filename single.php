        <?php get_headers(); ?>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-lg-8">
                    <main class="main">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="content-Header">
                                <h1 class="content-Title">
                                    <?php the_title(); ?>
                                </h1>
                                <div class="content-Meta">
                                    <?php the_category(' , '); ?>
                                    <?php $neko_post_year = get_the_date('Y'); ?>
                                    <?php $neko_post_month = get_the_date('m'); ?>
                                    <a href="<?php echo get_month_link($neko_post_year, $neko_post_month); ?>"
                                        class="content-Meta_Date">
                                        <time
                                            datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date(); ?></time>
                                    </a>
                                </div>



                                



                                < </header>
                                    <div class="content-Body">
                                        <?php if (has_post_thumbnail()) : ?>
                                        <div class=" content-EyeCatch">
                                            <?php the_post_thumbnail('single_eyeCatch'); ?>
                                        </div>
                                        <?php endif; ?>
                                        <?php the_content(); ?>
                                        <p>
                                            湿気で髪型も決まらないし、お出かけが億劫になる雨の日。みなさまに少しでも楽しく過ごしていただきたいという思いから、Kuroneko
                                            Hairでは雨の日キャンペーンを開催することにいたしました。</p>
                                        <p>当日のご予約でもOKです、ぜひこの機会にご利用ください。</p>
                                        <h2>キャンペーン内容</h2>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>対象日</td>
                                                    <td>キャンペーン期間中、ご来店時に雨が降っていたお客様</td>
                                                </tr>
                                                <tr>
                                                    <td>期間</td>
                                                    <td>2021年3月14日〜3月31日</td>
                                                </tr>
                                                <tr>
                                                    <td>内容</td>
                                                    <td>施術料金のお会計総額から、15％OFF<br>※物販は割引適用外となります。その他の割引・クーポンとの併用は致しかねます。
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="wp-block-buttons">
                                            <div class="wp-block-button">
                                                <a class="wp-block-button__link" href="#">来店ご予約はこちら</a>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="content-Footer">
                                        <?php the_tags('<ul class="content-Tags"><li>', '</li><li>', '</li></ul>'); ?>
                                        <nav class="content-Nav" aria-label="前後の記事">
                                            <div class="content-Nav_Prev">
                                                <?php previous_post_link('&lt; %link'); ?>
                                            </div>
                                            <div class="content-Nav_Next">
                                                <?php next_post_link('%link &gt;'); ?>
                                            </div>
                                        </nav>
                                    </footer>
                        </article>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </main>
                </div>
                <?php get_sidebar(); ?>
                <div class="col-lg-4">
                    <?php if (is_active_sidebar('sidebar-widget-area')) : ?>
                    <aside class="sidebar">
                        <?php dynamic_sidebar('sidebar-widget-area'); ?>
                        <div class="widget_block">
                            <h2>カテゴリー</h2>
                            <ul class="wp-block-categories-list wp-block-categories">
                                <li><a href="#">お知らせ</a></li>
                                <li><a href="#">アイテム</a></li>
                                <li><a href="#">キャンペーン</a></li>
                                <li><a href="#">ブログ</a></li>
                            </ul>
                        </div>
                        <div class="widget_block">
                            <h2>アーカイブ</h2>
                            <ul class="wp-block-archives-list wp-block-archives">
                                <li><a href="#">2021年3月</a></li>
                                <li><a href="#">2020年11月</a></li>
                                <li><a href="#">2020年10月</a></li>
                                <li><a href="#">2020年9月</a></li>
                            </ul>
                        </div>
                    </aside>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>