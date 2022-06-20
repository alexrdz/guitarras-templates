<section class="w-full pb-20 bg-gray-50">
  <div class="px-10 pt-20 mx-auto max-w-7xl">
    <div class="px-10 mb-8 space-y-5 lg:px-0 lg:text-center lg:mb-16">
      <h2 class="text-4xl font-bold sm:text-5xl"><?=$sec->section_title?></h2>
      <p class="text-lg text-gray-600 w-ful sm:text-xl">
        <?=$sec->section_subtitle?>
      </p>
    </div>

    <div class="grid overflow-hidden lg:rounded-xl">
      <?php foreach ($sec->video_content as $cont): ?>
        <?php if ($cont->text_left): ?>

          <div class="grid items-center lg:grid-cols-2">
            <div
              class="video-section-content flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0"
            >
              <?=$cont->body?>
            </div>
            <div class="overflow-hidden bg-gray-100 h-96">
              <iframe
                class="w-full h-92"
                src="<?=$cont->youtube_url?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <!-- <img src="https://i.ytimg.com/vi/Tz038FlXX-k/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDrYniOkKEJ1F4ofs4rrEIaQV8dAg" class="object-cover w-full h-full" alt=""> -->
            </div>
          </div>

        <?php else: ?>

          <div class="grid items-center lg:grid-cols-2">
            <div class="order-last overflow-hidden bg-gray-100 h-96 lg:order-first">
              <iframe
                class="w-full h-92"
                src="<?=$cont->youtube_url?>"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <!-- <img src="https://i.ytimg.com/vi/DtYD-rQvsGA/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDgPN4ReQfWy2iYxhmFvdfDodz-ow" class="object-cover w-full h-full" alt=""> -->
            </div>
            <div
              class="video-section-content flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0"
            >
              <?=$cont->body?>
            </div>
          </div>

        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
