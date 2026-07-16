<?php  ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Texlog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Fira Code', 'Tahoma', sans-serif; }
  </style>
</head>
<body class="bg-[#090d16] text-slate-200 h-full selection:bg-indigo-500/30 selection:text-indigo-200">

    <?php include './view/Front/sections/header.php'; ?>

  <main class="max-w-3xl mx-auto px-6 py-16">
    
    <section class="mb-16 border-b border-slate-800/40 pb-10">
      <h1 class="text-3xl font-extrabold text-white mb-4">به تفکرات متنی من خوش آمدید</h1>
      <p class="text-slate-400 text-sm leading-relaxed max-w-xl">
        در وبلاگ <span class="text-indigo-400 font-semibold">Texlog</span>، یادداشت‌ها، چالش‌های برنامه‌نویسی بک‌اند و هر آنچه در دنیای تکنولوژی یاد می‌گیرم را به ساده‌ترین شکل ممکن یادداشت می‌کنم.
      </p>
    </section>

    <section class="space-y-10">
<div class="flex items-center justify-between mb-8">
    <!-- بخش عنوان که خودتان نوشتید (با کمی تغییر برای هماهنگی) -->
    <h2 class="text-sm font-bold tracking-[0.2em] text-slate-500 uppercase flex items-center gap-3">
        <span class="w-8 h-[1px] bg-slate-800"></span>
        آخرین نوشته‌ها
    </h2>

    <!-- بخش مرتب‌سازی -->
    <div class="flex items-center gap-2">
        <span class="text-xs text-slate-400 mr-2">مرتب سازی:</span>
        <a href="/TexLog/posts/newest" class="text-xs font-medium text-slate-600 hover:text-slate-900 transition-colors duration-300">جدیدترین</a>
        <span class="text-slate-300">|</span>
        <a href="/TexLog/posts/oldest" class="text-xs font-medium text-slate-600 hover:text-slate-900 transition-colors duration-300">قدیمی‌ترین</a>
    </div>
</div>


      <?php if (!empty($posts)): ?>
        <?php foreach($posts as $post): ?>
          <article class="post-card group relative flex flex-col items-start bg-slate-900/30 border border-slate-800/50 rounded-3xl p-8 hover:border-indigo-500/30 hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center gap-3 text-xs text-slate-500 mb-4 font-mono">
              <time datetime="966"><?= \Morilog\Jalali\Jalalian::fromDateTime($post['created_at'])->format('%d %B، %Y') ?? '۱۱ تیر ۱۴۰۵' ?></time>
              <span class="text-slate-700">|</span>
              <span class="text-indigo-400/90 bg-indigo-500/10 px-2.5 py-0.5 rounded-lg border border-indigo-500/10">
                <?= htmlspecialchars($post['category'] ?? 'General') ?>
              </span>
            </div>
            <h3 class="text-2xl font-bold text-slate-100 group-hover:text-white transition-colors mb-4">
              <a href="/TexLog/post/<?= $post['id'] ?>">
                <?= htmlspecialchars($post['title']) ?>
              </a>
            </h3>
            <p class="text-slate-400 text-sm leading-relaxed mb-6 line-clamp-3">
              <?= htmlspecialchars($post['content']) ?>
            </p>
            <a href="/TexLog/post/<?= $post['id'] ?>" class="text-sm font-semibold text-indigo-400 hover:text-indigo-300 flex items-center gap-2 group/link mt-auto">
              <span>مطالعه مطلب</span>
              <span class="inline-block transition-transform group-hover/link:-translate-x-2 font-mono">←</span>
            </a>
          </article>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Empty State -->
        <div class="text-center py-20 border-2 border-dashed border-slate-800 rounded-3xl">
          <p class="text-slate-500">هنوز هیچ نوشته‌ای منتشر نشده است.</p>
        </div>
      <?php endif; ?>

    </section>


    </section>
  </main>

    <?php include './view/Front/sections/footer.php'; ?>

</body>
</html>




