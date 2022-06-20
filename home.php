<?php namespace ProcessWire;

// Template file for “home” template used by the homepage
$home = $pages->get('/'); // homepage

?>

<main id="content">
  
  <header class="header-content relative overflow-hidden">


    <!-- Background Layer -->
    <div class="absolute z-10 w-full h-full bg-gradient-to-tr from-green-600 via-green-900 to-black">
        <div class="absolute right-0 w-32 h-full -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
        <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
            <div class="relative z-20 flex items-center justify-between">
                <div>
                  <h1>
                    <a href="#_" class="text-lg font-semibold text-white md:text-xl">
                      Guitarras ATM
                    </a>
                  </h1>
                  <?php echo $home->children ->implode(" / ", "<a href='{url}' class='text-lg font-semibold text-white md:text-xl'>{title}</a>"); ?>
                </div>
    
                <!-- Mobile menu button -->
                <div @click="mobile = !mobile" class="flex md:hidden">
                    <button type="button" class="text-gray-200 hover:text-gray-100 focus:outline-none focus:text-gray-100" aria-label="toggle menu">
                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </div>



      <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
          <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
              <h1 class="text-5xl font-bold text-white lg:text-6xl xl:text-7xl"> <?=$home->title; ?> </h1>
              <div class="text-base text-blue-200 lg:text-xl"> <?=$home->body;?></div>
          </div>
          <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2 border-white border-8">
            <iframe width="560" height="315" src="<?=$home->youtube_url?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>

      <div class="absolute bottom-0 left-0 z-20 w-full h-full overflow-x-hidden opacity-50 bg-gradient-to-b from-transparent via-transparent to-black"></div>
  </header>


  <?php foreach ($page->section as $sec): ?>
    <?php 
    
      include './includes/separator.inc'; 
      
      if ($sec->section_name === 'videos') {
        include './includes/videos.inc'; 
      }

      if ($sec->section_name === 'shows') {
        include './includes/shows.inc'; 
      }
      
      if ($sec->section_name === 'band') {
        include './includes/band-member.inc'; 
      }
    
    
    ?>
    






  <?php endforeach; ?>

  <section class="pb-20 bg-gray-50">
    <div class="flex">
      <div class="flex-1 h-1.5 bg-green-400"></div>
      <div class="flex-1 h-1.5 bg-red-500"></div>
      <div class="flex-1 h-1.5 bg-yellow-400"></div>
      <div class="flex-1 h-1.5 bg-indigo-500"></div>
      <div class="flex-1 h-1.5 bg-pink-400"></div>
    </div>
    
    <div class="px-10 pt-20 mx-auto max-w-7xl">
        <div class="flex flex-wrap items-center justify-center">
            <div class="max-w-sm mb-16 lg:mb-0 lg:max-w-2xl lg:w-1/2 lg:px-4">
                <a class="inline-block mb-6 text-3xl font-bold leading-none" href="#">
                    <svg class="w-auto h-12" viewBox="0 0 73 49" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M46.8676 24C46.8676 36.4264 36.794 46.5 24.3676 46.5C11.9413 46.5 1.86765 36.4264 1.86765 24C1.86765 11.5736 11.9413 1.5 24.3676 1.5C36.794 1.5 46.8676 11.5736 46.8676 24Z" class="ccustom" fill="#68DBFF"></path> <path d="M71.1324 24C71.1324 36.4264 61.1574 46.5 48.8529 46.5C36.5484 46.5 26.5735 36.4264 26.5735 24C26.5735 11.5736 36.5484 1.5 48.8529 1.5C61.1574 1.5 71.1324 11.5736 71.1324 24Z" class="ccompli1" fill="#FF7917"></path> <path d="M36.6705 42.8416C42.8109 38.8239 46.8676 31.8858 46.8676 24C46.8676 16.1144 42.8109 9.17614 36.6705 5.15854C30.5904 9.17614 26.5735 16.1144 26.5735 24C26.5735 31.8858 30.5904 38.8239 36.6705 42.8416Z" class="ccompli2" fill="#5D2C02"></path> </svg>

                </a>
                <h2 class="mb-4 text-4xl font-bold tracking-tight lg:text-6xl xl:text-7xl">Contact Guitarras ATM</h2>
                <p class="mb-8 leading-loose text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis cum ut totam ipsam quas illum beatae dolore numquam enim soluta. Alias vitae nam culpa aspernatur. Voluptatum quam quas blanditiis tenetur!</p>
                <a href="#_" class="inline-block w-full px-6 py-3 font-bold text-center text-white transition rounded hover:bg-indigo-500 lg:w-auto duration-250 bg-green-600">Get Started</a>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <div class="max-w-sm mx-auto lg:mr-0 lg:ml-auto">
                    <div class="overflow-hidden text-center bg-white rounded-md shadow-lg">
                        <div class="px-6 py-8">
                            <form onsubmit="event.preventDefault();" class="">
                                <div class="mb-6">
                                    <h4 class="text-2xl font-semibold text-gray-700">Get in touch!</h4>
                                </div>
                                <div class="flex flex-wrap mb-4 -mx-2">
                                    <div class="w-full px-2 mb-4 lg:mb-0">
                                        <input name="name" class="py-2.5 px-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="text" placeholder="First Name">
                                    </div>
                                </div>
                                <div>
                                  <textarea name="message" class="py-2.5 px-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <input class="py-2.5 px-4 mb-4 w-full bg-gray-50 border focus:ring-2 focus:ring-opacity-90 focus:ring-indigo-500 border-gray-100 rounded focus:outline-none" type="email" placeholder="Email address">
                                <button class="w-full py-3 mb-4 font-bold text-white rounded hover:bg-indigo-500 bg-green-600">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>



</main>	
  
