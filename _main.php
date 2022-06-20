<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
  
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */

$home = $pages->get('/'); // homepage

?><!DOCTYPE html>
<html lang="en">
  <head id="html-head">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php echo $page->title; ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat" media="all">
    <script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
  </head>
  <body id="html-body">
    <section class="relative overflow-hidden">
      <div class="flex">
          <div class="flex-1 h-1.5 bg-green-400"></div>
          <div class="flex-1 h-1.5 bg-red-500"></div>
          <div class="flex-1 h-1.5 bg-yellow-400"></div>
          <div class="flex-1 h-1.5 bg-indigo-500"></div>
          <div class="flex-1 h-1.5 bg-pink-400"></div>
      </div>

      <!-- Background Layer -->
      <div class="absolute z-10 w-full h-full bg-gradient-to-tr from-green-600 via-green-900 to-black">
          <div class="absolute right-0 w-32 h-full -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
      </div>

      <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
          <div class="relative z-20 flex items-center justify-between">
              <div>
                <h1>
                  <a href="#_" class="text-lg font-semibold text-white md:text-xl">
                    Guitarras ATM
                  </a>
                </h1>
                <?php echo $home->and($home->children)->implode(" / ", "<a href='{url}' class='text-lg font-semibold text-white md:text-xl'>{title}</a>"); ?>
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


      <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
          <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
              <h1 class="text-5xl font-bold text-white lg:text-6xl xl:text-7xl">Guitarras ATM</h1>
              <p class="text-base text-blue-200 lg:text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius possimus quasi repellendus? Voluptates nihil consequuntur modi et quaerat harum accusantium.</p>
          </div>
          <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/md1mK_KiOB8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
      </div>

      <div class="absolute bottom-0 left-0 z-20 w-full h-full overflow-x-hidden opacity-50 bg-gradient-to-b from-transparent via-transparent to-black"></div>
    </section>


    <section class="w-full pb-20 bg-gray-50">
      <div class="flex">
        <div class="flex-1 h-1.5 bg-green-400"></div>
        <div class="flex-1 h-1.5 bg-red-500"></div>
        <div class="flex-1 h-1.5 bg-yellow-400"></div>
        <div class="flex-1 h-1.5 bg-indigo-500"></div>
        <div class="flex-1 h-1.5 bg-pink-400"></div>
      </div>

        <div class="px-10 pt-20 mx-auto max-w-7xl">
            <div class="px-10 mb-8 space-y-5 lg:px-0 lg:text-center lg:mb-16">
                <h2 class="text-4xl font-bold sm:text-5xl">Experience the sounds of Mexico in Des Moines</h2>
                <p class="text-lg text-gray-600 w-ful sm:text-xl">Enjoy the sounds of mariachi, trios, and boleros with Des Moines' own Guitarras ATM.</p>
            </div>
            <div class="grid overflow-hidden lg:rounded-xl">
                <div class="grid items-center lg:grid-cols-2">
                    <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                        <h3 class="text-2xl font-semibold sm:text-4xl">Original</h3>
                        <p class="text-lg text-gray-600">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam iste tempore voluptate quia possimus? Debitis amet ullam ex. Libero, ea labore. Tempore hic soluta obcaecati sit ipsum laudantium quae!
                        </p>
                    </div>
                    <div class="overflow-hidden bg-gray-100 h-96">
                      <iframe class="w-full h-92" src="https://www.youtube.com/embed/H5WJrgVA5MQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <img src="https://i.ytimg.com/vi/Tz038FlXX-k/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDrYniOkKEJ1F4ofs4rrEIaQV8dAg" class="object-cover w-full h-full" alt=""> -->
                    </div>
                </div>

                <div class="grid items-center lg:grid-cols-2">
                    <div class="order-last overflow-hidden bg-gray-100 h-96 lg:order-first">
                      <iframe class="w-full h-92" src="https://www.youtube.com/embed/8PHZLUk5hlM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <img src="https://i.ytimg.com/vi/DtYD-rQvsGA/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDgPN4ReQfWy2iYxhmFvdfDodz-ow" class="object-cover w-full h-full" alt=""> -->
                    </div>
                    <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                        <h3 class="text-2xl font-semibold sm:text-4xl">Traditional</h3>
                        <p class="text-lg text-left text-gray-600">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam iste tempore voluptate quia possimus? Debitis amet ullam ex. Libero, ea labore. Tempore hic soluta obcaecati sit ipsum laudantium quae!
                        </p>
                    </div>
                </div>

                <div class="grid items-center lg:grid-cols-2">
                    <div class="flex flex-col items-start justify-center h-full py-16 pl-16 pr-16 space-y-4 bg-white lg:pr-20 lg:py-0">
                        <h3 class="text-2xl font-semibold sm:text-4xl">Classic</h3>
                        <p class="text-lg text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, magnam eveniet. Qui, iste porro similique ex rerum magni omnis aspernatur est non nesciunt nemo quo ducimus! Tenetur recusandae quas commodi?
                        </p>
                    </div>
                    <div class="bg-gray-100 h-96">
                      <iframe class="w-full h-92" src="https://www.youtube.com/embed/YgfZ1mXGiFA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <!-- <img src="https://i.ytimg.com/vi/JC03Jh9JZZU/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC3AZxewJIZzFkxbiS2JFEi68Qbgg" class="object-cover w-full h-full" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-green-800 relative">
      <div class="bg-cover absolute inset-0 z-0 opacity-10 bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1501059104508-e158516511cd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2373&q=80')"></div>
      <div class="relative z-10">
        <div class="flex">
          <div class="flex-1 h-1.5 bg-green-400"></div>
          <div class="flex-1 h-1.5 bg-red-500"></div>
          <div class="flex-1 h-1.5 bg-yellow-400"></div>
          <div class="flex-1 h-1.5 bg-indigo-500"></div>
          <div class="flex-1 h-1.5 bg-pink-400"></div>
        </div>
  
        <div class="pt-16 pb-16 pl-4 pr-4 mx-auto ml-auto mr-auto bg-top bg-cover max-w-4xl md:px-24 lg:px-12 lg:py-20">
          <div class="flex">
            <div class="border-white border-8 inline-block shadow-2xl">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Tz038FlXX-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
  
  
          
          <div class="flex mt-16">
            <div class="ml-auto border-white border-8 inline-block shadow-2xl">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/7cOS97NAm_I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          
          
          <div class="flex mt-16">
            <div class="border-white border-8 inline-block shadow-2xl">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/md1mK_KiOB8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

    </section>


    <section class="bg-white">
      <div class="flex">
        <div class="flex-1 h-1.5 bg-green-400"></div>
        <div class="flex-1 h-1.5 bg-red-500"></div>
        <div class="flex-1 h-1.5 bg-yellow-400"></div>
        <div class="flex-1 h-1.5 bg-indigo-500"></div>
        <div class="flex-1 h-1.5 bg-pink-400"></div>
      </div>

      <div class="pt-16 pb-16 pl-4 pr-4 mx-auto ml-auto mr-auto bg-top bg-cover max-w-7xl md:px-24 lg:px-12 lg:py-20">
        <div class="mb-10 ml-auto mr-auto bg-top bg-cover max-w-7xl md:mx-auto sm:text-center lg:max-w-2xl md:mb-16">
            <p class="inline-block px-3 py-px mb-3 text-sm font-semibold tracking-wider text-white uppercase rounded-full bg-green-600">Our Crew</p>
            <div class="mb-6 ml-auto mr-auto font-sans tracking-tight text-gray-900 bg-top bg-cover max-w-7xl md:mx-auto">
                <p class="inline max-w-lg text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-5xl md:mx-auto">Meet The Band</p>
            </div>
            <p class="text-base text-gray-700 md:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ea tempora iusto quod nisi natus animi eos tenetur repellat.</p>
        </div>
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-4">
              <!-- Team Member 1 -->
              <div>
                <div class="relative overflow-hidden rounded-md shadow-lg group">
                    <img class="object-cover w-full h-72 xl:h-80" src="https://www.villapalmarcancun.com/blog/wp-content/uploads/2017/03/mariachis-more-recent-history.jpg" alt="Team Member Name">
                    <div class="absolute inset-0 px-6 py-4 text-center duration-300 opacity-0 group-hover:opacity-100">
                        <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-500 opacity-60 to-purple-600"></div>
                        <div class="relative flex flex-col items-center justify-center w-full h-full">
                            <p class="mb-1 text-lg font-bold text-white">R.J. Hernandez</p>
                            <p class="mb-4 text-xs text-blue-50">Founder &amp; Band Leader</p>
                            <p class="mb-4 text-xs tracking-wide text-blue-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
              </div>

              <!-- Team Member 2 -->
              <div>
                  <div class="relative overflow-hidden rounded-md shadow-lg group">
                      <img class="object-cover w-full h-72 xl:h-80" src="https://www.villapalmarcancun.com/blog/wp-content/uploads/2017/03/mariachis-more-recent-history.jpg" alt="Team Member Name">
                      <div class="absolute inset-0 px-6 py-4 text-center duration-300 opacity-0 group-hover:opacity-100">
                          <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-500 opacity-60 to-purple-600"></div>
                          <div class="relative flex flex-col items-center justify-center w-full h-full">
                              <p class="mb-1 text-lg font-bold text-white">Person 2</p>
                              <p class="mb-4 text-xs text-blue-50">Co-Founder</p>
                              <p class="mb-4 text-xs tracking-wide text-blue-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Team Member 3 -->
              <div>
                  <div class="relative overflow-hidden rounded-md shadow-lg group">
                      <img class="object-cover w-full h-72 xl:h-80" src="https://www.villapalmarcancun.com/blog/wp-content/uploads/2017/03/mariachis-more-recent-history.jpg" alt="Team Member Name">
                      <div class="absolute inset-0 px-6 py-4 text-center duration-300 opacity-0 group-hover:opacity-100">
                          <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-500 opacity-60 to-purple-600"></div>
                          <div class="relative flex flex-col items-center justify-center w-full h-full">
                              <p class="mb-1 text-lg font-bold text-white">Person 3</p>
                              <p class="mb-4 text-xs text-blue-50">Guitarra y Requinto</p>
                              <p class="mb-4 text-xs tracking-wide text-blue-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Team Member 4 -->
              <div>
                  <div class="relative overflow-hidden rounded-md shadow-lg group">
                      <img class="object-cover w-full h-72 xl:h-80" src="https://www.villapalmarcancun.com/blog/wp-content/uploads/2017/03/mariachis-more-recent-history.jpg" alt="Team Member Name">
                      <div class="absolute inset-0 px-6 py-4 text-center duration-300 opacity-0 group-hover:opacity-100">
                          <div class="absolute inset-0 w-full h-full bg-gradient-to-br from-blue-500 opacity-60 to-purple-600"></div>
                          <div class="relative flex flex-col items-center justify-center w-full h-full">
                              <p class="mb-1 text-lg font-bold text-white">Person 4</p>
                              <p class="mb-4 text-xs text-blue-50">Percussion</p>
                              <p class="mb-4 text-xs tracking-wide text-blue-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                          </div>
                      </div>
                  </div>
              </div>
              
        </div>
      </div>
    </section>

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



    <section class="py-10 bg-gray-50">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <a href="#_" class="flex items-center text-lg font-bold">
                    <span class="ml-1">Guitarras ATM</span>
                </a>
            </div>
            <div class="flex flex-col justify-between mt-5 mb-5 text-center sm:mb-0 sm:mt-12 sm:flex-row">
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm font-bold">
                    <li> <a href="/" class="px-2 text-gray-500 hover:text-gray-600">Home</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Contact</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">About US</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">FAQ's</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Terms</a></li>
                </ul>
                <p class="mt-3 text-xs leading-tight text-gray-500 sm:mt-0"> © Copyright 2022</p>

            </div>
        </div>
    </section>








    <!-- <p id="topnav">
      <?php echo $home->and($home->children)->implode(" / ", "<a href='{url}' class='text-lg font-semibold text-white md:text-xl'>{title}</a>"); ?>
    </p>
    
    <hr />
    
    <h1 id="headline">
      <?php if($page->parents->count()): // breadcrumbs ?>
        <?php echo $page->parents->implode(" &gt; ", "<a href='{url}'>{title}</a>"); ?> &gt;
      <?php endif; ?>
      <?php echo $page->title; // headline ?>
    </h1>
    
    <div id="content">
      Default content
    </div>
  
    <?php if($page->hasChildren): ?>
    <ul> 
      <?php echo $page->children->each("<li><a href='{url}'>{title}</a></li>"); // subnav ?>
    </ul>	
    <?php endif; ?>
    
    <?php if($page->editable()): ?>
    <p><a href='<?php echo $page->editUrl(); ?>'>Edit this page</a></p>
    <?php endif; ?> -->
  
    <!-- AlpineJS Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.0/alpine.js"></script>

  </body>
</html>
