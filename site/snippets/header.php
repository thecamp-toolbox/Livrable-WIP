<!doctype html>
<html lang="en" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <title><?php echo $site->title() ?></title>
    <meta name="description" content="<?php echo $site->description() ?>">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="<?= $site->url() ?>/assets/images/favicons/favicon.png?20170829"/>
    <link rel="apple-touch-icon" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon.png?20170829" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-57x57.png?20170829" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-72x72.png?20170829" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-76x76.png?20170829" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-114x114.png?20170829" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-120x120.png?20170829" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-144x144.png?20170829" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-152x152.png?20170829" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url() ?>/assets/images/favicons/apple-touch-icon-180x180.png?20170829" />
        
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i%7CMaitree:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- CSS Base -->
    <?= css('assets/css/base.css') ?>

    <!-- CSS Colors -->
    <?= css('assets/css/colors.css') ?>

    <!-- Optional - CSS SVG Icons (Font Awesome) -->
    <?= css('assets/css/svg-icons.css') ?>

    <!-- Our very own CSS file -->
    <?= css('assets/css/thecamp.css') ?>

    <!-- Insert social-cards snippet here when ready -->

    <!-- Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">

  </head>
  <body>

  	<?php snippet('nav') ?>

  	<main role="main">
  		


