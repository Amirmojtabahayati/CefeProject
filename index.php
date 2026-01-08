<?php
include_once "includes/header.php";
?>
    <!-- فیلتر چسبان -->
    <nav class="sticky-nav">
        <div class="container">
            <div class="nav-container">
                <div class="category-nav">
                    <button class="nav-item active" data-target="coffee">قهوه‌ها</button>
                    <button class="nav-item" data-target="tea">چای‌ها</button>
                    <button class="nav-item" data-target="cold">نوشیدنی سرد</button>
                    <button class="nav-item" data-target="dessert">دسر و شیرینی</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- بخش قهوه‌ها -->
    <section id="coffee" class="menu-section">
        <h2 class="section-title">قهوه‌ها</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="اسپرسو" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">اسپرسو</h3>
                        <span class="item-price">۴۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">قهوه اسپرسوی خالص و غلیظ با رگه‌های طلایی</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="آمریکانو" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">آمریکانو</h3>
                        <span class="item-price">۵۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">اسپرسو رقیق شده با آب داغ</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="لته" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">لته</h3>
                        <span class="item-price">۶۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">ترکیب اسپرسو و شیر بخار داده شده</p>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش چای‌ها -->
    <section id="tea" class="menu-section">
        <h2 class="section-title">چای‌ها</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="چای سیاه" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">چای سیاه</h3>
                        <span class="item-price">۳۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">چای سیاه ایرانی با عطر بی‌نظیر</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="چای سبز" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">چای سبز</h3>
                        <span class="item-price">۴۰,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">چای سبز تازه با خواص آنتی‌اکسیدان</p>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش نوشیدنی سرد -->
    <section id="cold" class="menu-section">
        <h2 class="section-title">نوشیدنی سرد</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="آیس لته" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">آیس لته</h3>
                        <span class="item-price">۷۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">لته سرد شده با یخ برای روزهای گرم</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="فراپه" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">فراپه</h3>
                        <span class="item-price">۸۰,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">نوشیدنی خنک ترکیبی از قهوه و یخ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- بخش دسر و شیرینی -->
    <section id="dessert" class="menu-section">
        <h2 class="section-title">دسر و شیرینی</h2>
        <div class="menu-items">
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="چیزکیک" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">چیزکیک</h3>
                        <span class="item-price">۹۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">چیزکیک کلاسیک با توت فرنگی تازه</p>
                </div>
            </div>
            <div class="menu-item">
                <img src="images/photo19968946410.jpg" alt="کرواسان" class="item-image">
                <div class="item-content">
                    <div class="item-header">
                        <h3 class="item-name">کرواسان</h3>
                        <span class="item-price">۵۵,۰۰۰ تومان</span>
                    </div>
                    <p class="item-description">کرواسان تازه و لایه‌ای با کره طبیعی</p>
                </div>
            </div>
        </div>
    </section>
<?php
include_once "includes/footer.php";
?>