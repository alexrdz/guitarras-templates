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
    <?php include './includes/separator.inc'; ?>

    <?php if ($page->template->name !== 'home'): ?>
      <section class="navigation">
        <div class="absolute z-10 w-full h-auto bg-gradient-to-tr from-green-600 via-green-900 to-black">
            <div class="absolute right-0 w-32 -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
            <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
                <div class="relative z-20 flex items-center justify-between">
  
                      <h1>
                        <a href="#_" class="text-lg font-semibold text-white md:text-xl">
                          Guitarras ATM
                        </a>
                      </h1>
                      <?php echo $home->children->implode(" / ", "<a href='{url}' class='text-lg font-semibold text-white md:text-xl'>{title}</a>"); ?>
  
        
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
      </section>
    <?php endif; ?>

    

    <main id="content"></main>










    <footer class="py-10 bg-gray-50">
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
    </footer>








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
