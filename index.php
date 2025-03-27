<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php dischi</title>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">


</head>

<body class="bg-black">
  <header>
    <nav class="h-[80px]">
     <h1 class="text-6xl font-extrabold text-white text-center pt-3 mb-10">PHP DISCHI</h1>
    </nav> 
  </header>

  <main>
   <div class="container m-auto grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 ">
     <?php 
     //traduco da json a php 
     $json_text = file_get_contents('./disc.json');
     $arrays = json_decode($json_text,true);
     foreach( $arrays as $array){
       ?>

       <div class="bg-gray-500 p-2 bg-opacity-30">
         <img class="obobject-cover" src="<?php echo $array['img']?>" alt="" />
           <div class="text-center mt-2">
             <h6 class="mb-2 font-bold text-white"><?php echo $array['title']?></h6>
             <p class="text-gray-200 text-sm font-bold"><?php echo $array['artist']?></p>
             <p class=" mt-1 text-gray-200 text-sm"><?php echo $array['year'] . " - " . $array['genre'] ?></p>
            </div>
        </div>
     <?php } ?>
    </div>

    <h4 class="text-3xl font-extrabold text-white text-center pt-3 mt-10">Inserisci un nuovo disco</h4>

    <div class="container m-auto mt-10 flex justify-center items-center">

     <form class="grid grid-cols-2 gap-5" action="server.php" method="POST">
       <div class="mb-5">
          <label for="" class="block mb-2 text-md font-medium text-white ">Titolo del disco</label>
          <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 block p-2.5 rounded-lg mr-6" placeholder="Titolo" />
       </div>

        <div class="mb-5">
         <label for="" class="block mb-2 text-md font-medium text-white ">Artista</label>
         <input type="text" id="artist" name="artist" class="bg-gray-50 border border-gray-300 text-gray-900 block p-2.5 rounded-lg" placeholder="Artista" />
        </div>

        <div class="mb-5">
         <label for="" class="block mb-2 text-md font-medium text-white ">Anno pubblicazione</label>
         <input type="text" id="year" name="year" class="bg-gray-50 border border-gray-300 text-gray-900 block  p-2.5 rounded-lg" placeholder="Anno" />
        </div>

        <div class="mb-5">
         <label for="" class="block mb-2 text-md font-medium text-white ">Genere</label>
         <input type="text" id="genre" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 block p-2.5 rounded-lg" placeholder="Pop/Trap" />
        </div>

        <div class="mb-5">
         <label for="" class="block mb-2 text-md font-medium text-white ">Immagine di Copertina</label>
         <input type="url" id="img" name="img" class="bg-gray-50 border border-gray-300 text-gray-900 block p-2.5 rounded-lg" placeholder="Url" />
        </div>

        <div class="mt-9">
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Invia</button>
        </div>
     </form>

    </div>
  </main>


  
</body>

</html>