<?php
// privacy.php
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - CloudMetrics AI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        slate: { 850: '#151e2e', 900: '#0f172a', 950: '#020617' },
                        indigo: { 500: '#6366f1', 600: '#4f46e5', 700: '#4338ca' }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style> body { font-family: 'Inter', sans-serif; } </style>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-950 text-slate-100 antialiased selection:bg-indigo-500 selection:text-white">

    <nav class="w-full border-b border-slate-800 bg-slate-950/80 backdrop-blur-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="index.php" class="flex items-center gap-2">
                <div class="w-8 h-8 rounded bg-indigo-600 flex items-center justify-center font-bold text-white shadow-lg shadow-indigo-600/30">
                    <i class="fa-solid fa-chart-line"></i>
                </div>
                <span class="font-extrabold text-xl tracking-tight">CloudMetrics AI</span>
            </a>
            <div class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-300">
                <a href="index.php" class="hover:text-white transition-colors">Home</a>
            </div>
            <div>
                <a href="index.php#pricing" class="bg-indigo-600 hover:bg-indigo-500 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition-all shadow-lg shadow-indigo-600/20">Get Started Now</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-20 relative z-10">
        <h1 class="text-4xl md:text-5xl font-extrabold mb-8 text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Privacy Policy</h1>
        <div class="prose prose-invert prose-indigo max-w-none text-slate-300 space-y-6">
            <p>Last updated: <?php echo date('F d, Y'); ?></p>
            
            <h2 class="text-2xl font-bold text-white mt-10 mb-4">1. Information We Collect</h2>
            <p>We collect information you provide directly to us, such as when you create or modify your account, request on-demand services, contact customer support, or otherwise communicate with us. This information may include: name, email, phone number, postal address, profile picture, payment method, and other information you choose to provide.</p>

            <h2 class="text-2xl font-bold text-white mt-10 mb-4">2. Advertising & Cookies</h2>
            <p>We use Google AdSense and other third-party advertising partners to serve ads on our site. These companies may use cookies, web beacons, and other tracking technologies to collect information about your interactions with our website and other websites to provide targeted advertisements.</p>
            <p>Specifically, Google uses the DoubleClick cookie to serve ads based on your prior visits to our site and other sites on the internet. You may opt out of the use of the DoubleClick cookie for interest-based advertising by visiting the Google Ads Settings.</p>

            <h2 class="text-2xl font-bold text-white mt-10 mb-4">3. Data Security</h2>
            <p>We take reasonable measures to help protect information about you from loss, theft, misuse and unauthorized access, disclosure, alteration and destruction.</p>
            
            <h2 class="text-2xl font-bold text-white mt-10 mb-4">4. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:privacy@cloudmetrics.ai" class="text-indigo-400 hover:underline">privacy@cloudmetrics.ai</a>.</p>
        </div>
    </main>

    <footer class="border-t border-slate-800 bg-slate-950 py-12 mt-20">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 rounded bg-indigo-600 flex items-center justify-center font-bold text-white text-xs">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <span class="font-bold text-lg">CloudMetrics AI</span>
                </div>
                <p class="text-slate-500 text-sm">&copy; 2026 CloudMetrics AI. All rights reserved.</p>
            </div>
            <div class="flex flex-wrap gap-6 text-sm text-slate-400">
                <a href="about.php" class="hover:text-white transition-colors">About Us</a>
                <a href="contact.php" class="hover:text-white transition-colors">Contact</a>
                <a href="privacy.php" class="text-white transition-colors font-medium">Privacy Policy</a>
                <a href="terms.php" class="hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
