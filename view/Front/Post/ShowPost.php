<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'عنوان نوشته' ?> | Texlog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body { font-family: 'Fira Code', 'Tahoma', sans-serif; }
  </style>
</head>
<body class="bg-[#090d16] text-slate-200 h-full selection:bg-indigo-500/30 selection:text-indigo-200">

    <?php include './view/Front/sections/header.php'; ?>


  <main class="max-w-2xl mx-auto px-6 py-16">
    
    <div class="mb-8">
      <a href="/TexLog/" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-indigo-400 transition-colors group">
        <span class="inline-block transition-transform group-hover:translate-x-1 font-mono">&rarr;</span>
        بازگشت به نوشته‌ها
      </a>
    </div>

    <article>
      <header class="mb-10 pb-6 border-b border-slate-800/40">
        <div class="flex flex-wrap items-center gap-3 text-xs text-slate-500 mb-4 font-mono">
              <time datetime="966"><?= \Morilog\Jalali\Jalalian::fromDateTime($postsone['created_at'])->format('%d %B، %Y') ?? '۱۱ تیر ۱۴۰۵' ?></time>
          <span>•</span>
          <span class="text-indigo-400/80 bg-indigo-500/10 px-2 py-0.5 rounded"><?= $postsone['category'] ?? 'برنامه نویسی' ?></span>
          <span>•</span>
          <span class="text-slate-400"><?= $postsone['read_time'] ?? '۱۲' ?> دقیقه مطالعه</span>
        </div>
        
        <h1 class="text-3xl font-extrabold text-white leading-tight mb-4">
          <?= $postsone['title'] ?? 'ساخت کنترلر در لاراول' ?>
        </h1>
      </header>

      <div class="text-slate-300 text-sm leading-8 space-y-6 text-justify whitespace-pre-line">
        <?= $postsone['content'] ?? 'برای ساخت کنتلر از دستور php artisan make:controller ....'  ?>
      </div>
    </article>


  </main>

    <?php include './view/Front/sections/footer.php'; ?>


</body>
</html>
