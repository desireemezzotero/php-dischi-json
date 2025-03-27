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
  </main>


  
</body>

</html>