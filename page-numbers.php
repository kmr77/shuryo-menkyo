<?php 
/*
Template Name: 数字問題
*/
get_header(); ?>
<div class="inner">
        <!-- パンくずパーツ -->
        <?php get_template_part('parts-breadcrumb'); ?>
      </div>
    </div>
    <div class="main-visual numbers">
      <div class="inner">
        <h1><?php the_title(); ?>｜狩猟免許試験過去問集</h1>
        <p>狩猟免許試験の数字問題を徹底解析し、重要な数値や規定を整理。
          捕獲数や猟期制限など、試験に出やすい数値問題を効率よく学べます。
          スマートフォン対応でスキマ時間を活用した復習が可能。
          合格に向けた強力なサポートを提供します。</p>
      </div>
    </div>
    <div class="inner">
    <?php get_template_part('parts-breadcrumb'); ?>
    <h2>狩猟免許試験の<?php the_title(); ?> 過去問</h2>
        <p>狩猟免許試験の数字問題は、捕獲制限数や許可数、猟期の制限など、数値に関する正確な知識を問われる問題が出題されます。
          特に、法律で定められた捕獲数や銃の口径など、数値に関する細かい規定を理解し、暗記することが求められます。
          数字問題は意外と難易度が高く、正確に覚えることが合格のポイントになります。
          このページでは、数字問題に特化した出題内容を解説し、効率的な学習方法を提案しています。</p>
        <?php get_template_part('parts-infotext'); ?>
        <!-- 問題ここから -->
        <div class="accordion-inner">
          <dl id="accordion">
          <?php
            // カウンター変数を定義（1からスタート）
            $counter = 1;

            // ランダム表示のON/OFFをURLパラメータで制御
            $random = isset($_GET['random']) ? $_GET['random'] : 0;

            // 通常時は「投稿ID順（昇順）」で固定、ランダム時のみシャッフル
            $orderby = ($random == 1) ? 'rand' : 'ID';
            $order = ($random == 1) ? '' : 'ASC'; // 通常時は昇順
            
            // 投稿のループを開始
            $args = array(
                'category_name' => 'numbers', // カテゴリスラッグ「numbers」の記事のみ取得
                'posts_per_page' => -1,   // すべての投稿を表示（ページネーションなし）
                'orderby' => $orderby,    // ランダム or ID順
                'order' => $order

            );
            $the_query = new WP_Query($args);
            ?>

            <!-- ランダム表示切り替えボタン -->
            <?php get_template_part('parts-random-btn'); ?>

            <?php
            if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                    ?>
                    <dt>
                        <span class="question">問<?php echo $counter; ?>：<?php the_title(); ?></span>
                        <!-- <button class="openclose-btn">選択肢を開閉</button> -->
                    </dt>
                    <dd>
                        <span class="answer">答）<?php the_field('answer'); ?><br>
                        <?php the_field('answer_body'); ?></span>
                    </dd>
                    <?php
                    // カウンターを1増やす
                    $counter++;
                endwhile;
                else :
                    echo '<p>投稿が見つかりませんでした。</p>';
                endif;

            // 投稿ループをリセット
            wp_reset_postdata();
            ?>
            </dl>
      </div>

<?php get_footer(); ?>
