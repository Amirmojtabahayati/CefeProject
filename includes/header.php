<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// --- پیکربندی سایت ---
$site_on_local  = "localhost";
$site_on_domain = "";

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host     = $_SERVER['HTTP_HOST'];

// تعیین base_url
if ($host === $site_on_local) {
    $base_url = $protocol . $host . "/CafeProject/";
} else {
    $base_url = $protocol . $host . "/";
}

// ---- مهم: اسلش پایانی اجباری ----
$base_url = rtrim($base_url, '/') . '/';

// --- مسیرهای مطلق ---
define("SITE_URL", $base_url);                    // https://domain.com/
define("SITE_ASSETS", SITE_URL . "assets/");      // https://domain.com/assets/
define("SITE_IMAGES", SITE_URL . "images/");      // https://domain.com/images/
define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT']);
define('SITE_ROOT_LOCAL', $_SERVER['DOCUMENT_ROOT'] . "/CafeProject");

// --- تعیین نام فایل و مسیر فعلی ---
$request_uri = $_SERVER['REQUEST_URI'];
$current_path_info = parse_url($request_uri, PHP_URL_PATH);
$current_filename = basename($current_path_info);
$current_dir = basename(dirname($current_path_info));

$page_css = "";

$css_mapping = [    
    '.php' => '.css',

];

if (isset($css_mapping[$current_filename])) {
    $page_css = $css_mapping[$current_filename];
}

require_once SITE_ROOT_LOCAL . "/assets/helpers.php";
require_once SITE_ROOT_LOCAL . "/db/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>css/style.css">
    <?php if ($page_css): ?>
    <link rel="stylesheet" href="<?= SITE_ASSETS ?>css/<?= $page_css; ?>">
    <?php endif; ?>
</head>

<body>
    <!-- هدر -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <!-- بخش سمت راست: سبد خرید -->
                <div class="header-section right-section">
                    <a href="#" class="cart-icon" id="cartIcon">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count">۰</span>
                    </a>
                    <div class="cart-preview" id="cartPreview">
                        <div class="cart-preview-header">
                            <h4>سبد خرید شما</h4>
                            <button class="close-preview">&times;</button>
                        </div>
                        <div class="cart-items">
                            <!-- آیتم‌های سبد خرید اینجا نمایش داده می‌شوند -->
                            <div class="empty-cart">
                                <i class="fas fa-shopping-basket"></i>
                                <p>سبد خرید شما خالی است</p>
                            </div>
                        </div>
                        <div class="cart-preview-footer">
                            <a href="#" class="view-cart-btn">مشاهده سبد خرید</a>
                        </div>
                    </div>
                </div>

                <!-- بخش وسط: لوگو و اسم کافه -->
                <div class="header-section center-section">
                    <a href="#" class="logo">
                        <i class="fas fa-coffee logo-icon"></i>
                        <div class="logo-text">
                            <h1 class="cafe-name">کافی شاپ آرامش</h1>
                            <p class="cafe-slogan">لذت نوشیدن قهوه‌ای عالی</p>
                        </div>
                    </a>
                </div>

                <!-- بخش سمت چپ: منو ناوبری -->
                <div class="header-section left-section">
                    <nav class="main-nav">
                        <a href="#menu" class="nav-link">منو</a>
                        <a href="#" class="nav-link">ورود</a>
                        <a href="#contact" class="nav-link">تماس با ما</a>
                    </nav>
                    <button class="mobile-menu-btn" id="mobileMenuBtn">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="mobile-menu" id="mobileMenu">
                        <div class="mobile-menu-header">
                            <h4>منو</h4>
                            <button class="close-mobile-menu">&times;</button>
                        </div>
                        <div class="mobile-menu-links">
                            <a href="#menu" class="mobile-nav-link">منو</a>
                            <a href="#" class="mobile-nav-link">ورود / ثبت‌نام</a>
                            <a href="#contact" class="mobile-nav-link">تماس با ما</a>
                            <a href="#" class="mobile-nav-link cart-link">
                                <i class="fas fa-shopping-cart"></i>
                                سبد خرید
                                <span class="mobile-cart-count">۰</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- محتوای اصلی -->
    <main class="container">