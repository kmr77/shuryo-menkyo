<!DOCTYPE html>
<!-- <html <?php language_attributes(); ?>> -->
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>狩猟免許試験例題集（狩猟免許試験過去問集）</title>
  <meta name="description" content="狩猟免許試験の過去問を猟具別に掲載している過去問サイトです。狩猟免許とはどういう免許なのかを学ぶこともできます。">
  <meta name="keywords" content="狩猟免許,狩猟免許試験,過去問,例題集,テキスト,猟具,法令,一種銃猟,二種銃猟,網猟,あみ猟,罠猟,わな猟,空気銃">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
  <?php if ( is_home() || is_front_page() ) : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css" type="text/css" />
  <?php endif; ?>
  <?php if ( is_page() ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/question.css" type="text/css" />
  <?php if ( is_page('know,application,content,registration') ): ?>
  <?php endif; ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css">
  <?php endif; ?>
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3"></script>
</head>

<body>
  <a class="pagetop" href="#">
    <div class="arrow"></div>
  </a>
  <div class="container">
    <header>
      <div class="inner">
        <div class="header-nav">
          <ul>
            <li>
              <div class="logo">ここにロゴ</div>
            </li>
            <li>
              <button class="button" data-modal-open="modal-1">MENU</button>
            </li>
          </ul>
        </div>
      </div>
    </header>
      
    <div class="modal" id="modal-1">
      <div class="modal-overlay" data-modal-close>
        <div class="modal-container">
          <h2 class="modal-title">MENU</h2>
          <div class="modal-content">
            <div class="modal-nav">
              <ul>
                <li><a href="/">狩猟免許試験過去問題集</a></li>
                <li><a href="../know/">知っておくべきこと</a></li>
                <li><a href="../application/">狩猟免許受験申請</a></li>
                <li><a href="../content/">狩猟免許試験の内容と対策</a></li>
                <li><a href="../registration/">狩猟者登録</a></li>
                <li><a href="../all/">全問題</a></li>
                <li><a href="../laws/">法令問題</a></li>
                <li><a href="../type1/">一種猟銃問題</a></li>
                <li><a href="../type2/">二種猟銃問題</a></li>
                <li><a href="../ami/">網（あみ）猟問題</a></li>
                <li><a href="../wana/">罠（わな）猟問題</a></li>
                <li><a href="../animals/">鳥獣問題</a></li>
                <li><a href="../examination/">猟銃等講習会 考査問題</a></li>
                <li><a href="../numbers/">数字問題</a></li>
                <li><a href="../contact/">お問い合わせ</a></li>
              </ul>
            </div>
          </div>
            <div class="modal-footer">
              <button class="button" data-modal-close="modal-1">
                閉じる
              </button>
            </div>
          </div>
        </div>
    </div>
