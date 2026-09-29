<?php

declare(strict_types=1);

$pageTitle = 'صفری سازه | سازه‌های LSF و عایق‌های ساختمانی';
$pageDescription = 'صفری سازه؛ تأمین و اجرای سازه‌های سبک فولادی LSF، عایق XPS و محصولات نوین ساختمانی با مشاوره تخصصی و استعلام قیمت.';
$canonicalUrl = 'https://safarisaze.ir/';
require __DIR__ . '/includes/header.php';
$homeFlash = take_flash();
?>

<main id="top">
    <?php if ($homeFlash): ?>
        <div class="container page-flash page-flash-<?= h($homeFlash['type']) ?>" role="status"><?= h($homeFlash['message']) ?></div>
    <?php endif; ?>
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-grid" aria-hidden="true"></div>
        <div class="container hero-inner">
            <div class="hero-copy">
                <span class="eyebrow"><span class="eyebrow-dot"></span> راهکارهای نوین ساخت‌وساز</span>
                <h1 id="hero-title">ساختنِ بهتر،<br><span>با انتخاب هوشمندانه</span></h1>
                <p class="hero-lead">از سازه‌های سبک فولادی LSF تا عایق‌های حرارتی XPS؛ همراه مطمئن شما برای انتخاب، تأمین و اجرای مصالح ساختمانی مدرن.</p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#products">مشاهده محصولات <span aria-hidden="true">←</span></a>
                    <a class="button button-ghost" href="#contact">مشاوره و استعلام قیمت</a>
                </div>
                <div class="hero-proof"><div class="proof-avatars" aria-hidden="true"><i>ص</i><i>س</i><i>+</i></div><span>پاسخ‌گویی تخصصی از انتخاب تا اجرا</span></div>
            </div>
            <div class="hero-visual" aria-label="نمای مفهومی سازه مدرن">
                <div class="visual-glow"></div>
                <div class="visual-card visual-card-main">
                    <div class="blueprint-top"><span>SAFARI SAZEH</span><span>01 / LSF</span></div>
                    <div class="blueprint-art" aria-hidden="true"><div class="building"><i></i><i></i><i></i><b></b></div><span class="blueprint-line line-one"></span><span class="blueprint-line line-two"></span><span class="blueprint-label label-one">LIGHT STEEL FRAME</span><span class="blueprint-label label-two">PRECISION • SPEED • QUALITY</span></div>
                    <div class="blueprint-bottom"><span>سیستم ساخت سبک و سریع</span><span class="blueprint-mark">SS<span>.</span></span></div>
                </div>
                <div class="floating-note note-top"><span class="note-icon">↗</span><span><b>سبک‌تر، سریع‌تر</b><small>فناوری ساخت مدرن</small></span></div>
                <div class="floating-note note-bottom"><span class="note-icon note-warm">◈</span><span><b>عایق‌کاری هوشمند</b><small>XPS و راهکارهای حرارتی</small></span></div>
                <div class="visual-index">01 <span>/</span> 03</div>
            </div>
        </div>
        <div class="hero-scroll"><span></span> برای کشف بیشتر اسکرول کنید</div>
    </section>

    <section class="trust-strip" aria-label="مزایای صفری سازه"><div class="container trust-items"><div><span class="trust-icon">✳</span><span>مشاوره پیش از خرید</span></div><div><span class="trust-icon">⌁</span><span>محصولات منتخب ساختمانی</span></div><div><span class="trust-icon">◷</span><span>پاسخ‌گویی سریع</span></div><div><span class="trust-icon">⌂</span><span>همراه پروژه تا اجرا</span></div></div></section>

    <section class="section products-section" id="products">
        <div class="container">
            <div class="section-heading"><div><span class="section-kicker">انتخابی برای ساخت بهتر</span><h2>محصولات و راهکارها</h2></div><p>محصول مناسب، هزینه و زمان پروژه را بهینه می‌کند. برای بررسی جزئیات و انتخاب دقیق، با کارشناسان ما در ارتباط باشید.</p></div>
            <div class="product-grid">
                <article class="product-card product-featured"><div class="product-art art-lsf"><span class="art-label">SYSTEM / 01</span><div class="lsf-shape"><i></i><i></i><i></i><i></i><b></b></div><span class="art-caption">LIGHT GAUGE<br>STEEL FRAME</span></div><div class="product-info"><div class="product-meta"><span>سیستم سازه‌ای</span><span class="product-arrow">↗</span></div><h3>سازه سبک فولادی LSF</h3><p>راهکاری دقیق و سریع برای ساخت‌وساز سبک؛ مناسب پروژه‌های مسکونی، ویلایی و توسعه‌های مدرن.</p><a href="#contact" class="text-link">دریافت مشاوره <span>←</span></a></div></article>
                <article class="product-card"><div class="product-art art-xps"><span class="art-label">INSULATION / 02</span><div class="xps-stack"><i></i><i></i><i></i><i></i></div><span class="xps-badge">XPS</span><span class="art-caption">THERMAL<br>INSULATION</span></div><div class="product-info"><div class="product-meta"><span>عایق ساختمانی</span><span class="product-arrow">↗</span></div><h3>عایق فوم XPS</h3><p>عایق حرارتی سبک و بادوام برای کمک به افزایش بهره‌وری انرژی و آسایش فضای داخلی.</p><a href="#contact" class="text-link">استعلام قیمت <span>←</span></a></div></article>
                <article class="product-card"><div class="product-art art-more"><span class="art-label">BUILDING / 03</span><div class="more-orbit orbit-one"></div><div class="more-orbit orbit-two"></div><div class="more-core">+</div><span class="art-caption">SMART BUILDING<br>SOLUTIONS</span></div><div class="product-info"><div class="product-meta"><span>محصولات تکمیلی</span><span class="product-arrow">↗</span></div><h3>سایر محصولات ساختمانی</h3><p>برای تأمین نیازهای پروژه‌تان، درباره دیگر محصولات و راهکارهای قابل ارائه از ما بپرسید.</p><a href="#contact" class="text-link">گفت‌وگو با کارشناس <span>←</span></a></div></article>
            </div>
        </div>
    </section>

    <section class="about-section" id="about"><div class="container about-inner"><div class="about-visual"><div class="about-frame"><div class="about-lines"></div><div class="about-monogram">S<span>S</span></div><div class="about-caption">BUILD WITH CONFIDENCE</div><span class="about-corner corner-one"></span><span class="about-corner corner-two"></span></div><div class="about-stamp"><b>از ایده</b><span>تا اجرا</span></div></div><div class="about-copy"><span class="section-kicker">درباره صفری سازه</span><h2>برای ساختنِ آینده،<br>از انتخاب درست شروع کنید.</h2><p>صفری سازه با تمرکز بر محصولات نوین ساختمانی، تلاش می‌کند مسیر انتخاب و تأمین را برای سازندگان، مهندسان و خانواده‌ها ساده‌تر کند. ما کنار شما هستیم تا متناسب با نیاز پروژه، راهکار مناسب را پیدا کنید.</p><div class="about-points"><div><span>01</span><b>مشاوره متناسب با پروژه</b></div><div><span>02</span><b>شفافیت در انتخاب و استعلام</b></div><div><span>03</span><b>ارتباط تا مرحله اجرا</b></div></div><a href="#contact" class="button button-dark">درباره نیاز پروژه‌تان صحبت کنیم <span>←</span></a></div></div></section>

    <section class="process-section" id="process"><div class="container"><div class="section-heading"><div><span class="section-kicker">مسیر همکاری</span><h2>ساده، روشن، همراه شما</h2></div><p>از اولین پرسش تا انتخاب محصول، مراحل را شفاف و متناسب با شرایط پروژه پیش می‌بریم.</p></div><div class="process-grid"><article><span class="process-number">01</span><div class="process-icon">⌕</div><h3>نیازسنجی</h3><p>درباره کاربری، ابعاد و شرایط پروژه شما می‌شنویم.</p></article><article><span class="process-number">02</span><div class="process-icon">⌘</div><h3>پیشنهاد راهکار</h3><p>گزینه‌های مناسب و نکات فنی را با شما بررسی می‌کنیم.</p></article><article><span class="process-number">03</span><div class="process-icon">↗</div><h3>استعلام و هماهنگی</h3><p>برای دریافت قیمت و هماهنگی مراحل بعدی اقدام می‌کنیم.</p></article></div></div></section>

    <section class="contact-section" id="contact"><div class="container contact-inner"><div class="contact-copy"><span class="section-kicker">شروع یک گفت‌وگوی خوب</span><h2>برای پروژه‌تان<br>دنبال چه راهکاری هستید؟</h2><p>مشخصات کلی درخواست‌تان را بفرستید تا کارشناسان صفری سازه برای مشاوره و استعلام با شما تماس بگیرند.</p><div class="contact-direct"><span class="contact-direct-icon">☎</span><div><small>تماس مستقیم</small><a href="tel:+982100000000">۰۲۱-۰۰۰۰۰۰۰۰</a><em>شماره تماس را با شماره واقعی برند جایگزین کنید</em></div></div></div><form class="lead-form" action="<?= h(app_url('contact.php')) ?>" method="post">
            <?= csrf_field() ?><div class="form-top"><span>درخواست مشاوره</span><span class="form-required">* فیلدهای ضروری</span></div><div class="form-row"><label>نام و نام خانوادگی <i>*</i><input type="text" name="name" autocomplete="name" required maxlength="120" placeholder="نام شما"></label><label>شماره تماس <i>*</i><input type="tel" name="phone" autocomplete="tel" required maxlength="25" placeholder="09xx xxx xxxx" dir="ltr"></label></div><label>محصول یا موضوع موردنظر<select name="interest"><option value="">انتخاب کنید</option><option value="lsf">سازه سبک فولادی LSF</option><option value="xps">عایق فوم XPS</option><option value="other">سایر محصولات ساختمانی</option><option value="consultation">مشاوره عمومی پروژه</option></select></label><label>توضیحات کوتاه<textarea name="message" rows="3" maxlength="2000" placeholder="کمی درباره پروژه یا نیازتان بنویسید"></textarea></label><input class="form-honeypot" type="text" name="website" tabindex="-1" autocomplete="off" aria-hidden="true"><button class="button button-primary form-submit" type="submit">ارسال درخواست <span>←</span></button><small class="form-privacy">اطلاعات شما فقط برای پیگیری همین درخواست استفاده می‌شود.</small></form></div></section>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
