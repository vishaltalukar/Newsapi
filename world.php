<!-- CSS only -->


<!DOCTYPE html>
<html>
<head>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>World</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <style>
 .container{
    margin-top: 20px;
    font-family: "Lucida Console", "Courier New", monospace;
  }

.title{
  margin-top: 10px;
  margin-bottom: 20px;
  margin-right: 20px;
  margin-left: 20px;
  font-family: "Lucida Console", "Courier New", monospace;
}
.single-news{
  background-color:  #e6f9ff;
  padding: 35px;
  margin-bottom: 20px;
  margin-top: 10px;
  margin-bottom: 20px;
  margin-right: 30px;
  margin-left: 30px;
  font-family: "Lucida Console", "Courier New", monospace;

}
.single-news:hover
{
font-family: "Times New Roman", Times, serif;
color: #456745;


</style>

</head>
<body>

<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
<a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0" href="landing.php">      
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Newsopedia | World</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="tech.php">Tech </a>
      <a class="mr-5 hover:text-gray-900" href="fin.php">Finance </a>
      <a class="mr-5 hover:text-gray-900" href="poly.php">Politics</a>
      <a class="mr-5 hover:text-gray-900" href="edu.php">Education</a>
    </nav>
    
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    
  </div><hr>
</header>


      
        <div class="list-wrapper">
      <?php
      
        $api_url='https://newsapi.org/v2/everything?q="World"&apiKey=5e057beb78d34ec0b5d8399b03494c19';
      
        $newslist=json_decode(file_get_contents($api_url));
        foreach ($newslist->articles as $news){
        ?> 
      

        <div class="row single-news">
        <div class="col-4">
         <img style="width: 100%" src="<?php echo $news->urlToImage  ?>">
        </div>
      <div class="col-8">
        <h2><?php echo $news->title; ?></h2>
        <small>

          <?php echo $news->source->name;  ?> | author - 
          <?php echo $news->author; ?>
        </small>
        <p>
          <?php echo $news->description;  ?>
       
          </p>
        <a href="<?php echo $news->url ?>" style="float: right;" target="_blank">Read More....</a>
            </div>
        </div>
        
        <?php } ?>
    </div>      
      


<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      
      <span class="ml-3 text-xl">Newsopedia</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"> 2021 Newsopedia —
      <a href="https://github.com/vishaltalukar" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@vishaltalukar </a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">

      <a class="ml-3 text-gray-500" href="https://twitter.com/VishalTalukar">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://www.instagram.com/vishal.talukar66/">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/vishal-talukar-6a5682177/">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>





</body>
</html>