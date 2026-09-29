<?php
/** @var string $pageTitle */
require_once __DIR__ . '/bootstrap.php';
$pageTitle = $pageTitle ?? 'صفری سازه | راهکارهای نوین ساختمانی';
$pageDescription = $pageDescription ?? 'تأمین محصولات نوین ساختمانی، سازه سبک فولادی LSF و عایق XPS همراه با مشاوره تخصصی صفری سازه.';
$canonicalUrl = $canonicalUrl ?? app_url();
?><!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#101d1b">
    <meta name="description" content="<?= h($pageDescription) ?>">
    <link rel="canonical" href="<?= h($canonicalUrl) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:site_name" content="صفری سازه">
    <meta property="og:title" content="<?= h($pageTitle) ?>">
    <meta property="og:description" content="<?= h($pageDescription) ?>">
    <meta property="og:url" content="<?= h($canonicalUrl) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <title><?= h($pageTitle) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= h(app_url('assets/css/site.css')) ?>">
    <script type="application/ld+json">{
      "@context":"https://schema.org",
      "@type":"Organization",
      "name":"صفری سازه",
      "url":"https://safarisaze.ir/",
      "description":"تأمین و مشاوره محصولات نوین ساختمانی، سازه سبک فولادی LSF و عایق XPS"
    }</script>
    <script src="<?= h(app_url('assets/js/site.js')) ?>" defer></script>
</head>
<body>
<header class="site-header" data-header>
    <div class="container header-inner">
        <a class="brand" href="<?= h(app_url()) ?>" aria-label="صفری سازه، صفحه اصلی">
            <span class="brand-symbol">ص<span>.</span></span>
            <span class="brand-name">صفری سازه<small>راهکارهای نوین ساخت‌وساز</small></span>
        </a>
        <button class="mobile-menu-button" type="button" aria-label="باز کردن منو" aria-expanded="false" data-menu-toggle><span></span><span></span></button>
        <nav class="main-nav" aria-label="منوی اصلی" data-nav>
            <a href="<?= h(app_url()) ?>#products">محصولات</a>
            <a href="<?= h(app_url()) ?>#about">درباره ما</a>
            <a href="<?= h(app_url()) ?>#process">مسیر همکاری</a>
            <a class="nav-contact" href="<?= h(app_url()) ?>#contact">درخواست مشاوره <span>↗</span></a>
        </nav>
    </div>
</header>
