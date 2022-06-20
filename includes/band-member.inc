<section class="bg-white">

    <div class="pt-16 pb-16 pl-4 pr-4 mx-auto ml-auto mr-auto bg-top bg-cover max-w-7xl md:px-24 lg:px-12 lg:py-20">
      <div class="mb-10 ml-auto mr-auto bg-top bg-cover max-w-7xl md:mx-auto sm:text-center lg:max-w-2xl md:mb-16">
          <!-- <p class="inline-block px-3 py-px mb-3 text-sm font-semibold tracking-wider text-white uppercase rounded-full bg-green-600">Our Crew</p> -->
          <div class="mb-6 ml-auto mr-auto font-sans tracking-tight text-gray-900 bg-top bg-cover max-w-7xl md:mx-auto">
              <p class="inline max-w-lg text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto"><?=$sec->section_title?></p>
          </div>
          <p class="text-base text-gray-700 md:text-lg"><?=$sec->section_subtitle?></p>
      </div>
      <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
          <?php foreach ($sec->band_member as $member): ?>
            
            <div>
              <div class="relative overflow-hidden rounded-md shadow-lg group">
                  <img class="object-cover w-full h-72 xl:h-80" src="<?=$member->image->url?>" alt="Band Member">
                  <div class="absolute inset-0 px-6 py-4 text-center duration-300 opacity-0 group-hover:opacity-100">
                      <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-500 opacity-60 to-purple-600"></div>
                      <div class="relative flex flex-col items-center justify-center w-full h-full">
                          <p class="mb-1 text-lg font-bold text-white"><?=$member->section_title?></p>
                          <p class="mb-4 text-xs text-blue-50"><?=$member->section_subtitle?></p>
                          <div class="mb-4 text-xs tracking-wide text-blue-50">
                            <?=$member->body?>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

          <?php endforeach; ?>
            
            
      </div>
    </div>
  </section>
