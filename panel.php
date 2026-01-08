<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت کافی‌شاپ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/panel.css">
</head>
<body>
    <!-- هدر پنل مدیریت -->
    <header class="admin-header">
        <div class="container">
            <div class="header-content">
                <a href="index.html" class="logo">
                    <i class="fas fa-cogs"></i>
                    <div class="logo-text">
                        <h1>پنل مدیریت کافی‌شاپ</h1>
                        <p>مدیریت منو و محصولات</p>
                    </div>
                </a>
                
                <div class="admin-menu">
                    <a href="#categories-section" class="menu-btn active">
                        <i class="fas fa-layer-group"></i>
                        مدیریت دسته‌ها
                    </a>
                    <a href="#products-section" class="menu-btn">
                        <i class="fas fa-coffee"></i>
                        مدیریت محصولات
                    </a>
                    <a href="takhfif.php" class="menu-btn">
                        <i class="fas fa-percentage"></i>
                        مدیریت تخفیف ها
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="admin-main">
            <!-- محتوای اصلی -->
            <div class="main-content">
                <!-- بخش مدیریت دسته‌ها -->
                <section id="categories-section" class="section">
                    <h2 class="section-title">
                        <i class="fas fa-layer-group"></i>
                        مدیریت دسته‌ها
                    </h2>
                    
                    <!-- فرم اضافه کردن دسته جدید -->
                    <div class="form-container">
                        <h3 style="color: #4a3520; margin-bottom: 20px;">افزودن دسته جدید</h3>
                        <form id="categoryForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="categoryName">نام دسته</label>
                                    <input type="text" id="categoryName" class="form-control" placeholder="مثلا: قهوه‌های ویژه" required>
                                </div>
                                <div class="form-group">
                                    <label for="categoryOrder">ترتیب نمایش</label>
                                    <input type="number" id="categoryOrder" class="form-control" value="1" min="1">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="categoryDescription">توضیحات (اختیاری)</label>
                                <textarea id="categoryDescription" class="form-control" rows="3" placeholder="توضیح کوتاه درباره دسته..."></textarea>
                            </div>
                            
                            <div class="action-buttons">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    افزودن دسته
                                </button>
                                <button type="button" id="cancelEdit" class="btn btn-secondary">
                                    <i class="fas fa-times"></i>
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- لیست دسته‌ها -->
                    <h3 style="color: #4a3520; margin: 30px 0 15px;">دسته‌های موجود</h3>
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>نام دسته</th>
                                    <th>توضیحات</th>
                                    <th>ترتیب</th>
                                    <th>تعداد محصولات</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody id="categoriesTable">
                                <!-- دسته‌ها -->
                                <tr>
                                    <td><strong>قهوه‌ها</strong></td>
                                    <td>انواع قهوه‌های گرم</td>
                                    <td>1</td>
                                    <td><span class="category-count">3</span></td>
                                    <td><span class="status-active">فعال</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-category-btn" data-name="قهوه‌ها" data-description="انواع قهوه‌های گرم" data-order="1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>چای‌ها</strong></td>
                                    <td>انواع چای ایرانی و خارجی</td>
                                    <td>2</td>
                                    <td><span class="category-count">2</span></td>
                                    <td><span class="status-active">فعال</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-category-btn" data-name="چای‌ها" data-description="انواع چای ایرانی و خارجی" data-order="2">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>نوشیدنی سرد</strong></td>
                                    <td>نوشیدنی‌های خنک</td>
                                    <td>3</td>
                                    <td><span class="category-count">2</span></td>
                                    <td><span class="status-active">فعال</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-category-btn" data-name="نوشیدنی سرد" data-description="نوشیدنی‌های خنک" data-order="3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>دسر و شیرینی</strong></td>
                                    <td>انواع دسر و شیرینی</td>
                                    <td>4</td>
                                    <td><span class="category-count">2</span></td>
                                    <td><span class="status-active">فعال</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-category-btn" data-name="دسر و شیرینی" data-description="انواع دسر و شیرینی" data-order="4">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                
                <!-- بخش مدیریت محصولات -->
                <section id="products-section" class="section">
                    <h2 class="section-title">
                        <i class="fas fa-coffee"></i>
                        مدیریت محصولات
                    </h2>
                    
                    <!-- فرم اضافه کردن محصول جدید -->
                    <div class="form-container">
                        <h3 style="color: #4a3520; margin-bottom: 20px;">افزودن محصول جدید</h3>
                        <form id="productForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="productName">نام محصول</label>
                                    <input type="text" id="productName" class="form-control" placeholder="مثلا: اسپرسو دبل" required>
                                </div>
                                <div class="form-group">
                                    <label for="productCategory">دسته‌بندی</label>
                                    <select id="productCategory" class="form-control" required>
                                        <option value="">انتخاب دسته</option>
                                        <option value="1">قهوه‌ها</option>
                                        <option value="2">چای‌ها</option>
                                        <option value="3">نوشیدنی سرد</option>
                                        <option value="4">دسر و شیرینی</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="productPrice">قیمت (تومان)</label>
                                    <input type="text" id="productPrice" class="form-control" placeholder="45000" required>
                                </div>
                                <div class="form-group">
                                    <label for="productOrder">ترتیب نمایش</label>
                                    <input type="number" id="productOrder" class="form-control" value="1" min="1">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="productDescription">توضیحات محصول</label>
                                <textarea id="productDescription" class="form-control" rows="3" placeholder="توضیح کامل درباره محصول..." required></textarea>
                            </div>
                            
                            <!-- آپلود عکس -->
                            <div class="form-group">
                                <label>عکس محصول</label>
                                <div class="image-upload" id="imageUpload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <p>برای آپلود عکس کلیک کنید یا فایل را اینجا بکشید</p>
                                    <span style="color: #6b5c48; font-size: 0.9rem;">فرمت‌های مجاز: JPG, PNG, GIF (حداکثر 2MB)</span>
                                    <input type="file" id="productImage" accept="image/*" style="display: none;">
                                    <div class="image-preview-container" id="imagePreviewContainer">
                                        <img id="imagePreview" class="image-preview" alt="پیش‌نمایش عکس">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="action-buttons">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
                                    افزودن محصول
                                </button>
                                <button type="button" id="cancelProductEdit" class="btn btn-secondary">
                                    <i class="fas fa-times"></i>
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- فیلتر محصولات -->
                    <div class="filter-bar">
                        <select id="filterCategory" class="filter-select">
                            <option value="">همه دسته‌ها</option>
                            <option value="1">قهوه‌ها</option>
                            <option value="2">چای‌ها</option>
                            <option value="3">نوشیدنی سرد</option>
                            <option value="4">دسر و شیرینی</option>
                        </select>
                        <input type="text" id="searchProduct" class="form-control" placeholder="جستجوی محصول...">
                    </div>
                    
                    <!-- لیست محصولات -->
                    <div class="table-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>عکس</th>
                                    <th>نام محصول</th>
                                    <th>دسته‌بندی</th>
                                    <th>قیمت</th>
                                    <th>توضیحات</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody id="productsTable">
                                <!-- محصولات -->
                                <tr>
                                    <td><img src="images/photo19968946410.jpg" class="product-image" alt="اسپرسو"></td>
                                    <td><strong>اسپرسو</strong></td>
                                    <td><span class="category-badge">قهوه‌ها</span></td>
                                    <td>45,000 تومان</td>
                                    <td style="max-width: 200px;">قهوه اسپرسوی خالص و غلیظ</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-product-btn" data-name="اسپرسو" data-category="1" data-price="45000" data-description="قهوه اسپرسوی خالص و غلیظ" data-order="1">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/photo19968946410.jpg" class="product-image" alt="آمریکانو"></td>
                                    <td><strong>آمریکانو</strong></td>
                                    <td><span class="category-badge">قهوه‌ها</span></td>
                                    <td>55,000 تومان</td>
                                    <td style="max-width: 200px;">اسپرسو رقیق شده با آب داغ</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-product-btn" data-name="آمریکانو" data-category="1" data-price="55000" data-description="اسپرسو رقیق شده با آب داغ" data-order="2">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="images/photo19968946410.jpg" class="product-image" alt="لته"></td>
                                    <td><strong>لته</strong></td>
                                    <td><span class="category-badge">قهوه‌ها</span></td>
                                    <td>65,000 تومان</td>
                                    <td style="max-width: 200px;">ترکیب اسپرسو و شیر بخار داده شده</td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn btn-primary btn-small edit-product-btn" data-name="لته" data-category="1" data-price="65000" data-description="ترکیب اسپرسو و شیر بخار داده شده" data-order="3">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-small">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
            
            <!-- سایدبار -->
            <aside class="sidebar">
                <!-- آمار کلی -->
                <div class="stats-card">
                    <i class="fas fa-chart-bar"></i>
                    <h3>9</h3>
                    <p>تعداد کل محصولات</p>
                </div>
                
                <div class="stats-card">
                    <i class="fas fa-layer-group"></i>
                    <h3>4</h3>
                    <p>تعداد دسته‌ها</p>
                </div>
                
                <!-- لیست دسته‌ها با تعداد -->
                <h3 style="color: #4a3520; margin: 25px 0 15px;">دسته‌ها و تعداد محصولات</h3>
                <div class="category-list" id="sidebarCategories">
                    <!-- دسته‌ها با تعداد محصولات -->
                    <div class="category-item">
                        <span class="category-name">قهوه‌ها</span>
                        <span class="category-count">3</span>
                    </div>
                    <div class="category-item">
                        <span class="category-name">چای‌ها</span>
                        <span class="category-count">2</span>
                    </div>
                    <div class="category-item">
                        <span class="category-name">نوشیدنی سرد</span>
                        <span class="category-count">2</span>
                    </div>
                    <div class="category-item">
                        <span class="category-name">دسر و شیرینی</span>
                        <span class="category-count">2</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <!-- مودال ویرایش دسته -->
    <div class="edit-modal" id="editCategoryModal">
        <div class="edit-modal-content">
            <div class="edit-modal-header">
                <h3 class="edit-modal-title">
                    <i class="fas fa-edit"></i>
                    ویرایش دسته
                </h3>
                <button class="close-edit-modal" id="closeEditCategoryModal">&times;</button>
            </div>
            <div class="edit-modal-body">
                <form id="editCategoryForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="editCategoryName">نام دسته</label>
                            <input type="text" id="editCategoryName" class="form-control" placeholder="نام دسته" required>
                        </div>
                        <div class="form-group">
                            <label for="editCategoryOrder">ترتیب نمایش</label>
                            <input type="number" id="editCategoryOrder" class="form-control" value="1" min="1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="editCategoryDescription">توضیحات (اختیاری)</label>
                        <textarea id="editCategoryDescription" class="form-control" rows="3" placeholder="توضیح کوتاه درباره دسته..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>وضعیت</label>
                        <div style="display: flex; gap: 20px; margin-top: 10px;">
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="editCategoryStatus" value="active" checked>
                                <span>فعال</span>
                            </label>
                            <label style="display: flex; align-items: center; gap: 5px; cursor: pointer;">
                                <input type="radio" name="editCategoryStatus" value="inactive">
                                <span>غیرفعال</span>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="edit-modal-footer">
                <button type="button" class="btn btn-secondary" id="cancelEditCategory">انصراف</button>
                <button type="button" class="btn btn-primary" id="saveEditCategory">ذخیره تغییرات</button>
            </div>
        </div>
    </div>

    <!-- مودال ویرایش محصول -->
    <div class="edit-modal" id="editProductModal">
        <div class="edit-modal-content">
            <div class="edit-modal-header">
                <h3 class="edit-modal-title">
                    <i class="fas fa-edit"></i>
                    ویرایش محصول
                </h3>
                <button class="close-edit-modal" id="closeEditProductModal">&times;</button>
            </div>
            <div class="edit-modal-body">
                <div class="edit-image-preview">
                    <img src="images/photo19968946410.jpg" alt="تصویر محصول" id="editProductImagePreview">
                </div>
                
                <form id="editProductForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="editProductName">نام محصول</label>
                            <input type="text" id="editProductName" class="form-control" placeholder="نام محصول" required>
                        </div>
                        <div class="form-group">
                            <label for="editProductCategory">دسته‌بندی</label>
                            <select id="editProductCategory" class="form-control" required>
                                <option value="">انتخاب دسته</option>
                                <option value="1">قهوه‌ها</option>
                                <option value="2">چای‌ها</option>
                                <option value="3">نوشیدنی سرد</option>
                                <option value="4">دسر و شیرینی</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="editProductPrice">قیمت (تومان)</label>
                            <input type="text" id="editProductPrice" class="form-control" placeholder="قیمت" required>
                        </div>
                        <div class="form-group">
                            <label for="editProductOrder">ترتیب نمایش</label>
                            <input type="number" id="editProductOrder" class="form-control" value="1" min="1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="editProductDescription">توضیحات محصول</label>
                        <textarea id="editProductDescription" class="form-control" rows="3" placeholder="توضیح کامل درباره محصول..." required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>آپلود عکس جدید (اختیاری)</label>
                        <div class="image-upload" id="editImageUpload" style="padding: 15px;">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p style="font-size: 0.9rem;">برای تغییر عکس کلیک کنید</p>
                            <input type="file" id="editProductImage" accept="image/*" style="display: none;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="edit-modal-footer">
                <button type="button" class="btn btn-secondary" id="cancelEditProduct">انصراف</button>
                <button type="button" class="btn btn-primary" id="saveEditProduct">ذخیره تغییرات</button>
            </div>
        </div>
    </div>

    <script>
        // مدیریت آپلود عکس
        document.addEventListener('DOMContentLoaded', function() {
            // عناصر مربوط به آپلود عکس
            const imageUpload = document.getElementById('imageUpload');
            const productImageInput = document.getElementById('productImage');
            const imagePreviewContainer = document.getElementById('imagePreviewContainer');
            const imagePreview = document.getElementById('imagePreview');
            
            // کلیک روی منطقه آپلود
            if (imageUpload) {
                imageUpload.addEventListener('click', function(e) {
                    // اگر کلیک روی تصویر پیش‌نمایش بود، کاری نکن
                    if (e.target === imagePreview) return;
                    
                    // باز کردن پنجره انتخاب فایل
                    productImageInput.click();
                });
                
                // جلوگیری از رفتار پیش‌فرض کشیدن و رها کردن
                imageUpload.addEventListener('dragover', function(e) {
                    e.preventDefault();
                    this.style.borderColor = '#d4a762';
                    this.style.backgroundColor = 'rgba(212, 167, 98, 0.1)';
                });
                
                imageUpload.addEventListener('dragleave', function(e) {
                    e.preventDefault();
                    this.style.borderColor = '#e6d7c0';
                    this.style.backgroundColor = 'white';
                });
                
                // مدیریت رها کردن فایل
                imageUpload.addEventListener('drop', function(e) {
                    e.preventDefault();
                    this.style.borderColor = '#e6d7c0';
                    this.style.backgroundColor = 'white';
                    
                    if (e.dataTransfer.files.length > 0) {
                        handleImageFile(e.dataTransfer.files[0], imagePreview, imagePreviewContainer);
                    }
                });
            }
            
            // تغییر فایل انتخاب شده
            if (productImageInput) {
                productImageInput.addEventListener('change', function(e) {
                    if (this.files.length > 0) {
                        handleImageFile(this.files[0], imagePreview, imagePreviewContainer);
                    }
                });
            }
            
            // تابع مدیریت فایل تصویر
            function handleImageFile(file, previewElement, containerElement) {
                // بررسی نوع فایل
                if (!file.type.match('image.*')) {
                    showNotification('لطفاً یک فایل تصویری انتخاب کنید', 'error');
                    return;
                }
                
                // بررسی حجم فایل (حداکثر 2MB)
                if (file.size > 2 * 1024 * 1024) {
                    showNotification('حجم فایل نباید بیشتر از 2 مگابایت باشد', 'error');
                    return;
                }
                
                // خواندن فایل و نمایش پیش‌نمایش
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewElement.src = e.target.result;
                    containerElement.style.display = 'block';
                    showNotification('عکس با موفقیت آپلود شد', 'success');
                };
                reader.onerror = function() {
                    showNotification('خطا در خواندن فایل', 'error');
                };
                reader.readAsDataURL(file);
            }
            
            // مدیریت فرم محصول
            const productForm = document.getElementById('productForm');
            if (productForm) {
                productForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // گرفتن مقادیر فرم
                    const productName = document.getElementById('productName').value;
                    const productCategory = document.getElementById('productCategory').value;
                    const productPrice = document.getElementById('productPrice').value;
                    const productDescription = document.getElementById('productDescription').value;
                    
                    // اعتبارسنجی ساده
                    if (!productName || !productCategory || !productPrice || !productDescription) {
                        showNotification('لطفاً همه فیلدهای ضروری را پر کنید', 'error');
                        return;
                    }
                    
                    // نمایش پیام موفقیت
                    showNotification('محصول با موفقیت اضافه شد', 'success');
                    
                    // ریست فرم
                    this.reset();
                    document.getElementById('productOrder').value = 1;
                    imagePreviewContainer.style.display = 'none';
                    imagePreview.src = '';
                });
            }
            
            // مدیریت فرم دسته
            const categoryForm = document.getElementById('categoryForm');
            if (categoryForm) {
                categoryForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // گرفتن مقادیر فرم
                    const categoryName = document.getElementById('categoryName').value;
                    
                    // اعتبارسنجی ساده
                    if (!categoryName) {
                        showNotification('لطفاً نام دسته را وارد کنید', 'error');
                        return;
                    }
                    
                    // نمایش پیام موفقیت
                    showNotification('دسته با موفقیت اضافه شد', 'success');
                    
                    // ریست فرم
                    this.reset();
                    document.getElementById('categoryOrder').value = 1;
                });
            }
            
            // مدیریت مودال ویرایش دسته
            const editCategoryModal = document.getElementById('editCategoryModal');
            const editCategoryButtons = document.querySelectorAll('.edit-category-btn');
            const closeEditCategoryModal = document.getElementById('closeEditCategoryModal');
            const cancelEditCategory = document.getElementById('cancelEditCategory');
            const saveEditCategory = document.getElementById('saveEditCategory');
            
            // باز کردن مودال ویرایش دسته
            editCategoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const description = this.getAttribute('data-description');
                    const order = this.getAttribute('data-order');
                    
                    // پر کردن فرم با داده‌های فعلی
                    document.getElementById('editCategoryName').value = name;
                    document.getElementById('editCategoryDescription').value = description;
                    document.getElementById('editCategoryOrder').value = order;
                    
                    // نمایش مودال
                    editCategoryModal.classList.add('active');
                });
            });
            
            // بستن مودال ویرایش دسته
            function closeCategoryModal() {
                editCategoryModal.classList.remove('active');
            }
            
            if (closeEditCategoryModal) {
                closeEditCategoryModal.addEventListener('click', closeCategoryModal);
            }
            
            if (cancelEditCategory) {
                cancelEditCategory.addEventListener('click', closeCategoryModal);
            }
            
            // ذخیره تغییرات دسته (غیرفعال)
            if (saveEditCategory) {
                saveEditCategory.addEventListener('click', function() {
                    showNotification('امکان ذخیره تغییرات در این نسخه وجود ندارد', 'info');
                    closeCategoryModal();
                });
            }
            
            // مدیریت مودال ویرایش محصول
            const editProductModal = document.getElementById('editProductModal');
            const editProductButtons = document.querySelectorAll('.edit-product-btn');
            const closeEditProductModal = document.getElementById('closeEditProductModal');
            const cancelEditProduct = document.getElementById('cancelEditProduct');
            const saveEditProduct = document.getElementById('saveEditProduct');
            const editProductImageUpload = document.getElementById('editImageUpload');
            const editProductImageInput = document.getElementById('editProductImage');
            const editProductImagePreview = document.getElementById('editProductImagePreview');
            
            // باز کردن مودال ویرایش محصول
            editProductButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const name = this.getAttribute('data-name');
                    const category = this.getAttribute('data-category');
                    const price = this.getAttribute('data-price');
                    const description = this.getAttribute('data-description');
                    const order = this.getAttribute('data-order');
                    
                    // پر کردن فرم با داده‌های فعلی
                    document.getElementById('editProductName').value = name;
                    document.getElementById('editProductCategory').value = category;
                    document.getElementById('editProductPrice').value = price;
                    document.getElementById('editProductDescription').value = description;
                    document.getElementById('editProductOrder').value = order;
                    
                    // نمایش مودال
                    editProductModal.classList.add('active');
                });
            });
            
            // آپلود عکس در مودال ویرایش
            if (editProductImageUpload && editProductImageInput) {
                editProductImageUpload.addEventListener('click', function() {
                    editProductImageInput.click();
                });
                
                editProductImageInput.addEventListener('change', function(e) {
                    if (this.files.length > 0) {
                        handleImageFile(this.files[0], editProductImagePreview, editProductImagePreview.parentElement);
                    }
                });
            }
            
            // بستن مودال ویرایش محصول
            function closeProductModal() {
                editProductModal.classList.remove('active');
            }
            
            if (closeEditProductModal) {
                closeEditProductModal.addEventListener('click', closeProductModal);
            }
            
            if (cancelEditProduct) {
                cancelEditProduct.addEventListener('click', closeProductModal);
            }
            
            // ذخیره تغییرات محصول (غیرفعال)
            if (saveEditProduct) {
                saveEditProduct.addEventListener('click', function() {
                    showNotification('امکان ذخیره تغییرات در این نسخه وجود ندارد', 'info');
                    closeProductModal();
                });
            }
            
            // مدیریت دکمه‌های حذف
            const deleteButtons = document.querySelectorAll('.btn-danger');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productName = this.closest('tr').querySelector('strong')?.textContent || 'آیتم';
                    if (confirm(`آیا از حذف "${productName}" مطمئن هستید؟`)) {
                        showNotification(`${productName} با موفقیت حذف شد`, 'success');
                        // در یک نسخه واقعی، اینجا آیتم از لیست حذف می‌شد
                    }
                });
            });
            
            // تابع نمایش اعلان
            function showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = 'notification';
                notification.innerHTML = `
                    <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
                    <span>${message}</span>
                `;
                
                notification.style.backgroundColor = type === 'success' ? '#28a745' : 
                                                    type === 'error' ? '#dc3545' : 
                                                    type === 'info' ? '#17a2b8' : '#28a745';
                
                document.body.appendChild(notification);
                
                // نمایش انیمیشن
                setTimeout(() => {
                    notification.classList.add('show');
                }, 10);
                
                // حذف اعلان بعد از 3 ثانیه
                setTimeout(() => {
                    notification.classList.remove('show');
                    setTimeout(() => {
                        if (notification.parentNode) {
                            notification.parentNode.removeChild(notification);
                        }
                    }, 300);
                }, 3000);
            }
            
            // بستن مودال با کلیک خارج از آن
            document.addEventListener('click', function(e) {
                if (e.target === editCategoryModal) {
                    closeCategoryModal();
                }
                if (e.target === editProductModal) {
                    closeProductModal();
                }
            });
        });
    </script>
</body>
</html>