<!-- login.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به Texlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Vazirmatn', sans-serif; background-color: #090d16; }
    </style>
</head>
<body class="text-slate-200 flex items-center justify-center min-h-screen px-4">

    <div class="max-w-md w-full">
        <!-- Logo Area -->
        <div class="text-center mb-8">
            <a href="/TexLog" class="text-3xl font-bold tracking-tight text-white flex items-center justify-center gap-2">
                <span class="text-indigo-500 font-mono">&lt;</span>
                Texlog
                <span class="text-indigo-500 font-mono">/&gt;</span>
            </a>
            <p class="text-slate-400 mt-2 text-sm">خوش آمدید! لطفا وارد حساب خود شوید</p>
        </div>

        <!-- Login Card -->
        <div class="bg-[#0f172a]/50 border border-slate-800/60 backdrop-blur-xl p-8 rounded-2xl shadow-2xl">
            <form action="/login" method="POST" class="space-y-6">
                <!-- Username Field -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">نام کاربری یا ایمیل</label>
                    <input type="text" name="username" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="username_or_email">
                </div>

                <!-- Password Field -->
                <div>
                    <div class="flex justify-between mb-2">
                        <label class="text-sm font-medium text-slate-400">رمز عبور</label>
                        <a href="#" class="text-xs text-indigo-400 hover:text-indigo-300">فراموشی رمز؟</a>
                    </div>
                    <input type="password" name="password" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="••••••••">
                </div>

                <!-- Submit Button -->
                <button type="submit" 
                    class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 rounded-xl transition-all duration-200 shadow-lg shadow-indigo-500/20">
                    ورود به سیستم
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-slate-800"></div></div>
                <div class="relative flex justify-center text-xs uppercase"><span class="bg-[#0f172a] px-2 text-slate-500">یا</span></div>
            </div>

            <!-- Register Link -->
            <p class="text-center text-sm text-slate-400">
                هنوز عضو نشده‌اید؟ 
                <a href="Register" class="text-indigo-400 hover:text-indigo-300 font-medium">ساخت حساب کاربری</a>
            </p>
        </div>
    </div>

</body>
</html>
