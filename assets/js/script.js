class StickyNav {
    constructor() {
        this.navItems = document.querySelectorAll('.nav-item');
        this.sections = document.querySelectorAll('.menu-section');
        this.navContainer = document.querySelector('.nav-container');
        this.isScrolling = false;
        this.lastScrollTime = 0;

        this.init();
    }

    init() {
        // رویداد کلیک برای آیتم‌های ناوبری
        this.navItems.forEach(item => {
            item.addEventListener('click', (e) => {
                this.handleNavClick(e);
            });
        });

        // رویداد اسکرول برای تغییر فعال
        window.addEventListener('scroll', () => {
            this.handleScroll();
        });

        // رویداد resize برای به‌روزرسانی موقعیت
        window.addEventListener('resize', () => {
            this.handleScroll();
        });

        // فراخوانی اولیه
        this.handleScroll();
    }

    handleNavClick(e) {
        e.preventDefault();
        const targetId = e.currentTarget.getAttribute('data-target');
        const targetSection = document.getElementById(targetId);

        if (targetSection) {
            // غیرفعال کردن همه آیتم‌ها
            this.navItems.forEach(item => item.classList.remove('active'));

            // فعال کردن آیتم کلیک شده
            e.currentTarget.classList.add('active');

            // اسکرول به بخش مورد نظر
            window.scrollTo({
                top: targetSection.offsetTop - 100,
                behavior: 'smooth'
            });

            // اسکرول نوار ناوبری به آیتم فعال
            this.scrollNavToActive(e.currentTarget);
        }
    }

    handleScroll() {
        const now = Date.now();

        // جلوگیری از فراخوانی مکرر
        if (now - this.lastScrollTime < 100) return;

        this.lastScrollTime = now;

        // پیدا کردن بخش فعال
        let activeSection = null;
        let maxVisibility = 0;

        this.sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // محاسبه میزان دید بخش در viewport
            const visibleHeight = Math.min(rect.bottom, windowHeight) - Math.max(rect.top, 0);
            const visibility = visibleHeight / Math.min(rect.height, windowHeight);

            if (visibility > maxVisibility && visibility > 0.1) {
                maxVisibility = visibility;
                activeSection = section;
            }
        });

        // به‌روزرسانی آیتم فعال در نوار ناوبری
        if (activeSection) {
            const activeId = activeSection.id;
            this.navItems.forEach(item => {
                if (item.getAttribute('data-target') === activeId) {
                    item.classList.add('active');

                    // اسکرول نوار ناوبری به آیتم فعال
                    if (!this.isScrolling) {
                        this.scrollNavToActive(item);
                    }
                } else {
                    item.classList.remove('active');
                }
            });
        }
    }

    scrollNavToActive(activeItem) {
        if (!this.navContainer) return;

        const containerRect = this.navContainer.getBoundingClientRect();
        const itemRect = activeItem.getBoundingClientRect();
        const containerWidth = this.navContainer.clientWidth;

        // محاسبه موقعیت آیتم نسبت به کانتینر
        const itemLeft = itemRect.left - containerRect.left;
        const itemRight = itemRect.right - containerRect.left;
        const itemWidth = itemRect.width;

        // اگر آیتم در سمت چپ خارج از دید باشد
        if (itemLeft < 0) {
            this.navContainer.scrollLeft += itemLeft - 20;
        }
        // اگر آیتم در سمت راست خارج از دید باشد
        else if (itemRight > containerWidth) {
            this.navContainer.scrollLeft += (itemRight - containerWidth) + 20;
        }
    }
}

