<!-- register.php -->
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام در Texlog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Vazirmatn', sans-serif;
            background-color: #090d16;
        }
    </style>
</head>

<body class="text-slate-200 flex items-center justify-center min-h-screen px-4 py-12">

    <div class="max-w-md w-full">
        <!-- Logo Area -->
        <div class="text-center mb-8">
            <a href="/TexLog" class="text-3xl font-bold tracking-tight text-white flex items-center justify-center gap-2">
                <span class="text-indigo-500 font-mono">&lt;</span>
                Texlog
                <span class="text-indigo-500 font-mono">/&gt;</span>
            </a>
            <p class="text-slate-400 mt-2 text-sm">یک حساب جدید بسازید و شروع کنید</p>
        </div>

        <!-- Register Card -->
        <div class="bg-[#0f172a]/50 border border-slate-800/60 backdrop-blur-xl p-8 rounded-2xl shadow-2xl">
            <?php if (isset($error) && !empty($error)): ?>
                <div class="mb-6 p-4 bg-red-500/10 border border-red-500/50 rounded-xl flex items-center gap-3 text-red-400 text-sm animate-pulse">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                    <span><?php echo $error; ?></span>
                </div>
            <?php endif; ?>
            <form action="/TexLog/Register/store" method="POST" class="space-y-5">
                <!-- Full Name -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">نام و نام خانوادگی</label>
                    <input type="text" name="fullname" required 
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="نام شما">
                </div>

                <!-- Username -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">نام کاربری</label>
                    <input type="text" name="username" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="username">
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">ایمیل</label>
                    <input type="email" name="email" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="example@mail.com">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">رمز عبور</label>
                    <input type="password" name="password" minlength="8" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="رمز عبور (حداقل ۸ کاراکتر)">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2">تایید رمز عبور</label>
                    <input type="password" name="password_confrim" minlength="8" required
                        class="w-full bg-slate-900/50 border border-slate-700 rounded-xl px-4 py-3 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500 transition-all"
                        placeholder="رمز عبور (حداقل ۸ کاراکتر)">
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 rounded-xl transition-all duration-200 shadow-lg shadow-indigo-500/20 mt-4">
                    ایجاد حساب کاربری
                </button>
            </form>

            <!-- Login Link -->
            <p class="text-center text-sm text-slate-400 mt-8">
                قبلاً عضو شده‌اید؟
                <a href="Login" class="text-indigo-400 hover:text-indigo-300 font-medium">وارد شوید</a>
            </p>
        </div>
    </div>

</body>

</html>