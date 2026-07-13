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
      <?php if (isset($_SESSION['user'])): ?>
        <!-- وقتی کاربر لاگین است: بخش پروفایل با منوی کشویی -->
        <div class="relative" id="user-menu">
          <!-- دکمه پروفایل (آواتار + نام) -->
          <button type="button" onclick="toggleDropdown()" class="flex items-center gap-3 text-white hover:text-indigo-300 transition-all duration-200 focus:outline-none">
            <div class="flex flex-col items-end">
              <span class="text-xs text-slate-400 leading-none">خوش آمدید</span>
              <span class="text-sm font-semibold"><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span>
            </div>
            <!-- آواتار دایره‌ای -->
            <div class="h-9 w-9 rounded-full bg-indigo-500 flex items-center justify-center text-white border-2 border-indigo-400 shadow-sm">
              <?php
              // نمایش حرف اول نام کاربر در آواتار
              $firstLetter = mb_substr($_SESSION['user']['username'], 0, 1, 'UTF-8');
              echo $firstLetter;
              ?>
            </div>
            <!-- فلش کوچک پایین -->
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>

          <!-- منوی کشویی (Dropdown) -->
          <div id="dropdown-menu" class="hidden absolute left-0 mt-2 w-48 rounded-xl bg-white py-2 shadow-xl ring-1 ring-black ring-opacity-5 z-50 transition-all duration-300">
            <!-- لینک پنل کاربری -->
            <a href="/Dashboard" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
              </svg>
              پنل کاربری
            </a>
            <!-- لینک تنظیمات -->
            <a href="/Settings" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              تنظیمات
            </a>

            <hr class="my-1 border-slate-100">

            <!-- لینک خروج -->
            <a href="Logout" class="flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
              </svg>
              خروج از حساب
            </a>
          </div>
        </div>

      <?php else: ?>
        <div class="flex items-center gap-3">
          <a href="Login" class="text-slate-400 hover:text-indigo-400 transition-all duration-200">ورود</a>
          <a href="Register" class="bg-indigo-600 text-white px-5 py-2 rounded-xl hover:bg-indigo-500 shadow-lg shadow-indigo-500/30 transition-all duration-200">ثبت نام</a>
        </div>
      <?php endif; ?>
    </div>
    <script>
      function toggleDropdown() {
        const menu = document.getElementById('dropdown-menu');
        menu.classList.toggle('hidden');
      }
      window.addEventListener('click', function(e) {
        const menuContainer = document.getElementById('user-menu');
        const menu = document.getElementById('dropdown-menu');
        if (menuContainer && !menuContainer.contains(e.target)) {
          menu.classList.add('hidden');
        }
      });
    </script>
  </div>
</header>