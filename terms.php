<?php
// terms.php
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - CloudMetrics AI</title>
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
        <h1 class="text-4xl md:text-5xl font-extrabold mb-8 text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Terms of Service</h1>
        <div class="prose prose-invert prose-indigo max-w-none text-slate-300 space-y-6">
            <p>Last updated: <?php echo date('F d, Y'); ?></p>
            
            <h2 class="text-2xl font-bold text-white mt-10 mb-4">1. Acceptance of Terms</h2>
            <p>By accessing or using CloudMetrics AI, you agree to be bound by these Terms. If you disagree with any part of the terms, then you may not access the Service.</p>

            <h2 class="text-2xl font-bold text-white mt-10 mb-4">2. Subscription and Billing</h2>
            <p>Our service is billed on a subscription basis ("Subscription(s)"). You will be billed in advance on a recurring and periodic basis (such as daily, weekly, monthly or annually), depending on the type of Subscription plan you select when purchasing the Subscription.</p>

            <h2 class="text-2xl font-bold text-white mt-10 mb-4">3. Prohibited Uses</h2>
            <p>You may use Service only for lawful purposes and in accordance with Terms. You agree not to use Service in any way that violates any applicable national or international law or regulation.</p>
            
            <h2 class="text-2xl font-bold text-white mt-10 mb-4">4. Governing Law</h2>
            <p>These Terms shall be governed and construed in accordance with the laws of the jurisdiction in which our company is established, without regard to its conflict of law provisions.</p>
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
                <a href="privacy.php" class="hover:text-white transition-colors">Privacy Policy</a>
                <a href="terms.php" class="text-white transition-colors font-medium">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
