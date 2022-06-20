<section class="bg-yellow-400 relative">
      <div class="bg-cover absolute inset-0 z-0 opacity-10 bg-fixed" xstyle="background-image: url('https://iiimages.unsplash.com/photo-1501059104508-e158516511cd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2373&q=80')"></div>
      <div class="relative z-10">

      <div class="px-10 pt-20 mx-auto max-w-7xl">
        <div class="px-10 mb-8 space-y-5 lg:px-0 lg:text-center lg:mb-16 text-white">
          <h2 class="text-4xl font-bold sm:text-5xl"><?=$sec->section_title?></h2>
          <p class="text-lg w-ful sm:text-xl">
            <?=$sec->section_subtitle?>
          </p>
        </div>

        <?php if ($sec->show->first): ?>
          <?php foreach ($sec->show as $show): ?>

            <div class="flex flex-col">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="overflow-hidden">
                    <table class="min-w-full">
                      <thead class="border-b border-yellow-800">
                        <tr>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            <strong>Date</strong>
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            <strong>Location</strong>
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            <strong>Description</strong>
                          </th>
                          <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                            <strong>More Info</strong>
                          </th>
                        </tr>
                      </thead>
                      <tbody class="text-black">
                        <tr class="border-b border-yellow-800">
                          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium"><?=$show->show_date?></td>
                          <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                            <?=$show->show_location?>
                          </td>
                          <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                            <?=$show->body?>
                          </td>
                          <td class="text-sm font-light px-6 py-4 whitespace-nowrap">
                            <a class="text-red-800" href="<?=$show->show_link?>" target="_blank">More Info</a>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-xl text-center">No upcoming shows at this time. Check back soon!</p>
        <?php endif; ?>

        <div class="pt-16 pb-16 pl-4 pr-4 mx-auto ml-auto mr-auto bg-top bg-cover max-w-4xl md:px-24 lg:px-12 lg:py-20">
          <div class="flex">
            <div class="border-white border-8 inline-block shadow-2xl w-full">
              <iframe class="w-full h-92" src="https://www.youtube.com/embed/Tz038FlXX-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
  
  
          
          <div class="flex mt-16">
            <div class="border-white border-8 inline-block shadow-2xl w-full">
              <iframe class="w-full h-92" src="https://www.youtube.com/embed/7cOS97NAm_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          
          
          <div class="flex mt-16">
            <div class="border-white border-8 inline-block shadow-2xl w-full">
              <iframe class="w-full h-92" src="https://www.youtube.com/embed/md1mK_KiOB8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

  </section>
