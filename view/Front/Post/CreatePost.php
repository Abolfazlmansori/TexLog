<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ایجاد نوشته جدید | Texlog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body { font-family: 'Fira Code', 'Tahoma', sans-serif; }
  </style>
</head>
<body class="bg-[#090d16] text-slate-200 h-full selection:bg-indigo-500/30 selection:text-indigo-200">

    <?php include './view/Front/sections/header.php'; ?>

  <main class="max-w-2xl mx-auto px-6 py-16">
    
    <div class="mb-10 pb-4 border-b border-slate-800/40">
      <h1 class="text-2xl font-extrabold text-white mb-2">نوشتن مقاله جدید</h1>
      <p class="text-slate-400 text-xs">یک پست جدید برای وبلاگ متنی خود منتشر کنید.</p>
    </div>

    <form action="store" method="POST" class="space-y-6">
      <div>
        <label for="title" class="block text-xs font-semibold text-slate-400 mb-2">عنوان مقاله</label>
        <input type="text" id="title" name="title" required placeholder="مثال: آشنایی با اصول SOLID در برنامه‌نویسی" 
          class="w-full bg-slate-900/40 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <label for="category" class="block text-xs font-semibold text-slate-400 mb-2">دسته‌بندی (تگ)</label>
          <input type="text" id="category" name="category" required placeholder="مثال: PHP خام" 
            class="w-full bg-slate-900/40 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
        </div>
        <div>
          <label for="read_time" class="block text-xs font-semibold text-slate-400 mb-2">زمان مطالعه (دقیقه)</label>
          <input type="number" id="read_time" name="read_time" min="1" required placeholder="مثال: ۵" 
            class="w-full bg-slate-900/40 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all">
        </div>
      </div>

      <div>
        <label for="content" class="block text-xs font-semibold text-slate-400 mb-2">متن اصلی مقاله</label>
        <textarea id="content" name="content" rows="10" required placeholder="محتوای متنی وبلاگ خود را اینجا بنویسید..." 
          class="w-full bg-slate-900/40 border border-slate-800/80 rounded-xl px-4 py-3 text-sm text-slate-100 placeholder-slate-600 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all resize-y"></textarea>
      </div>

      <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800/40">
        <a href="/TexLog" class="px-4 py-2.5 rounded-xl text-xs font-medium text-slate-400 hover:text-white bg-slate-900/20 border border-slate-800/40 hover:border-slate-700/60 transition-all">انصراف</a>
        <button type="submit" class="px-5 py-2.5 rounded-xl text-xs font-semibold text-white bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 shadow-lg shadow-indigo-600/10 transition-all">انتشار نوشته</button>
      </div>

    </form>

  </main>

    <?php include './view/Front/sections/footer.php'; ?>


</body>
</html>
