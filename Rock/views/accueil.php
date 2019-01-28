<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/preflight.min.css" rel="stylesheet">

<!-- Any of your own CSS would go here -->

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/utilities.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../css/rock/rock.css">
  <title>Document</title>
</head>
<body>
<div class="bg-perso">
<nav class="flex items-center justify-between flex-wrap bg-nav p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <span class="font-semibold text-xl tracking-tight">ROCK N' POP'</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="nav-categorie text-sm lg:flex-grow">
      <a href="#responsive-header" class="categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Style
      </a>
      <a href="#responsive-header" class="categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Date
      </a>
      <a href="#responsive-header" class="categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
        Thème
      </a>
    </div>
  <input class="w-100% h-10 px-3 rounded mb-0 focus:outline-none focus:shadow-outline text-xl  shadow-lg" type="search" placeholder="Recherche ...">
   </div>
</nav>
  <div class="w-full">
	<div class="flex items-center justify-center h-screen bg-perso">
		<!-- CORP DE LA PAGE -->
		<ul class="grid cs-style-2">
				<li>
					<figure>
						<img src="../../images/Album/Let-It-Be.jpg" alt="img02">
						<figcaption>
							<h3>Music</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
						</figcaption>
					</figure>
				</li>
				<li>
					<figure>
						<img src="../../images/Album/Let-It-Be.jpg" alt="img04">
						<figcaption>
							<h3>Settings</h3>
							<span>Jacob Cummings</span>
							<a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
						</figcaption>
					</figure>
				</li>
			</ul>
		</div><!-- /container -->
		<script src="js/toucheffects.js"></script>
		<!-- FIN DU CORP DE LA PAGE -->
	</div>
</div>
</body>
</html>