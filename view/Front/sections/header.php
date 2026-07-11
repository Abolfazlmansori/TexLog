<header class="border-b border-slate-800/60 bg-[#090d16]/70 backdrop-blur-md sticky top-0 z-50">
  <div class="max-w-4xl mx-auto px-6 h-16 flex items-center justify-between">
    <!-- Logo -->
    <a href="/TexLog" class="text-xl font-bold tracking-tight text-white flex items-center gap-2">
      <span class="text-indigo-500 font-mono">&lt;</span>
      Texlog
      <span class="text-indigo-500 font-mono">/&gt;</span>
    </a>

    <!-- Menu Items -->
    <nav class="flex items-center gap-8 text-sm font-medium text-slate-400">
      <a href="/TexLog" class="transition-all duration-200 hover:text-indigo-400">صفحه اصلی</a>
      <a href="/about" class="transition-all duration-200 hover:text-indigo-400">درباره وبلاگ</a>
      <a href="/TexLog/post/create" class="transition-all duration-200 hover:text-indigo-400">ایجاد پست</a>
    </nav>

    <!-- Auth Section -->
    <div class="flex items-center gap-4 text-sm font-medium">
      <!-- <?php if (isset($_SESSION['user'])): ?> -->
        <!-- وقتی کاربر لاگین است -->
        <div class="flex items-center gap-3 text-white">
            <span class="text-slate-300">سلام، <?php echo htmlspecialchars($_SESSION['user']['username']); ?></span>
            <a href="/logout" class="text-red-400 hover:text-red-300 transition-colors">خروج</a>
        </div>
      <!-- <?php else: ?> -->
        <!-- وقتی کاربر لاگین نیست -->
        <a href="Login" class="text-slate-400 hover:text-indigo-400 transition-all duration-200">ورود</a>
        <a href="Register" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-500 tranition-all duration-200">ثبت نام</a>
      <!-- <?php endif; ?> -->
    </div>
  </div>
</header>
