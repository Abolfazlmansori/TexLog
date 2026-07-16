<?php
/**
 * @var array $postsone  
 * @var array $writer  
 * 
 *

 */
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="h-full">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'عنوان نوشته' ?> | Texlog</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://googleapis.com" rel="stylesheet">
  <style>
    body {
      font-family: 'Fira Code', 'Tahoma', sans-serif;
    }
  </style>
</head>

<body class="bg-[#090d16] text-slate-200 h-full selection:bg-indigo-500/30 selection:text-indigo-200">

  <?php include './view/Front/sections/header.php'; ?>


  <main class="max-w-2xl mx-auto px-6 py-16">

    <div class="flex justify-between items-center mb-10">
      <!-- لینک بازگشت -->
      <a href="/TexLog" class="flex items-center gap-2 text-sm text-slate-400 hover:text-white transition-colors">
        <span>بازگشت به نوشته‌ها</span>
      </a>

      <?php
      $writer_id = (is_array($writer) && isset($writer['id'])) ? $writer['id'] : null;
      $post_id   = (is_array($postsone) && isset($postsone['id'])) ? $postsone['id'] : null;
      $logged_in_user_id = $_SESSION['user']['id'] ?? null;
      $user_role = $_SESSION['user']['role'] ?? 'user';
      if ($user_role === 'admin' || ($logged_in_user_id !== null && $logged_in_user_id == $writer_id)): ?>
        <a href="/TexLog/post/edit/<?= $post_id ?>"
          class="inline-flex items-center gap-2 px-4 py-2 bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-semibold rounded-lg transition-all shadow-lg shadow-indigo-500/20">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
          </svg>
          ویرایش مقاله
        </a>

      <?php endif; ?>
    </div>


    <article>

      <header class="mb-10 pb-6 border-b border-slate-800/40">
        <div class="flex flex-wrap items-center gap-3 text-xs text-slate-500 mb-4 font-mono">
          <time datetime="966"><?= \Morilog\Jalali\Jalalian::fromDateTime($postsone['created_at'])->format('%d %B، %Y') ?? '۱۱ تیر ۱۴۰۵' ?? '' ?></time>
          <span>•</span>
          <span class="text-indigo-400/80 bg-indigo-500/10 px-2 py-0.5 rounded"><?= $postsone['category'] ?? 'برنامه نویسی' ?></span>
          <span>•</span>
          <span class="text-slate-400"><?= $postsone['read_time'] ?? '۱۲' ?> دقیقه مطالعه</span>
          <span class="text-indigo-400/80 bg-indigo-500/10 px-2 py-0.5 rounded"> نویسنده: <?= $writer['fullname'] ?? 'محدثه مولایی' ?></span>
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