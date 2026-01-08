<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت هدر و فوتر - کافی شاپ آرامش</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* استایل کلی */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f2eb;
            color: #3e2c1c;
            line-height: 1.6;
            padding: 20px;
        }

        .admin-container {
            max-width: 1400px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(74, 53, 32, 0.1);
            overflow: hidden;
        }

        /* هدر مدیریت */
        .admin-header {
            background: linear-gradient(135deg, #4a3520 0%, #2a1e13 100%);
            color: #f8f5f0;
            padding: 25px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px solid #d4a762;
        }

        .admin-header h1 {
            font-size: 1.8rem;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .admin-header h1 i {
            color: #d4a762;
        }

        .save-btn {
            background-color: #d4a762;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .save-btn:hover {
            background-color: #b38f4a;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(212, 167, 98, 0.3);
        }

        /* بخش اصلی */
        .admin-main {
            display: flex;
            min-height: 800px;
        }

        /* سایدبار */
        .admin-sidebar {
            width: 280px;
            background-color: #f8f5f0;
            border-left: 1px solid #e6d7c0;
            padding: 25px 0;
        }

        .sidebar-section {
            margin-bottom: 30px;
        }

        .sidebar-title {
            font-size: 1.1rem;
            color: #4a3520;
            padding: 15px 25px;
            margin-bottom: 15px;
            border-bottom: 1px solid #e6d7c0;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-title i {
            color: #d4a762;
        }

        .nav-item {
            padding: 12px 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #6b5c48;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
            border-right: 3px solid transparent;
        }

        .nav-item:hover {
            background-color: #e6d7c0;
            color: #4a3520;
        }

        .nav-item.active {
            background-color: rgba(212, 167, 98, 0.1);
            color: #4a3520;
            border-right-color: #d4a762;
        }

        /* محتوای مدیریت */
        .admin-content {
            flex: 1;
            padding: 30px;
            overflow-y: auto;
        }

        .content-section {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .content-section.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #d4a762;
        }

        .section-header h2 {
            font-size: 1.8rem;
            color: #4a3520;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section-header h2 i {
            color: #d4a762;
        }

        /* فرم‌ها */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4a3520;
            font-size: 1.05rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e6d7c0;
            border-radius: 8px;
            font-size: 1rem;
            color: #3e2c1c;
            background-color: #fff;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-control:focus {
            outline: none;
            border-color: #d4a762;
            box-shadow: 0 0 0 3px rgba(212, 167, 98, 0.2);
        }

        .form-control.textarea {
            min-height: 120px;
            resize: vertical;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        /* پیش‌نمایش */
        .preview-container {
            background-color: #f8f5f0;
            border-radius: 12px;
            padding: 30px;
            margin-top: 30px;
            border: 1px solid #e6d7c0;
            overflow: auto;
        }

        .preview-title {
            font-size: 1.3rem;
            color: #4a3520;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #e6d7c0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .preview-title i {
            color: #d4a762;
        }

        /* پیش‌نمایش هدر */
        .header-preview {
            position: relative;
            z-index: 10;
        }

        /* پیش‌نمایش فوتر */
        .footer-preview {
            margin-top: 50px;
        }

        /* رنگ‌ها */
        .color-picker {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .color-option {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            cursor: pointer;
            border: 3px solid transparent;
            transition: all 0.3s ease;
            position: relative;
        }

        .color-option:hover {
            transform: scale(1.05);
        }

        .color-option.active {
            border-color: #4a3520;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .color-option .color-name {
            position: absolute;
            bottom: -25px;
            right: 0;
            font-size: 0.8rem;
            color: #6b5c48;
            white-space: nowrap;
        }

        /* آیکون‌ها */
        .icon-picker {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 15px;
        }

        .icon-option {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f5f0;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.5rem;
            color: #6b5c48;
            border: 2px solid #e6d7c0;
            transition: all 0.3s ease;
        }

        .icon-option:hover {
            background-color: #e6d7c0;
            color: #4a3520;
        }

        .icon-option.active {
            background-color: #d4a762;
            color: #fff;
            border-color: #d4a762;
        }

        /* منوهای داینامیک */
        .dynamic-list {
            margin-top: 20px;
        }

        .list-item {
            background-color: #f8f5f0;
            border: 1px solid #e6d7c0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .list-item-content {
            flex: 1;
        }

        .list-item-actions {
            display: flex;
            gap: 10px;
        }

        .action-btn {
            background: none;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .edit-btn {
            color: #4a3520;
            background-color: rgba(212, 167, 98, 0.1);
        }

        .edit-btn:hover {
            background-color: #d4a762;
            color: #fff;
        }

        .remove-btn {
            color: #8b3a3a;
            background-color: rgba(139, 58, 58, 0.1);
        }

        .remove-btn:hover {
            background-color: #8b3a3a;
            color: #fff;
        }

        .add-btn {
            background-color: #d4a762;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .add-btn:hover {
            background-color: #b38f4a;
            transform: translateY(-2px);
        }

        /* وضعیت ذخیره */
        .save-status {
            position: fixed;
            bottom: 30px;
            left: 30px;
            background-color: #4a3520;
            color: #fff;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            align-items: center;
            gap: 10px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .save-status.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* رسپانسیو */
        @media (max-width: 1024px) {
            .admin-main {
                flex-direction: column;
            }
            
            .admin-sidebar {
                width: 100%;
                border-left: none;
                border-bottom: 1px solid #e6d7c0;
                padding: 15px 0;
            }
            
            .sidebar-section {
                margin-bottom: 15px;
            }
            
            .nav-item {
                padding: 10px 25px;
            }
            
            .form-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .admin-header {
                flex-direction: column;
                gap: 20px;
                padding: 20px;
                text-align: center;
            }
            
            .form-row {
                flex-direction: column;
                gap: 0;
            }
            
            .preview-container {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <!-- هدر مدیریت -->
        <header class="admin-header">
            <h1><i class="fas fa-cogs"></i> پنل مدیریت هدر و فوتر</h1>
            <button class="save-btn" id="saveAll">
                <i class="fas fa-save"></i> ذخیره همه تغییرات
            </button>
        </header>

        <div class="admin-main">
            <!-- سایدبار -->
            <aside class="admin-sidebar">
                <div class="sidebar-section">
                    <div class="sidebar-title"><i class="fas fa-heading"></i> تنظیمات هدر</div>
                    <a class="nav-item active" data-target="header-logo">
                        <i class="fas fa-coffee"></i> لوگو و نام کافه
                    </a>
                    <a class="nav-item" data-target="header-navigation">
                        <i class="fas fa-bars"></i> منوهای ناوبری
                    </a>
                    <a class="nav-item" data-target="header-cart">
                        <i class="fas fa-shopping-cart"></i> سبد خرید
                    </a>
                    <a class="nav-item" data-target="header-style">
                        <i class="fas fa-palette"></i> ظاهر و استایل
                    </a>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-title"><i class="fas fa-shoe-prints"></i> تنظیمات فوتر</div>
                    <a class="nav-item" data-target="footer-brand">
                        <i class="fas fa-mug-hot"></i> برند و اطلاعات
                    </a>
                    <a class="nav-item" data-target="footer-contact">
                        <i class="fas fa-address-card"></i> اطلاعات تماس
                    </a>
                    <a class="nav-item" data-target="footer-hours">
                        <i class="fas fa-clock"></i> ساعت کاری
                    </a>
                    <a class="nav-item" data-target="footer-style">
                        <i class="fas fa-paint-brush"></i> ظاهر فوتر
                    </a>
                </div>

                <div class="sidebar-section">
                    <div class="sidebar-title"><i class="fas fa-eye"></i> پیش‌نمایش</div>
                    <a class="nav-item" data-target="live-preview">
                        <i class="fas fa-desktop"></i> مشاهده پیش‌نمایش
                    </a>
                </div>
            </aside>

            <!-- محتوای اصلی -->
            <main class="admin-content">
                <!-- بخش لوگو و نام کافه -->
                <section id="header-logo" class="content-section active">
                    <div class="section-header">
                        <h2><i class="fas fa-coffee"></i> لوگو و نام کافه</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="cafeName">نام کافی شاپ</label>
                            <input type="text" id="cafeName" class="form-control" value="کافی شاپ آرامش">
                        </div>
                        
                        <div class="form-group">
                            <label for="cafeSlogan">شعار کافه</label>
                            <input type="text" id="cafeSlogan" class="form-control" value="لذت نوشیدن قهوه‌ای عالی">
                        </div>
                        
                        <div class="form-group">
                            <label for="logoType">نوع لوگو</label>
                            <select id="logoType" class="form-control">
                                <option value="icon">آیکون قهوه</option>
                                <option value="text">فقط متن</option>
                                <option value="image">تصویر لوگو</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="logoIcon">آیکون لوگو</label>
                            <div class="icon-picker">
                                <div class="icon-option active" data-icon="fa-coffee">
                                    <i class="fas fa-coffee"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-mug-hot">
                                    <i class="fas fa-mug-hot"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-mug-saucer">
                                    <i class="fas fa-mug-saucer"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-bean">
                                    <i class="fas fa-seedling"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>آپلود لوگو جدید (اگر نوع لوگو "تصویر" باشد)</label>
                            <input type="file" id="logoUpload" class="form-control" accept="image/*">
                            <small style="color: #6b5c48; display: block; margin-top: 5px;">فرمان‌های مجاز: JPG, PNG, SVG - حداکثر 2MB</small>
                        </div>
                    </div>
                </section>

                <!-- بخش منوهای ناوبری -->
                <section id="header-navigation" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-bars"></i> منوهای ناوبری</h2>
                    </div>
                    
                    <div class="form-group">
                        <label>منوهای اصلی (نمایش در دسکتاپ)</label>
                        <div class="dynamic-list" id="navItemsList">
                            <div class="list-item">
                                <div class="list-item-content">
                                    <strong>منو</strong> - لینک: #menu
                                </div>
                                <div class="list-item-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn remove-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-content">
                                    <strong>ورود / ثبت‌نام</strong> - لینک: #
                                </div>
                                <div class="list-item-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn remove-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="list-item-content">
                                    <strong>تماس با ما</strong> - لینک: contact.html
                                </div>
                                <div class="list-item-actions">
                                    <button class="action-btn edit-btn"><i class="fas fa-edit"></i></button>
                                    <button class="action-btn remove-btn"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                        
                        <button class="add-btn" id="addNavItem">
                            <i class="fas fa-plus"></i> افزودن آیتم منو جدید
                        </button>
                    </div>
                    
                    <div class="form-group">
                        <label for="mobileMenuEnabled">نمایش منو موبایل</label>
                        <select id="mobileMenuEnabled" class="form-control">
                            <option value="yes">فعال</option>
                            <option value="no">غیرفعال</option>
                        </select>
                    </div>
                </section>

                <!-- بخش سبد خرید -->
                <section id="header-cart" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-shopping-cart"></i> سبد خرید</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="cartEnabled">نمایش سبد خرید</label>
                            <select id="cartEnabled" class="form-control">
                                <option value="yes">فعال</option>
                                <option value="no">غیرفعال</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="cartPreviewEnabled">پیش‌نمایش سبد خرید</label>
                            <select id="cartPreviewEnabled" class="form-control">
                                <option value="yes">فعال</option>
                                <option value="no">غیرفعال</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="cartIcon">آیکون سبد خرید</label>
                            <div class="icon-picker">
                                <div class="icon-option active" data-icon="fa-shopping-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-shopping-basket">
                                    <i class="fas fa-shopping-basket"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-shopping-bag">
                                    <i class="fas fa-shopping-bag"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-bag-shopping">
                                    <i class="fas fa-bag-shopping"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- بخش ظاهر و استایل هدر -->
                <section id="header-style" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-palette"></i> ظاهر و استایل هدر</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label>رنگ زمینه هدر</label>
                            <div class="color-picker">
                                <div class="color-option active" data-color="#4a3520" style="background-color: #4a3520;">
                                    <span class="color-name">قهوه‌ای تیره</span>
                                </div>
                                <div class="color-option" data-color="#2a1e13" style="background-color: #2a1e13;">
                                    <span class="color-name">قهوه‌ای بسیار تیره</span>
                                </div>
                                <div class="color-option" data-color="#3e2c1c" style="background-color: #3e2c1c;">
                                    <span class="color-name">قهوه‌ای متوسط</span>
                                </div>
                                <div class="color-option" data-color="#6b5c48" style="background-color: #6b5c48;">
                                    <span class="color-name">قهوه‌ای روشن</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>رنگ متن هدر</label>
                            <div class="color-picker">
                                <div class="color-option active" data-color="#f8f5f0" style="background-color: #f8f5f0;">
                                    <span class="color-name">کرم</span>
                                </div>
                                <div class="color-option" data-color="#fff" style="background-color: #fff;">
                                    <span class="color-name">سفید</span>
                                </div>
                                <div class="color-option" data-color="#e6d7c0" style="background-color: #e6d7c0;">
                                    <span class="color-name">کرم طلایی</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>رنگ آیکون‌ها</label>
                            <div class="color-picker">
                                <div class="color-option active" data-color="#d4a762" style="background-color: #d4a762;">
                                    <span class="color-name">طلایی</span>
                                </div>
                                <div class="color-option" data-color="#f8c471" style="background-color: #f8c471;">
                                    <span class="color-name">طلایی روشن</span>
                                </div>
                                <div class="color-option" data-color="#e67e22" style="background-color: #e67e22;">
                                    <span class="color-name">نارنجی</span>
                                </div>
                                <div class="color-option" data-color="#f39c12" style="background-color: #f39c12;">
                                    <span class="color-name">نارنجی طلایی</span>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="headerSticky">هدر چسبان</label>
                            <select id="headerSticky" class="form-control">
                                <option value="yes">فعال</option>
                                <option value="no">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                </section>

                <!-- بخش برند و اطلاعات فوتر -->
                <section id="footer-brand" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-mug-hot"></i> برند و اطلاعات فوتر</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="footerCafeName">نام کافه در فوتر</label>
                            <input type="text" id="footerCafeName" class="form-control" value="کافی‌شاپ آرامش">
                        </div>
                        
                        <div class="form-group">
                            <label for="footerTagline">شعار فوتر</label>
                            <input type="text" id="footerTagline" class="form-control" value="لذت یک قهوه عالی در فضایی آرام">
                        </div>
                        
                        <div class="form-group">
                            <label for="footerIcon">آیکون فوتر</label>
                            <div class="icon-picker">
                                <div class="icon-option active" data-icon="fa-mug-hot">
                                    <i class="fas fa-mug-hot"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-coffee">
                                    <i class="fas fa-coffee"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-heart">
                                    <i class="fas fa-heart"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-star">
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="footerCopyright">متن کپی‌رایت</label>
                            <input type="text" id="footerCopyright" class="form-control" value="© ۱۴۰۳ - تمامی حقوق برای کافی‌شاپ آرامش محفوظ است">
                        </div>
                    </div>
                </section>

                <!-- بخش اطلاعات تماس فوتر -->
                <section id="footer-contact" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-address-card"></i> اطلاعات تماس فوتر</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="footerAddress">آدرس</label>
                            <textarea id="footerAddress" class="form-control textarea">تهران، خیابان ولیعصر، کوچه آرامش، پلاک ۱۲</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="footerPhone">تلفن</label>
                            <input type="text" id="footerPhone" class="form-control" value="۰۲۱-۱۲۳۴۵۶۷۸">
                        </div>
                        
                        <div class="form-group">
                            <label for="footerEmail">ایمیل (اختیاری)</label>
                            <input type="email" id="footerEmail" class="form-control" placeholder="info@cafe.com">
                        </div>
                        
                        <div class="form-group">
                            <label for="footerMapLink">لینک نقشه (اختیاری)</label>
                            <input type="url" id="footerMapLink" class="form-control" placeholder="https://maps.google.com/...">
                        </div>
                    </div>
                </section>

                <!-- بخش ساعت کاری -->
                <section id="footer-hours" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-clock"></i> ساعت کاری</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="weekdaysHours">ساعت کاری روزهای عادی</label>
                            <input type="text" id="weekdaysHours" class="form-control" value="شنبه تا پنجشنبه: ۸:۰۰ تا ۲۳:۰۰">
                        </div>
                        
                        <div class="form-group">
                            <label for="fridayHours">ساعت کاری جمعه</label>
                            <input type="text" id="fridayHours" class="form-control" value="جمعه‌ها: ۹:۰۰ تا ۲۴:۰۰">
                        </div>
                        
                        <div class="form-group">
                            <label for="holidayHours">ساعت کاری تعطیلات (اختیاری)</label>
                            <input type="text" id="holidayHours" class="form-control" placeholder="تعطیلات رسمی: ۱۰:۰۰ تا ۱۸:۰۰">
                        </div>
                        
                        <div class="form-group">
                            <label for="hoursIcon">آیکون ساعت کاری</label>
                            <div class="icon-picker">
                                <div class="icon-option active" data-icon="fa-clock">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-business-time">
                                    <i class="fas fa-business-time"></i>
                                </div>
                                <div class="icon-option" data-icon="fa-door-open">
                                    <i class="fas fa-door-open"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- بخش ظاهر فوتر -->
                <section id="footer-style" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-paint-brush"></i> ظاهر فوتر</h2>
                    </div>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label>رنگ زمینه فوتر</label>
                            <div class="color-picker">
                                <div class="color-option active" data-color="#3e2c1c" style="background-color: #3e2c1c;">
                                    <span class="color-name">قهوه‌ای متوسط</span>
                                </div>
                                <div class="color-option" data-color="#2a1e13" style="background-color: #2a1e13;">
                                    <span class="color-name">قهوه‌ای تیره</span>
                                </div>
                                <div class="color-option" data-color="#4a3520" style="background-color: #4a3520;">
                                    <span class="color-name">قهوه‌ای</span>
                                </div>
                                <div class="color-option" data-color="#1a120b" style="background-color: #1a120b;">
                                    <span class="color-name">سیاه قهوه‌ای</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>رنگ متن فوتر</label>
                            <div class="color-picker">
                                <div class="color-option active" data-color="#f8f5f0" style="background-color: #f8f5f0;">
                                    <span class="color-name">کرم</span>
                                </div>
                                <div class="color-option" data-color="#e6d7c0" style="background-color: #e6d7c0;">
                                    <span class="color-name">کرم طلایی</span>
                                </div>
                                <div class="color-option" data-color="#d1c4b5" style="background-color: #d1c4b5;">
                                    <span class="color-name">کرم روشن</span>
                                </div>
                            </div>
                        </div>
                        
                     
                        
                     
                    </div>
                </section>

                <!-- بخش پیش‌نمایش زنده -->
                <section id="live-preview" class="content-section">
                    <div class="section-header">
                        <h2><i class="fas fa-desktop"></i> پیش‌نمایش زنده تغییرات</h2>
                    </div>
                    
                    <div class="preview-container">
                        <div class="preview-title"><i class="fas fa-heading"></i> پیش‌نمایش هدر</div>
                        <div class="header-preview" id="headerPreview">
                            <!-- هدر در اینجا با JavaScript رندر می‌شود -->
                        </div>
                        
                        <div class="preview-title"><i class="fas fa-shoe-prints"></i> پیش‌نمایش فوتر</div>
                        <div class="footer-preview" id="footerPreview">
                            <!-- فوتر در اینجا با JavaScript رندر می‌شود -->
                        </div>
                    </div>
                    
                    <div style="margin-top: 30px; text-align: center;">
                        <button class="save-btn" id="refreshPreview">
                            <i class="fas fa-sync-alt"></i> بروزرسانی پیش‌نمایش
                        </button>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <!-- وضعیت ذخیره -->
    <div class="save-status" id="saveStatus">
        <i class="fas fa-check-circle"></i>
        <span>تغییرات با موفقیت ذخیره شد</span>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // مدیریت ناوبری سایدبار
            const navItems = document.querySelectorAll('.nav-item');
            const contentSections = document.querySelectorAll('.content-section');
            
            navItems.forEach(item => {
                item.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    
                    // حذف کلاس active از همه
                    navItems.forEach(nav => nav.classList.remove('active'));
                    contentSections.forEach(section => section.classList.remove('active'));
                    
                    // اضافه کردن کلاس active به آیتم انتخاب شده
                    this.classList.add('active');
                    
                    // نمایش بخش مربوطه
                    document.getElementById(targetId).classList.add('active');
                    
                    // اگر بخش پیش‌نمایش است، آن را بروزرسانی کن
                    if (targetId === 'live-preview') {
                        updatePreview();
                    }
                });
            });
            
            // مدیریت انتخاب آیکون‌ها
            const iconOptions = document.querySelectorAll('.icon-option');
            iconOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const parent = this.parentElement;
                    parent.querySelectorAll('.icon-option').forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // مدیریت انتخاب رنگ‌ها
            const colorOptions = document.querySelectorAll('.color-option');
            colorOptions.forEach(option => {
                option.addEventListener('click', function() {
                    const parent = this.parentElement;
                    parent.querySelectorAll('.color-option').forEach(opt => opt.classList.remove('active'));
                    this.classList.add('active');
                });
            });
            
            // مدیریت افزودن آیتم منو جدید
            const addNavItemBtn = document.getElementById('addNavItem');
            if (addNavItemBtn) {
                addNavItemBtn.addEventListener('click', function() {
                    const newItem = document.createElement('div');
                    newItem.className = 'list-item';
                    newItem.innerHTML = `
                        <div class="list-item-content">
                            <input type="text" placeholder="نام منو" class="form-control" style="margin-bottom: 5px;">
                            <input type="text" placeholder="لینک (مثال: #menu)" class="form-control">
                        </div>
                        <div class="list-item-actions">
                            <button class="action-btn edit-btn"><i class="fas fa-check"></i></button>
                            <button class="action-btn remove-btn"><i class="fas fa-trash"></i></button>
                        </div>
                    `;
                    
                    // رویداد ذخیره
                    const saveBtn = newItem.querySelector('.edit-btn');
                    saveBtn.addEventListener('click', function() {
                        const inputs = newItem.querySelectorAll('input');
                        const name = inputs[0].value || 'آیتم جدید';
                        const link = inputs[1].value || '#';
                        
                        newItem.querySelector('.list-item-content').innerHTML = `
                            <strong>${name}</strong> - لینک: ${link}
                        `;
                    });
                    
                    // رویداد حذف
                    const removeBtn = newItem.querySelector('.remove-btn');
                    removeBtn.addEventListener('click', function() {
                        newItem.remove();
                    });
                    
                    document.getElementById('navItemsList').appendChild(newItem);
                });
            }
            
            // مدیریت ذخیره همه تغییرات
            const saveAllBtn = document.getElementById('saveAll');
            const saveStatus = document.getElementById('saveStatus');
            
            saveAllBtn.addEventListener('click', function() {
                // جمع‌آوری داده‌ها از فرم‌ها
                const settings = {
                    header: {
                        cafeName: document.getElementById('cafeName').value,
                        cafeSlogan: document.getElementById('cafeSlogan').value,
                        logoType: document.getElementById('logoType').value,
                        logoIcon: document.querySelector('#header-logo .icon-option.active')?.getAttribute('data-icon') || 'fa-coffee',
                        headerColor: document.querySelector('#header-style .color-option.active')?.getAttribute('data-color') || '#4a3520',
                        textColor: document.querySelectorAll('#header-style .color-option')[1]?.querySelector('.active')?.getAttribute('data-color') || '#f8f5f0',
                        iconColor: document.querySelectorAll('#header-style .color-option')[2]?.querySelector('.active')?.getAttribute('data-color') || '#d4a762',
                        cartEnabled: document.getElementById('cartEnabled').value,
                        headerSticky: document.getElementById('headerSticky').value
                    },
                    footer: {
                        cafeName: document.getElementById('footerCafeName').value,
                        tagline: document.getElementById('footerTagline').value,
                        copyright: document.getElementById('footerCopyright').value,
                        address: document.getElementById('footerAddress').value,
                        phone: document.getElementById('footerPhone').value,
                        email: document.getElementById('footerEmail').value,
                        weekdaysHours: document.getElementById('weekdaysHours').value,
                        fridayHours: document.getElementById('fridayHours').value,
                        footerColor: document.querySelector('#footer-style .color-option.active')?.getAttribute('data-color') || '#3e2c1c',
                        footerTextColor: document.querySelectorAll('#footer-style .color-option')[1]?.querySelector('.active')?.getAttribute('data-color') || '#f8f5f0',
                        footerLayout: document.getElementById('footerLayout').value
                    }
                };
                
                // در اینجا می‌توانید داده‌ها را به سرور ارسال کنید
                console.log('تنظیمات ذخیره شده:', settings);
                
                // نمایش پیام موفقیت
                saveStatus.classList.add('show');
                setTimeout(() => {
                    saveStatus.classList.remove('show');
                }, 3000);
                
                // بروزرسانی پیش‌نمایش
                updatePreview();
            });
            
            // بروزرسانی پیش‌نمایش
            const refreshPreviewBtn = document.getElementById('refreshPreview');
            if (refreshPreviewBtn) {
                refreshPreviewBtn.addEventListener('click', updatePreview);
            }
            
            // تابع بروزرسانی پیش‌نمایش
            function updatePreview() {
                // جمع‌آوری داده‌های فعلی
                const headerData = {
                    cafeName: document.getElementById('cafeName').value,
                    cafeSlogan: document.getElementById('cafeSlogan').value,
                    logoIcon: document.querySelector('#header-logo .icon-option.active')?.getAttribute('data-icon') || 'fa-coffee',
                    headerColor: document.querySelector('#header-style .color-option.active')?.getAttribute('data-color') || '#4a3520',
                    textColor: document.querySelectorAll('#header-style .color-option')[1]?.querySelector('.active')?.getAttribute('data-color') || '#f8f5f0',
                    iconColor: document.querySelectorAll('#header-style .color-option')[2]?.querySelector('.active')?.getAttribute('data-color') || '#d4a762'
                };
                
                const footerData = {
                    cafeName: document.getElementById('footerCafeName').value,
                    tagline: document.getElementById('footerTagline').value,
                    copyright: document.getElementById('footerCopyright').value,
                    address: document.getElementById('footerAddress').value,
                    phone: document.getElementById('footerPhone').value,
                    weekdaysHours: document.getElementById('weekdaysHours').value,
                    fridayHours: document.getElementById('fridayHours').value,
                    footerColor: document.querySelector('#footer-style .color-option.active')?.getAttribute('data-color') || '#3e2c1c',
                    footerTextColor: document.querySelectorAll('#footer-style .color-option')[1]?.querySelector('.active')?.getAttribute('data-color') || '#f8f5f0',
                    footerIcon: document.querySelector('#footer-brand .icon-option.active')?.getAttribute('data-icon') || 'fa-mug-hot'
                };
                
                // رندر هدر
                const headerPreview = document.getElementById('headerPreview');
                headerPreview.innerHTML = `
                    <div style="
                        background-color: ${headerData.headerColor};
                        color: ${headerData.textColor};
                        padding: 1rem 0;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                        border-radius: 8px;
                        margin-bottom: 20px;
                    ">
                        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <!-- بخش سمت راست: سبد خرید -->
                                <div style="flex: 1; display: flex; justify-content: flex-start;">
                                    <a href="#" style="color: ${headerData.textColor}; font-size: 1.5rem; text-decoration: none; position: relative;">
                                        <i class="fas fa-shopping-cart" style="color: ${headerData.iconColor};"></i>
                                        <span style="position: absolute; top: -5px; right: -5px; background-color: ${headerData.iconColor}; color: #fff; font-size: 0.8rem; width: 20px; height: 20px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">۰</span>
                                    </a>
                                </div>
                                
                                <!-- بخش وسط: لوگو -->
                                <div style="flex: 1; display: flex; justify-content: center; text-align: center;">
                                    <a href="#" style="text-decoration: none; color: ${headerData.textColor};">
                                        <i class="fas ${headerData.logoIcon}" style="font-size: 2.5rem; color: ${headerData.iconColor}; margin-bottom: 5px; display: block;"></i>
                                        <div>
                                            <h1 style="margin: 0; font-size: 1.8rem; font-weight: 700; color: ${headerData.textColor};">${headerData.cafeName}</h1>
                                            <p style="margin: 5px 0 0; font-size: 0.9rem; color: ${headerData.iconColor}; opacity: 0.9;">${headerData.cafeSlogan}</p>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- بخش سمت چپ: منو -->
                                <div style="flex: 1; display: flex; justify-content: flex-end;">
                                    <nav style="display: flex; gap: 20px; align-items: center;">
                                        <a href="#menu" style="color: ${headerData.textColor}; text-decoration: none; font-weight: 600;">منو</a>
                                        <a href="#" style="color: ${headerData.textColor}; text-decoration: none; font-weight: 600;">ورود / ثبت‌نام</a>
                                        <a href="contact.html" style="color: ${headerData.textColor}; text-decoration: none; font-weight: 600;">تماس با ما</a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                // رندر فوتر
                const footerPreview = document.getElementById('footerPreview');
                footerPreview.innerHTML = `
                    <div style="
                        background: linear-gradient(135deg, ${footerData.footerColor} 0%, ${darkenColor(footerData.footerColor, 20)} 100%);
                        color: ${footerData.footerTextColor};
                        padding: 50px 0 30px;
                        border-top: 4px solid ${headerData.iconColor};
                        border-radius: 8px;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    ">
                        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; text-align: center;">
                            <!-- برند -->
                            <div style="margin-bottom: 40px; padding-bottom: 30px; border-bottom: 1px solid rgba(212, 167, 98, 0.3);">
                                <i class="fas ${footerData.footerIcon}" style="font-size: 3rem; color: ${headerData.iconColor}; margin-bottom: 15px; display: block;"></i>
                                <h2 style="font-size: 2.2rem; font-weight: 700; color: #fff; margin: 0 0 10px 0;">${footerData.cafeName}</h2>
                                <p style="color: ${headerData.iconColor}; font-size: 1.1rem; margin: 0; opacity: 0.9;">${footerData.tagline}</p>
                            </div>
                            
                            <!-- اطلاعات -->
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-bottom: 40px; text-align: right;">
                                <!-- آدرس -->
                                <div style="background: rgba(255, 255, 255, 0.05); border-radius: 12px; padding: 25px; border: 1px solid rgba(212, 167, 98, 0.1);">
                                    <div style="width: 50px; height: 50px; background: rgba(212, 167, 98, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; margin-right: auto; margin-left: 0;">
                                        <i class="fas fa-map-marker-alt" style="font-size: 1.5rem; color: ${headerData.iconColor};"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.3rem; color: ${headerData.iconColor}; margin: 0 0 12px 0; text-align: right;">آدرس</h4>
                                        <p style="color: #d1c4b5; font-size: 1.05rem; line-height: 1.6; margin: 8px 0; text-align: right;">${footerData.address}</p>
                                    </div>
                                </div>
                                
                                <!-- تلفن -->
                                <div style="background: rgba(255, 255, 255, 0.05); border-radius: 12px; padding: 25px; border: 1px solid rgba(212, 167, 98, 0.1);">
                                    <div style="width: 50px; height: 50px; background: rgba(212, 167, 98, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; margin-right: auto; margin-left: 0;">
                                        <i class="fas fa-phone" style="font-size: 1.5rem; color: ${headerData.iconColor};"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.3rem; color: ${headerData.iconColor}; margin: 0 0 12px 0; text-align: right;">تلفن</h4>
                                        <p style="color: #d1c4b5; font-size: 1.05rem; line-height: 1.6; margin: 8px 0; text-align: right;">${footerData.phone}</p>
                                    </div>
                                </div>
                                
                                <!-- ساعت کاری -->
                                <div style="background: rgba(255, 255, 255, 0.05); border-radius: 12px; padding: 25px; border: 1px solid rgba(212, 167, 98, 0.1);">
                                    <div style="width: 50px; height: 50px; background: rgba(212, 167, 98, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; margin-right: auto; margin-left: 0;">
                                        <i class="fas fa-clock" style="font-size: 1.5rem; color: ${headerData.iconColor};"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 1.3rem; color: ${headerData.iconColor}; margin: 0 0 12px 0; text-align: right;">ساعت بازگشایی</h4>
                                        <p style="color: #d1c4b5; font-size: 1.05rem; line-height: 1.6; margin: 8px 0; text-align: right; position: relative; padding-right: 25px;">${footerData.weekdaysHours}</p>
                                        <p style="color: #d1c4b5; font-size: 1.05rem; line-height: 1.6; margin: 8px 0; text-align: right; position: relative; padding-right: 25px;">${footerData.fridayHours}</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- کپی‌رایت -->
                            <div style="padding-top: 25px; border-top: 1px solid rgba(212, 167, 98, 0.3);">
                                <p style="color: #a89987; font-size: 0.95rem; margin: 0; font-weight: 300;">${footerData.copyright}</p>
                            </div>
                        </div>
                    </div>
                `;
            }
            
            // تابع کمکی برای تیره کردن رنگ
            function darkenColor(color, percent) {
                const num = parseInt(color.replace("#", ""), 16);
                const amt = Math.round(2.55 * percent);
                const R = (num >> 16) - amt;
                const G = (num >> 8 & 0x00FF) - amt;
                const B = (num & 0x0000FF) - amt;
                return "#" + (0x1000000 + (R < 255 ? R < 1 ? 0 : R : 255) * 0x10000 + 
                    (G < 255 ? G < 1 ? 0 : G : 255) * 0x100 + 
                    (B < 255 ? B < 1 ? 0 : B : 255)).toString(16).slice(1);
            }
            
            // بارگذاری اولیه پیش‌نمایش
            updatePreview();
        });
    </script>
</body>
</html>