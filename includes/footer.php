<?php
require_once __DIR__ . '/bootstrap.php';
?>
<footer class="site-footer">
    <div class="container footer-main">
        <div class="footer-brand-column">
            <a class="brand footer-brand" href="<?= h(app_url()) ?>" aria-label="صفری سازه - صفحه اصلی">
                <span class="brand-symbol">ص<span>.</span></span>
                <span class="brand-name">صفری سازه<small>راهکارهای نوین ساخت‌وساز</small></span>
            </a>
            <p>همراه شما در انتخاب و تأمین راهکارهای نوین ساختمانی؛ از سازه سبک فولادی تا عایق‌های حرارتی.</p>
            <a class="footer-cta" href="<?= h(app_url()) ?>#contact">برای پروژه‌تان مشاوره بگیرید <span>←</span></a>
        </div>
        <div class="footer-links-column">
            <h2>دسترسی سریع</h2>
            <a href="<?= h(app_url()) ?>#products">محصولات</a>
            <a href="<?= h(app_url()) ?>#about">درباره صفری سازه</a>
            <a href="<?= h(app_url()) ?>#process">مراحل همکاری</a>
            <a href="<?= h(app_url()) ?>#contact">تماس و استعلام</a>
        </div>
        <div class="footer-links-column footer-contact-column">
            <h2>ارتباط با ما</h2>
            <p>برای دریافت مشاوره، استعلام قیمت یا همکاری، درخواست خود را از طریق فرم سایت ارسال کنید.</p>
            <a href="<?= h(app_url()) ?>#contact">ثبت درخواست مشاوره <span>↗</span></a>
            <span class="footer-location">ایران · پاسخ‌گویی در ساعات کاری</span>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>© <?= fa_num(date('Y')) ?> صفری سازه. تمامی حقوق محفوظ است.</span>
        <span>ساخته‌شده برای ساختنِ بهتر <b>✳</b></span>
    </div>
</footer>
<a class="back-to-top" href="#top" aria-label="بازگشت به بالای صفحه" data-back-top>↑</a>
</body>
</html>
