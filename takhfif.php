<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت تخفیف‌ها - کافی‌شاپ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* استایل‌های پایه */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f5f0;
            color: #3e2c1c;
            line-height: 1.6;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* هدر پنل مدیریت */
        .admin-header {
            background: linear-gradient(135deg, #4a3520 0%, #3e2c1c 100%);
            color: #f8f5f0;
            padding: 1.5rem 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            position: sticky;
            top: 0;
            z-index: 1000;
            margin-bottom: 30px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
            color: #f8f5f0;
        }

        .logo i {
            font-size: 2.5rem;
            color: #d4a762;
        }

        .logo-text h1 {
            font-size: 1.8rem;
            margin-bottom: 5px;
        }

        .logo-text p {
            font-size: 0.9rem;
            color: #e6d7c0;
            opacity: 0.9;
        }

        .admin-menu {
            display: flex;
            gap: 20px;
        }

        .menu-btn {
            background: rgba(212, 167, 98, 0.1);
            border: 1px solid rgba(212, 167, 98, 0.3);
            color: #f8f5f0;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .menu-btn:hover {
            background: rgba(212, 167, 98, 0.3);
            transform: translateY(-2px);
        }

        .menu-btn.active {
            background: #d4a762;
            color: #4a3520;
        }

        /* بخش اصلی پنل */
        .admin-main {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 30px;
            margin: 30px 0;
        }

        .main-content {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        /* تیتر بخش‌ها */
        .section-title {
            font-size: 1.8rem;
            color: #4a3520;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid #d4a762;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .section-title i {
            color: #d4a762;
        }

        /* فرم‌ها */
        .form-container {
            background: #f8f5f0;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4a3520;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e6d7c0;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-control:focus {
            outline: none;
            border-color: #d4a762;
            box-shadow: 0 0 0 3px rgba(212, 167, 98, 0.1);
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        /* نوع تخفیف */
        .discount-type-selector {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .discount-type-option {
            flex: 1;
            min-width: 150px;
        }

        .discount-type-option input[type="radio"] {
            display: none;
        }

        .discount-type-label {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 15px;
            border: 2px solid #e6d7c0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: white;
            text-align: center;
            height: 100%;
        }

        .discount-type-label i {
            font-size: 2rem;
            color: #e6d7c0;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .discount-type-label span {
            font-weight: 600;
            color: #6b5c48;
            font-size: 0.9rem;
        }

        .discount-type-option input[type="radio"]:checked + .discount-type-label {
            border-color: #d4a762;
            background: rgba(212, 167, 98, 0.05);
        }

        .discount-type-option input[type="radio"]:checked + .discount-type-label i {
            color: #d4a762;
        }

        /* بازه زمانی */
        .time-range {
            background: white;
            border: 1px solid #e6d7c0;
            border-radius: 8px;
            padding: 20px;
            margin-top: 15px;
        }

        .time-range-title {
            font-weight: 600;
            color: #4a3520;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* دکمه‌ها */
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-primary {
            background: #d4a762;
            color: white;
        }

        .btn-primary:hover {
            background: #b38f4a;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(212, 167, 98, 0.3);
        }

        .btn-secondary {
            background: #6b5c48;
            color: white;
        }

        .btn-secondary:hover {
            background: #554a3b;
        }

        .btn-success {
            background: #28a745;
            color: white;
        }

        .btn-success:hover {
            background: #218838;
        }

        .btn-warning {
            background: #ffc107;
            color: #212529;
        }

        .btn-warning:hover {
            background: #e0a800;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
        }

        .btn-info:hover {
            background: #138496;
        }

        .btn-small {
            padding: 6px 12px;
            font-size: 0.9rem;
        }

        .btn-extra-small {
            padding: 4px 8px;
            font-size: 0.8rem;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* جداول */
        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            background: #f1e9dd;
            color: #4a3520;
            padding: 15px;
            text-align: right;
            font-weight: 600;
            border-bottom: 2px solid #d4a762;
        }

        .table td {
            padding: 15px;
            border-bottom: 1px solid #e6d7c0;
            vertical-align: middle;
        }

        .table tr:hover {
            background: rgba(248, 245, 240, 0.5);
        }

        /* بج‌ها */
        .badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-success {
            background: rgba(40, 167, 69, 0.2);
            color: #28a745;
        }

        .badge-danger {
            background: rgba(220, 53, 69, 0.2);
            color: #dc3545;
        }

        .badge-warning {
            background: rgba(255, 193, 7, 0.2);
            color: #856404;
        }

        .badge-info {
            background: rgba(23, 162, 184, 0.2);
            color: #17a2b8;
        }

        .badge-primary {
            background: rgba(212, 167, 98, 0.2);
            color: #4a3520;
        }

        /* درصد تخفیف */
        .discount-percent {
            font-size: 1.2rem;
            font-weight: 700;
            color: #d4a762;
        }

        /* وضعیت */
        .status-active {
            color: #28a745;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-inactive {
            color: #dc3545;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-expired {
            color: #6c757d;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .status-upcoming {
            color: #17a2b8;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* نوار وضعیت تخفیف */
        .discount-progress {
            width: 100%;
            height: 6px;
            background: #e6d7c0;
            border-radius: 3px;
            margin-top: 5px;
            overflow: hidden;
        }

        .discount-progress-bar {
            height: 100%;
            border-radius: 3px;
            transition: width 0.5s ease;
        }

        .progress-active {
            background: #28a745;
        }

        .progress-upcoming {
            background: #17a2b8;
        }

        .progress-expired {
            background: #dc3545;
        }

        .progress-inactive {
            background: #6c757d;
        }

        /* فیلتر تخفیف‌ها */
        .filter-bar {
            background: #f1e9dd;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-select {
            padding: 10px 15px;
            border: 1px solid #e6d7c0;
            border-radius: 8px;
            background: white;
            color: #4a3520;
            font-size: 0.9rem;
            min-width: 150px;
        }

        /* آمار تخفیف‌ها */
        .discount-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            border: 1px solid #e6d7c0;
        }

        .stat-card i {
            font-size: 2rem;
            color: #d4a762;
            margin-bottom: 10px;
        }

        .stat-card h3 {
            font-size: 1.8rem;
            color: #4a3520;
            margin-bottom: 5px;
        }

        .stat-card p {
            color: #6b5c48;
            font-size: 0.9rem;
        }

        /* پیشرفت بار */
        .progress-container {
            margin: 20px 0;
        }

        .progress-bar {
            height: 10px;
            background: #e6d7c0;
            border-radius: 5px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #d4a762, #b38f4a);
            border-radius: 5px;
            transition: width 0.3s ease;
        }

        .progress-labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 0.8rem;
            color: #6b5c48;
        }

        /* مودال‌ها */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 2px solid #d4a762;
        }

        .modal-title {
            font-size: 1.5rem;
            color: #4a3520;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .modal-title i {
            color: #d4a762;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.8rem;
            color: #6b5c48;
            cursor: pointer;
            padding: 5px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .close-modal:hover {
            background: rgba(212, 167, 98, 0.1);
            color: #4a3520;
        }

        /* تاریخ و زمان */
        .date-time-display {
            display: flex;
            flex-direction: column;
            gap: 5px;
            font-size: 0.9rem;
            color: #6b5c48;
        }

        /* رسپانسیو */
        @media (max-width: 992px) {
            .admin-main {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .admin-menu {
                width: 100%;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .discount-type-selector {
                flex-direction: column;
            }
            
            .discount-type-option {
                width: 100%;
            }
            
            .filter-bar {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-select {
                width: 100%;
            }
            
            .action-buttons {
                justify-content: center;
            }
            
            .table {
                min-width: 700px;
            }
        }

        @media (max-width: 480px) {
            .main-content {
                padding: 20px;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .btn {
                width: 100%;
                justify-content: center;
            }
            
            .action-buttons {
                flex-direction: column;
            }
            
            .action-buttons .btn {
                width: 100%;
            }
            
            .modal-content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- هدر پنل مدیریت -->
    <header class="admin-header">
        <div class="container">
            <div class="header-content">
                <a href="index.html" class="logo">
                    <i class="fas fa-tags"></i>
                    <div class="logo-text">
                        <h1>مدیریت تخفیف‌ها</h1>
                        <p>کافی‌شاپ آرامش</p>
                    </div>
                </a>
                
                <div class="admin-menu">
                    <a href="panel.php" class="menu-btn">
                        <i class="fas fa-cogs"></i>
                        پنل مدیریت
                    </a>
                    <a href="#" class="menu-btn active">
                        <i class="fas fa-percentage"></i>
                        تخفیف‌ها
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- آمار تخفیف‌ها -->
        <div class="discount-stats">
            <div class="stat-card">
                <i class="fas fa-bolt"></i>
                <h3>۵</h3>
                <p>تخفیف فعال</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-pause-circle"></i>
                <h3>۳</h3>
                <p>تخفیف غیرفعال</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-calendar-times"></i>
                <h3>۷</h3>
                <p>تخفیف منقضی شده</p>
            </div>
            <div class="stat-card">
                <i class="fas fa-history"></i>
                <h3>۱۵</h3>
                <p>کل تخفیف‌ها</p>
            </div>
        </div>

        <div class="admin-main">
            <!-- بخش ایجاد تخفیف جدید -->
            <div class="main-content">
                <h2 class="section-title">
                    <i class="fas fa-plus-circle"></i>
                    ایجاد تخفیف جدید
                </h2>
                
                <!-- فرم ایجاد تخفیف -->
                <div class="form-container">
                    <form id="discountForm">
                        <!-- نام تخفیف -->
                        <div class="form-group">
                            <label for="discountName">نام تخفیف *</label>
                            <input type="text" id="discountName" class="form-control" placeholder="مثلا: تخفیف ویژه تابستان" required>
                            <small style="color: #6b5c48; font-size: 0.8rem; margin-top: 5px; display: block;">نامی واضح و توصیفی برای تخفیف انتخاب کنید</small>
                        </div>
                        
                        <!-- نوع تخفیف -->
                        <div class="form-group">
                            <label>نوع تخفیف *</label>
                            <div class="discount-type-selector">
                                <div class="discount-type-option">
                                    <input type="radio" name="discountType" id="typeAll" value="all" checked>
                                    <label for="typeAll" class="discount-type-label">
                                        <i class="fas fa-store"></i>
                                        <span>کل منو</span>
                                    </label>
                                </div>
                                <div class="discount-type-option">
                                    <input type="radio" name="discountType" id="typeCategory" value="category">
                                    <label for="typeCategory" class="discount-type-label">
                                        <i class="fas fa-layer-group"></i>
                                        <span>یک دسته</span>
                                    </label>
                                </div>
                                <div class="discount-type-option">
                                    <input type="radio" name="discountType" id="typeProduct" value="product">
                                    <label for="typeProduct" class="discount-type-label">
                                        <i class="fas fa-coffee"></i>
                                        <span>یک محصول</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <!-- انتخاب دسته (مشروط) -->
                        <div class="form-group" id="categorySelection" style="display: none;">
                            <label for="discountCategory">انتخاب دسته *</label>
                            <select id="discountCategory" class="form-control">
                                <option value="">انتخاب دسته</option>
                                <option value="قهوه‌ها">قهوه‌ها</option>
                                <option value="چای‌ها">چای‌ها</option>
                                <option value="نوشیدنی سرد">نوشیدنی سرد</option>
                                <option value="دسر و شیرینی">دسر و شیرینی</option>
                                <option value="صبحانه">صبحانه</option>
                            </select>
                        </div>
                        
                        <!-- انتخاب محصول (مشروط) -->
                        <div class="form-group" id="productSelection" style="display: none;">
                            <label for="discountProduct">انتخاب محصول *</label>
                            <select id="discountProduct" class="form-control">
                                <option value="">ابتدا دسته را انتخاب کنید</option>
                            </select>
                        </div>
                        
                        <!-- درصد تخفیف -->
                        <div class="form-row">
                            <div class="form-group">
                                <label for="discountPercent">درصد تخفیف *</label>
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <input type="range" id="discountPercentRange" min="1" max="70" value="20" class="form-control" style="flex: 1;">
                                    <span id="percentValue" class="discount-percent">۲۰٪</span>
                                    <input type="hidden" id="discountPercent" value="20">
                                </div>
                                <div class="progress-container">
                                    <div class="progress-bar">
                                        <div class="progress-fill" id="percentFill" style="width: 20%;"></div>
                                    </div>
                                    <div class="progress-labels">
                                        <span>۱٪</span>
                                        <span>۳۵٪</span>
                                        <span>۷۰٪</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- بازه زمانی -->
                        <div class="form-group">
                            <label>بازه زمانی تخفیف *</label>
                            <div class="time-range">
                                <div class="time-range-title">
                                    <i class="far fa-calendar-alt"></i>
                                    تاریخ شروع و پایان
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="startDate">تاریخ شروع</label>
                                        <input type="date" id="startDate" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="endDate">تاریخ پایان</label>
                                        <input type="date" id="endDate" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="startTime">ساعت شروع</label>
                                        <input type="time" id="startTime" class="form-control" value="08:00">
                                    </div>
                                    <div class="form-group">
                                        <label for="endTime">ساعت پایان</label>
                                        <input type="time" id="endTime" class="form-control" value="22:00">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- وضعیت -->
                        <div class="form-group">
                            <label>وضعیت *</label>
                            <div style="display: flex; gap: 20px; margin-top: 10px; flex-wrap: wrap;">
                                <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                    <input type="radio" name="discountStatus" value="active" checked>
                                    <span>فعال</span>
                                </label>
                                <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                    <input type="radio" name="discountStatus" value="inactive">
                                    <span>غیرفعال</span>
                                </label>
                                <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                    <input type="radio" name="discountStatus" value="upcoming">
                                    <span>آینده (غیرفعال تا تاریخ شروع)</span>
                                </label>
                            </div>
                        </div>
                        
                        <!-- توضیحات -->
                        <div class="form-group">
                            <label for="discountDescription">توضیحات (اختیاری)</label>
                            <textarea id="discountDescription" class="form-control" rows="3" placeholder="توضیحاتی درباره این تخفیف..."></textarea>
                        </div>
                        
                        <!-- دکمه‌های فرم -->
                        <div class="action-buttons">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-plus"></i>
                                ایجاد تخفیف
                            </button>
                            <button type="reset" class="btn btn-secondary">
                                <i class="fas fa-redo"></i>
                                ریست فرم
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <!-- بخش مدیریت تخفیف‌ها -->
            <div class="main-content">
                <h2 class="section-title">
                    <i class="fas fa-list-alt"></i>
                    لیست تخفیف‌ها
                </h2>
                
                <!-- فیلتر تخفیف‌ها -->
                <div class="filter-bar">
                    <select id="filterStatus" class="filter-select">
                        <option value="">همه وضعیت‌ها</option>
                        <option value="active">فعال</option>
                        <option value="inactive">غیرفعال</option>
                        <option value="expired">منقضی شده</option>
                        <option value="upcoming">آینده</option>
                    </select>
                    <select id="filterType" class="filter-select">
                        <option value="">همه انواع</option>
                        <option value="all">کل منو</option>
                        <option value="category">دسته‌بندی</option>
                        <option value="product">محصول</option>
                    </select>
                    <input type="text" id="searchDiscount" class="form-control" placeholder="جستجوی نام تخفیف...">
                </div>
                
                <!-- جدول تخفیف‌ها -->
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>نام تخفیف</th>
                                <th>نوع</th>
                                <th>درصد</th>
                                <th>وضعیت</th>
                                <th>بازه زمانی</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody id="discountsTable">
                            <!-- تخفیف 1 - فعال -->
                            <tr data-status="active" data-type="all">
                                <td>
                                    <strong>تخفیف ویژه تابستان</strong>
                                    <div class="discount-progress">
                                        <div class="discount-progress-bar progress-active" style="width: 65%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-primary">کل منو</span></td>
                                <td><span class="discount-percent">۲۵٪</span></td>
                                <td>
                                    <span class="status-active">
                                        <i class="fas fa-circle"></i>
                                        فعال
                                    </span>
                                </td>
                                <td>
                                    <div class="date-time-display">
                                        <span>۱۴۰۳/۰۴/۰۱</span>
                                        <span>۱۴۰۳/۰۴/۳۰</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-success btn-small edit-discount-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-warning btn-small toggle-discount-btn">
                                            <i class="fas fa-pause"></i>
                                        </button>
                                        <button class="btn btn-danger btn-small delete-discount-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- تخفیف 2 - منقضی شده -->
                            <tr data-status="expired" data-type="category">
                                <td>
                                    <strong>تخفیف قهوه‌های ویژه</strong>
                                    <div class="discount-progress">
                                        <div class="discount-progress-bar progress-expired" style="width: 100%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-info">دسته: قهوه‌ها</span></td>
                                <td><span class="discount-percent">۳۰٪</span></td>
                                <td>
                                    <span class="status-expired">
                                        <i class="fas fa-circle"></i>
                                        منقضی شده
                                    </span>
                                </td>
                                <td>
                                    <div class="date-time-display">
                                        <span>۱۴۰۳/۰۳/۰۱</span>
                                        <span>۱۴۰۳/۰۳/۱۵</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-success btn-small edit-discount-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-info btn-small extend-discount-btn">
                                            <i class="fas fa-calendar-plus"></i>
                                        </button>
                                        <button class="btn btn-danger btn-small delete-discount-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- تخفیف 3 - آینده -->
                            <tr data-status="upcoming" data-type="product">
                                <td>
                                    <strong>تخفیف افتتاحیه اسپرسو بار</strong>
                                    <div class="discount-progress">
                                        <div class="discount-progress-bar progress-upcoming" style="width: 0%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-info">محصول: اسپرسو</span></td>
                                <td><span class="discount-percent">۲۰٪</span></td>
                                <td>
                                    <span class="status-upcoming">
                                        <i class="fas fa-circle"></i>
                                        آینده
                                    </span>
                                </td>
                                <td>
                                    <div class="date-time-display">
                                        <span>۱۴۰۳/۰۵/۰۱</span>
                                        <span>۱۴۰۳/۰۵/۱۰</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-success btn-small edit-discount-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-primary btn-small activate-discount-btn">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <button class="btn btn-danger btn-small delete-discount-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- تخفیف 4 - غیرفعال -->
                            <tr data-status="inactive" data-type="all">
                                <td>
                                    <strong>تخفیف آخر هفته</strong>
                                    <div class="discount-progress">
                                        <div class="discount-progress-bar progress-inactive" style="width: 40%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-primary">کل منو</span></td>
                                <td><span class="discount-percent">۱۵٪</span></td>
                                <td>
                                    <span class="status-inactive">
                                        <i class="fas fa-circle"></i>
                                        غیرفعال
                                    </span>
                                </td>
                                <td>
                                    <div class="date-time-display">
                                        <span>۱۴۰۳/۰۴/۰۱</span>
                                        <span>۱۴۰۳/۰۶/۳۰</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-success btn-small edit-discount-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-primary btn-small activate-discount-btn">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <button class="btn btn-danger btn-small delete-discount-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- تخفیف 5 - فعال -->
                            <tr data-status="active" data-type="category">
                                <td>
                                    <strong>تخفیف دسرهای خوشمزه</strong>
                                    <div class="discount-progress">
                                        <div class="discount-progress-bar progress-active" style="width: 30%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-info">دسته: دسر و شیرینی</span></td>
                                <td><span class="discount-percent">۲۵٪</span></td>
                                <td>
                                    <span class="status-active">
                                        <i class="fas fa-circle"></i>
                                        فعال
                                    </span>
                                </td>
                                <td>
                                    <div class="date-time-display">
                                        <span>۱۴۰۳/۰۴/۱۵</span>
                                        <span>۱۴۰۳/۰۵/۱۵</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-success btn-small edit-discount-btn">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn btn-warning btn-small toggle-discount-btn">
                                            <i class="fas fa-pause"></i>
                                        </button>
                                        <button class="btn btn-danger btn-small delete-discount-btn">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- مودال ویرایش تخفیف -->
    <div class="modal" id="editDiscountModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-edit"></i>
                    ویرایش تخفیف
                </h3>
                <button class="close-modal" id="closeEditModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="editDiscountForm">
                    <div class="form-group">
                        <label for="editDiscountName">نام تخفیف</label>
                        <input type="text" id="editDiscountName" class="form-control" value="تخفیف ویژه تابستان" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="editDiscountPercent">درصد تخفیف</label>
                            <input type="number" id="editDiscountPercent" class="form-control" value="25" min="1" max="70" required>
                        </div>
                        <div class="form-group">
                            <label for="editDiscountType">نوع تخفیف</label>
                            <select id="editDiscountType" class="form-control">
                                <option value="all">کل منو</option>
                                <option value="category" selected>دسته‌بندی</option>
                                <option value="product">محصول</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="editStartDate">تاریخ شروع</label>
                            <input type="date" id="editStartDate" class="form-control" value="2024-06-21" required>
                        </div>
                        <div class="form-group">
                            <label for="editEndDate">تاریخ پایان</label>
                            <input type="date" id="editEndDate" class="form-control" value="2024-07-20" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>وضعیت</label>
                        <div style="display: flex; gap: 20px; margin-top: 10px; flex-wrap: wrap;">
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="editDiscountStatus" value="active" checked>
                                <span>فعال</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="editDiscountStatus" value="inactive">
                                <span>غیرفعال</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="editDiscountStatus" value="upcoming">
                                <span>آینده</span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="editDiscountDescription">توضیحات</label>
                        <textarea id="editDiscountDescription" class="form-control" rows="3">تخفیف ویژه فصل تابستان برای همه محصولات</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="display: flex; justify-content: flex-end; gap: 10px; padding-top: 20px; border-top: 1px solid #e6d7c0;">
                <button type="button" class="btn btn-secondary" id="cancelEdit">انصراف</button>
                <button type="button" class="btn btn-primary" id="saveEdit">ذخیره تغییرات</button>
            </div>
        </div>
    </div>

    <!-- مودال تمدید تخفیف -->
    <div class="modal" id="extendDiscountModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-calendar-plus"></i>
                    تمدید تخفیف
                </h3>
                <button class="close-modal" id="closeExtendModal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="extendDiscountForm">
                    <div class="form-group">
                        <label>تخفیف: <strong>تخفیف قهوه‌های ویژه</strong></label>
                        <p style="color: #6b5c48; font-size: 0.9rem; margin-top: 5px;">این تخفیف منقضی شده است. می‌توانید آن را تمدید کنید.</p>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="extendStartDate">تاریخ شروع جدید</label>
                            <input type="date" id="extendStartDate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="extendEndDate">تاریخ پایان جدید</label>
                            <input type="date" id="extendEndDate" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>نحوه تمدید</label>
                        <div style="display: flex; flex-direction: column; gap: 10px; margin-top: 10px;">
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="extendType" value="same" checked>
                                <span>با همان درصد و مشخصات</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="extendType" value="new">
                                <span>ایجاد تخفیف جدید با مشخصات متفاوت</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer" style="display: flex; justify-content: flex-end; gap: 10px; padding-top: 20px; border-top: 1px solid #e6d7c0;">
                <button type="button" class="btn btn-secondary" id="cancelExtend">انصراف</button>
                <button type="button" class="btn btn-primary" id="saveExtend">تمدید تخفیف</button>
            </div>
        </div>
    </div>

    <!-- مودال تایید حذف -->
    <div class="modal" id="deleteModal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">
                    <i class="fas fa-trash"></i>
                    تایید حذف
                </h3>
                <button class="close-modal" id="closeDeleteModal">&times;</button>
            </div>
            <div class="modal-body">
                <p style="margin-bottom: 20px;">آیا از حذف این تخفیف مطمئن هستید؟</p>
                <div class="form-group">
                    <label>نام تخفیف:</label>
                    <p style="font-weight: 600; color: #4a3520;" id="deleteDiscountName">تخفیف ویژه تابستان</p>
                </div>
                <div class="form-group">
                    <label>نوع تخفیف:</label>
                    <p style="color: #6b5c48;" id="deleteDiscountType">کل منو</p>
                </div>
            </div>
            <div class="modal-footer" style="display: flex; justify-content: flex-end; gap: 10px; padding-top: 20px; border-top: 1px solid #e6d7c0;">
                <button type="button" class="btn btn-secondary" id="cancelDelete">انصراف</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">حذف تخفیف</button>
            </div>
        </div>
    </div>

    <script>
        // مدیریت صفحه تخفیف‌ها
        document.addEventListener('DOMContentLoaded', function() {
            // مدیریت انتخاب نوع تخفیف
            const discountTypeRadios = document.querySelectorAll('input[name="discountType"]');
            const categorySelection = document.getElementById('categorySelection');
            const productSelection = document.getElementById('productSelection');
            
            discountTypeRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    if (this.value === 'category') {
                        categorySelection.style.display = 'block';
                        productSelection.style.display = 'none';
                    } else if (this.value === 'product') {
                        categorySelection.style.display = 'block';
                        productSelection.style.display = 'block';
                        // شبیه‌سازی بارگذاری محصولات بر اساس دسته انتخاب شده
                        const categorySelect = document.getElementById('discountCategory');
                        if (categorySelect) {
                            categorySelect.addEventListener('change', function() {
                                const productSelect = document.getElementById('discountProduct');
                                productSelect.innerHTML = '<option value="">انتخاب محصول</option>';
                                
                                // داده‌های نمونه برای محصولات
                                const sampleProducts = {
                                    'قهوه‌ها': ['اسپرسو', 'آمریکانو', 'لته', 'کاپوچینو'],
                                    'چای‌ها': ['چای سیاه', 'چای سبز', 'چای اولانگ'],
                                    'نوشیدنی سرد': ['آیس لته', 'فراپه', 'موهیتو'],
                                    'دسر و شیرینی': ['چیزکیک', 'کرواسان', 'پنکیک'],
                                    'صبحانه': ['صبحانه کامل', 'املت', 'پنیر و گردو']
                                };
                                
                                const selectedCategory = this.value;
                                if (selectedCategory && sampleProducts[selectedCategory]) {
                                    sampleProducts[selectedCategory].forEach(product => {
                                        const option = document.createElement('option');
                                        option.value = product;
                                        option.textContent = product;
                                        productSelect.appendChild(option);
                                    });
                                }
                            });
                        }
                    } else {
                        categorySelection.style.display = 'none';
                        productSelection.style.display = 'none';
                    }
                });
            });
            
            // مدیریت اسلایدر درصد تخفیف
            const discountPercentRange = document.getElementById('discountPercentRange');
            const percentValue = document.getElementById('percentValue');
            const discountPercent = document.getElementById('discountPercent');
            const percentFill = document.getElementById('percentFill');
            
            if (discountPercentRange) {
                discountPercentRange.addEventListener('input', function() {
                    const value = this.value;
                    percentValue.textContent = value + '٪';
                    discountPercent.value = value;
                    percentFill.style.width = (value / 70 * 100) + '%';
                });
            }
            
            // مدیریت تاریخ‌ها
            const today = new Date();
            const tomorrow = new Date(today);
            tomorrow.setDate(tomorrow.getDate() + 1);
            
            const nextWeek = new Date(today);
            nextWeek.setDate(nextWeek.getDate() + 7);
            
            // فرمت تاریخ برای input type="date"
            function formatDate(date) {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                return `${year}-${month}-${day}`;
            }
            
            // تنظیم تاریخ‌های پیش‌فرض
            const startDateInput = document.getElementById('startDate');
            const endDateInput = document.getElementById('endDate');
            
            if (startDateInput) {
                startDateInput.value = formatDate(today);
                startDateInput.min = formatDate(today);
            }
            
            if (endDateInput) {
                endDateInput.value = formatDate(nextWeek);
                endDateInput.min = formatDate(tomorrow);
            }
            
            // مدیریت فیلترها
            const filterStatus = document.getElementById('filterStatus');
            const filterType = document.getElementById('filterType');
            const searchDiscount = document.getElementById('searchDiscount');
            const discountRows = document.querySelectorAll('#discountsTable tr');
            
            function filterDiscounts() {
                const statusValue = filterStatus.value;
                const typeValue = filterType.value;
                const searchValue = searchDiscount.value.toLowerCase();
                
                discountRows.forEach(row => {
                    const rowStatus = row.getAttribute('data-status');
                    const rowType = row.getAttribute('data-type');
                    const rowName = row.querySelector('strong').textContent.toLowerCase();
                    
                    const statusMatch = !statusValue || rowStatus === statusValue;
                    const typeMatch = !typeValue || rowType === typeValue;
                    const searchMatch = !searchValue || rowName.includes(searchValue);
                    
                    if (statusMatch && typeMatch && searchMatch) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
            
            if (filterStatus) filterStatus.addEventListener('change', filterDiscounts);
            if (filterType) filterType.addEventListener('change', filterDiscounts);
            if (searchDiscount) searchDiscount.addEventListener('input', filterDiscounts);
            
            // مدیریت فرم ایجاد تخفیف
            const discountForm = document.getElementById('discountForm');
            if (discountForm) {
                discountForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // گرفتن مقادیر فرم
                    const discountName = document.getElementById('discountName').value;
                    const discountType = document.querySelector('input[name="discountType"]:checked').value;
                    const discountPercentVal = document.getElementById('discountPercent').value;
                    const status = document.querySelector('input[name="discountStatus"]:checked').value;
                    
                    // اعتبارسنجی ساده
                    if (!discountName) {
                        alert('لطفاً نام تخفیف را وارد کنید');
                        return;
                    }
                    
                    // نمایش پیام موفقیت
                    alert(`تخفیف "${discountName}" با موفقیت ایجاد شد!`);
                    
                    // در حالت واقعی، اینجا داده‌ها به سرور ارسال می‌شدند
                    console.log('تخفیف جدید:', {
                        name: discountName,
                        type: discountType,
                        percent: discountPercentVal,
                        status: status
                    });
                    
                    // ریست فرم
                    this.reset();
                    document.getElementById('discountPercentRange').value = 20;
                    percentValue.textContent = '۲۰٪';
                    discountPercent.value = 20;
                    percentFill.style.width = '20%';
                    categorySelection.style.display = 'none';
                    productSelection.style.display = 'none';
                    document.querySelector('input[name="discountStatus"][value="active"]').checked = true;
                    startDateInput.value = formatDate(today);
                    endDateInput.value = formatDate(nextWeek);
                });
            }
            
            // مدیریت مودال ویرایش
            const editDiscountModal = document.getElementById('editDiscountModal');
            const editDiscountButtons = document.querySelectorAll('.edit-discount-btn');
            const closeEditModal = document.getElementById('closeEditModal');
            const cancelEdit = document.getElementById('cancelEdit');
            const saveEdit = document.getElementById('saveEdit');
            
            // باز کردن مودال ویرایش
            editDiscountButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const name = row.querySelector('strong').textContent;
                    const percent = row.querySelector('.discount-percent').textContent.replace('٪', '');
                    const type = row.getAttribute('data-type');
                    const status = row.getAttribute('data-status');
                    
                    // پر کردن فرم ویرایش
                    document.getElementById('editDiscountName').value = name;
                    document.getElementById('editDiscountPercent').value = percent;
                    document.getElementById('editDiscountType').value = type;
                    
                    // تنظیم وضعیت
                    const statusRadios = document.querySelectorAll('input[name="editDiscountStatus"]');
                    statusRadios.forEach(radio => {
                        radio.checked = (radio.value === status);
                    });
                    
                    // نمایش مودال
                    editDiscountModal.classList.add('active');
                });
            });
            
            // بستن مودال ویرایش
            function closeEditDiscountModal() {
                editDiscountModal.classList.remove('active');
            }
            
            if (closeEditModal) closeEditModal.addEventListener('click', closeEditDiscountModal);
            if (cancelEdit) cancelEdit.addEventListener('click', closeEditDiscountModal);
            
            // ذخیره ویرایش
            if (saveEdit) {
                saveEdit.addEventListener('click', function() {
                    const newName = document.getElementById('editDiscountName').value;
                    alert(`تخفیف "${newName}" با موفقیت ویرایش شد (نمایشی)`);
                    closeEditDiscountModal();
                });
            }
            
            // مدیریت مودال تمدید
            const extendDiscountModal = document.getElementById('extendDiscountModal');
            const extendDiscountButtons = document.querySelectorAll('.extend-discount-btn');
            const closeExtendModal = document.getElementById('closeExtendModal');
            const cancelExtend = document.getElementById('cancelExtend');
            const saveExtend = document.getElementById('saveExtend');
            
            // باز کردن مودال تمدید
            extendDiscountButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const name = row.querySelector('strong').textContent;
                    
                    // تنظیم تاریخ‌های پیش‌فرض برای تمدید
                    const extendStartDate = document.getElementById('extendStartDate');
                    const extendEndDate = document.getElementById('extendEndDate');
                    
                    if (extendStartDate) {
                        extendStartDate.value = formatDate(today);
                        extendStartDate.min = formatDate(today);
                    }
                    
                    if (extendEndDate) {
                        const nextMonth = new Date(today);
                        nextMonth.setMonth(nextMonth.getMonth() + 1);
                        extendEndDate.value = formatDate(nextMonth);
                        extendEndDate.min = formatDate(tomorrow);
                    }
                    
                    // نمایش مودال
                    extendDiscountModal.classList.add('active');
                });
            });
            
            // بستن مودال تمدید
            function closeExtendDiscountModal() {
                extendDiscountModal.classList.remove('active');
            }
            
            if (closeExtendModal) closeExtendModal.addEventListener('click', closeExtendDiscountModal);
            if (cancelExtend) cancelExtend.addEventListener('click', closeExtendDiscountModal);
            
            // تمدید تخفیف
            if (saveExtend) {
                saveExtend.addEventListener('click', function() {
                    alert('تخفیف با موفقیت تمدید شد (نمایشی)');
                    closeExtendDiscountModal();
                });
            }
            
            // مدیریت فعال/غیرفعال کردن تخفیف
            const toggleButtons = document.querySelectorAll('.toggle-discount-btn, .activate-discount-btn');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const statusCell = row.querySelector('.status-active, .status-inactive, .status-upcoming, .status-expired');
                    const statusIcon = statusCell.querySelector('i');
                    const statusText = statusCell.textContent.trim();
                    const buttonIcon = this.querySelector('i');
                    const progressBar = row.querySelector('.discount-progress-bar');
                    
                    if (statusText.includes('فعال')) {
                        // تغییر از فعال به غیرفعال
                        statusCell.innerHTML = '<i class="fas fa-circle"></i> غیرفعال';
                        statusCell.className = 'status-inactive';
                        buttonIcon.className = 'fas fa-play';
                        this.classList.remove('btn-warning');
                        this.classList.add('btn-primary');
                        progressBar.className = 'discount-progress-bar progress-inactive';
                    } else {
                        // تغییر از غیرفعال/آینده/منقضی به فعال
                        statusCell.innerHTML = '<i class="fas fa-circle"></i> فعال';
                        statusCell.className = 'status-active';
                        buttonIcon.className = 'fas fa-pause';
                        this.classList.remove('btn-primary');
                        this.classList.add('btn-warning');
                        progressBar.className = 'discount-progress-bar progress-active';
                    }
                    
                    alert('وضعیت تخفیف تغییر کرد (نمایشی)');
                });
            });
            
            // مدیریت مودال حذف
            const deleteModal = document.getElementById('deleteModal');
            const deleteButtons = document.querySelectorAll('.delete-discount-btn');
            const closeDeleteModal = document.getElementById('closeDeleteModal');
            const cancelDelete = document.getElementById('cancelDelete');
            const confirmDelete = document.getElementById('confirmDelete');
            const deleteDiscountName = document.getElementById('deleteDiscountName');
            const deleteDiscountType = document.getElementById('deleteDiscountType');
            
            // باز کردن مودال حذف
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const row = this.closest('tr');
                    const name = row.querySelector('strong').textContent;
                    const type = row.querySelector('.badge').textContent;
                    
                    // پر کردن اطلاعات حذف
                    deleteDiscountName.textContent = name;
                    deleteDiscountType.textContent = type;
                    
                    // نمایش مودال
                    deleteModal.classList.add('active');
                });
            });
            
            // بستن مودال حذف
            function closeDeleteDiscountModal() {
                deleteModal.classList.remove('active');
            }
            
            if (closeDeleteModal) closeDeleteModal.addEventListener('click', closeDeleteDiscountModal);
            if (cancelDelete) cancelDelete.addEventListener('click', closeDeleteDiscountModal);
            
            // تایید حذف
            if (confirmDelete) {
                confirmDelete.addEventListener('click', function() {
                    const discountName = deleteDiscountName.textContent;
                    alert(`تخفیف "${discountName}" با موفقیت حذف شد (نمایشی)`);
                    closeDeleteDiscountModal();
                });
            }
            
            // بستن مودال‌ها با کلیک خارج از آنها
            document.addEventListener('click', function(e) {
                if (e.target === editDiscountModal) closeEditDiscountModal();
                if (e.target === extendDiscountModal) closeExtendDiscountModal();
                if (e.target === deleteModal) closeDeleteDiscountModal();
            });
            
            // بارگذاری اولیه فیلتر
            filterDiscounts();
        });
    </script>
</body>
</html>