// مقداردهی اولیه
document.addEventListener('DOMContentLoaded', () => {
    new StickyNav();
}); 
// مدیریت سبد خرید و منو موبایل
document.addEventListener('DOMContentLoaded', function() {
    // عناصر مورد نیاز
    const cartIcon = document.getElementById('cartIcon');
    const cartPreview = document.getElementById('cartPreview');
    const closePreview = document.querySelector('.close-preview');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const closeMobileMenu = document.querySelector('.close-mobile-menu');
    // نمایش/مخفی کردن پیش‌نمایش سبد خرید
    if (cartIcon && cartPreview) {
        cartIcon.addEventListener('click', function(e) {
            e.preventDefault();
            cartPreview.classList.toggle('active');
        });
        // بستن پیش‌نمایش با کلیک روی دکمه بستن
        if (closePreview) {
            closePreview.addEventListener('click', function() {
                cartPreview.classList.remove('active');
            });
        }
        // بستن پیش‌نمایش با کلیک بیرون
        document.addEventListener('click', function(e) {
            if (!cartIcon.contains(e.target) && !cartPreview.contains(e.target)) {
                cartPreview.classList.remove('active');
            }
        });
    }
    // مدیریت منو موبایل
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.add('active');
            // ایجاد overlay
            createOverlay();
        });
        if (closeMobileMenu) {
            closeMobileMenu.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                removeOverlay();
            });
        }
        // بستن منو با کلیک روی لینک‌ها
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                removeOverlay();
            });
        });
    }
    // تابع ایجاد overlay برای منو موبایل
    function createOverlay() {
        if (!document.querySelector('.mobile-menu-overlay')) {
            const overlay = document.createElement('div');
            overlay.className = 'mobile-menu-overlay active';
            overlay.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                removeOverlay();
            });
            document.body.appendChild(overlay);
        }
    }
    // تابع حذف overlay
    function removeOverlay() {
        const overlay = document.querySelector('.mobile-menu-overlay');
        if (overlay) {
            overlay.classList.remove('active');
            setTimeout(() => {
                if (overlay.parentNode) {
                    overlay.parentNode.removeChild(overlay);
                }
            }, 300);
        }
    }
    // شبیه‌سازی افزودن محصول به سبد خرید
    const addToCartButtons = document.querySelectorAll('.add-to-cart-btn');
    const cartCountElements = document.querySelectorAll('.cart-count, .mobile-cart-count');
    let cartItemCount = 0;
    if (addToCartButtons.length > 0) {
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                cartItemCount++;
                updateCartCount();
                showAddToCartNotification(this);
            });
        });
    }
    // تابع به‌روزرسانی تعداد سبد خرید
    function updateCartCount() {
        cartCountElements.forEach(element => {
            element.textContent = cartItemCount;
            if (cartItemCount > 0) {
                element.style.display = 'flex';
            } else {
                element.style.display = 'flex';
            }
        });
    }
    // تابع نمایش اعلان افزودن به سبد خرید
    function showAddToCartNotification(button) {
        const productName = button.getAttribute('data-product') || 'محصول';
        const notification = document.createElement('div');
        notification.className = 'cart-notification';
        notification.innerHTML = `
        <i class="fas fa-check-circle"></i>
        <span>${productName} به سبد خرید اضافه شد</span>
    `;
        notification.style.cssText = `
        position: fixed;
        top: 20px;
        left: 50%;
        transform: translateX(-50%) translateY(-20px);
        background-color: #4a3520;
        color: #fff;
        padding: 15px 25px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        display: flex;
        align-items: center;
        gap: 10px;
        z-index: 10000;
        opacity: 0;
        transition: all 0.3s ease;
    `;
        document.body.appendChild(notification);
        // نمایش انیمیشن
        setTimeout(() => {
            notification.style.opacity = '1';
            notification.style.transform = 'translateX(-50%) translateY(0)';
        }, 10);
        // حذف اعلان بعد از 3 ثانیه
        setTimeout(() => {
            notification.style.opacity = '0';
            notification.style.transform = 'translateX(-50%) translateY(-20px)';
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }
    // بارگذاری اولیه
    updateCartCount();
});
// اسکریپت ساده برای فوتر
document.addEventListener('DOMContentLoaded', function() {
    // مدیریت دکمه بازگشت به بالا
    const backToTop = document.querySelector('.back-to-top');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTop.classList.add('show');
        } else {
            backToTop.classList.remove('show');
        }
    });
    // انیمیشن hover برای لینک‌ها
    const links = document.querySelectorAll('.quick-links a');
    links.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.color = '#d4a762';
        });
        link.addEventListener('mouseleave', function() {
            this.style.color = '#d1c4b5';
        });
    });
    // نمایش tooltip برای آیکون‌های پرداخت
    const paymentIcons = document.querySelectorAll('.payment-methods i');
    paymentIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            const title = this.getAttribute('title');
            if (title) {
                // می‌توانید tooltip اضافه کنید
                console.log(title);
            }
        });
    });
});