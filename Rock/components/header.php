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
  <link rel="stylesheet" href="../css/accueil.css">
  <link rel="stylesheet" href="../css/album.css">


  <link rel="stylesheet" href="../css/main.css">
  <title>Document</title>
</head>
<body>
<div class="bg-perso">
<nav class="flex items-center justify-between flex-wrap bg-nav p-6">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <a data-target='accueil' class="rocknpop text-xl tracking-tight dynamicLinks">Rock n' Pop'</a>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="nav-categorie text-sm lg:flex-grow">
      <a data-target="artistes" class="dynamicLinks categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Artistes
      </a>
      <a data-target="albums" class="dynamicLinks categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
        Album
      </a>
      <a data-target="annees" class="dynamicLinks categorie block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">
        Année
      </a>
    </div>
   </div>
</nav>
<div class="w-full">
<div class="flex items-center justify-center  ">