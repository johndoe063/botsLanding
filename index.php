<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>منصة المواقع العربية</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .mobile-frame {
            width: 300px;
            height: 600px;
            border: 12px solid #1a1a1a;
            border-radius: 40px;
            margin: 0 auto;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .mobile-screen {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .telegram-embed {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Cards Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Card -->
            <div class="bg-white rounded-2xl shadow-lg p-6">
                <!-- Title & Description -->
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">موقع الدفع الإلكتروني</h2>
                    <p class="text-gray-600 text-sm">منصة عربية متكاملة لإدارة المدفوعات الإلكترونية بسهولة وأمان</p>
                </div>

                <!-- Vertical Mobile Screenshot -->
                <div class="mobile-frame mb-6">
                    <img src="your-vertical-screenshot.jpg" 
                         alt="موقع الدفع الإلكتروني"
                         class="mobile-screen"
                         loading="lazy">
                </div>

                <!-- Buttons -->
                <div class="flex flex-col md:flex-row gap-4">
                    <a href="#" class="w-full py-3 px-6 bg-blue-600 hover:bg-blue-700 text-white rounded-lg flex items-center justify-center gap-2 transition-colors">
                        <i class="fas fa-external-link-alt"></i>
                        زيارة الموقع
                    </a>
                    <button class="w-full py-3 px-6 bg-gray-100 hover:bg-gray-200 text-gray-700 rounded-lg flex items-center justify-center gap-2 transition-colors">
                        <i class="fas fa-video"></i>
                        شرح الاستخدام
                    </button>
                </div>
            </div>

            <!-- Repeat other cards -->
        </div>

        <!-- Telegram Section -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">قناة التليجرام الأخيرة</h2>
            <div class="telegram-embed">
                <!-- Telegram Widget -->
                <script async src="https://telegram.org/js/telegram-widget.js?22" 
                        data-telegram-post="channelname/123" 
                        data-width="100%" 
                        data-dark="false"
                        data-userpic="false"
                        data-height="400"></script>
            </div>
        </div>
    </div>

    <script>
        // Telegram Widget Reload
        function reloadTelegramWidget() {
            const widget = document.querySelector('.telegram-embed iframe');
            if(widget) {
                widget.src = widget.src;
            }
        }
        
        // Refresh every 5 minutes
        setInterval(reloadTelegramWidget, 300000);
    </script>
</body>
</html>
