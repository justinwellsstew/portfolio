<?php
if(isset($_POST['submit'])){
    include("email.php"); 
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0;">
        <title>Justin Stewart: Web Designer</title>
        <link href="css/main.css" type="text/css" rel="stylesheet">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link href="css/lightbox.css" rel="stylesheet" />
        <script src="js/jquery-1.10.2.min.js"></script>
        <script src="js/lightbox-2.6.min.js"></script>     
    </head>
    <body>
        <div id="main">
            <header><div><h1>Justin Stewart</h1><nav> <a href ="#intro">Me</a> <a href="#webwork">Work</a> <a href="#connect">Connect</a></nav></div></header>
            <section id="intro">
                
               <div> 
                   <img src="images/jstewart2.jpg"/> 
               <p> 
                Hi! My name is Justin Stewart. The past five years I have spent working at SUNY Cortland as a Web Developer. Prior to that I served as graphic designer and web developer for Global PCT, a web marketer in Ithaca NY.</p>


<p>I enjoy working with the client, helping them create an identity that tracks with the image that they want to present. </p>

<p>In my free time I enjoy traveling to exotic lands, hiking, biking, vegetarian cooking, reading SF - particularly Allistair Reynolds.
            </p>
                  <!-- <img src="images/borderImage.png"/> -->
               </div>
                </section>     
            <section id ="webwork" class="gallery">
                 <h2><span style="font-size:1em; padding:10px 0 10px 0; margin-bottom: 20px; text-align:center;  font-family:antoniolight;">Web </span> Work</h2>
                <ul>
                <li><a href="http://drbillsplace.org"><img src="images/drbillsplace.jpg" alt="Dr. Bill's Place"> 
                    <h3> Dr. Bill's Place</h3>
                </a>
                </li>
                <li><a href="http://www2.cortland.edu/departments/history/webography.dot"><img src="images/webography.jpg" alt="Dr. Bill's Place">
                    <h3>History Webography</h3>
             </a>
                </li>
                <li><a href="http://www.cortland.edu/cgis/suzman/index.html"><img src="images/suzman.jpg" alt="Dr. Bill's Place">
                    <h3>Suzman Memorial Site</h3>
                 </a>
                </li>
                <li><a href="http://wagadu.org"><img src="images/wagadu.jpg" alt="Dr. Bill's Place">
                    <h3>Wagadu</h3>
                  </a> 
                </li>
                </ul>    
            </section>
            <section id="printwork" class="gallery">
                <h2><span style="font-size:1em; padding:10px 0 10px 0; margin-bottom: 20px; text-align:center;  font-family:antoniolight;"> Print </span>  Work</h2>
                <ul>
                <li><a  href="images/cloud.jpg" data-lightbox="image-1" title="Cloud" ><img src="images/cloud_mini.jpg" alt="Cloud"> 
                    <h3> Cloud Computing</h3>
        </a>
                </li>
                <li><a href="images/slaves.jpg" data-lightbox="image-2" title="Traveling Slavery Presentation" ><img src="images/slave_poster_mini.jpg" alt="Traveling Slavery Presentation">
                    <h3>Slavery Presentation</h3>
             </a>
                </li>
                 
                <li><a href="images/fallen_apple.jpg" data-lightbox="image-3" title="Hard Cider" ><img src="images/fallen_apple_mini.jpg" alt="Wine Labels">
                    <h3>Courtland Beverage Labels</h3>
                 </a>
                    <a href="images/dada.jpg" data-lightbox="image-3" title="Wine Labels" >
                 </a>
                </li>   
                </li>
                <li><a href="images/mixmingle.jpg" data-lightbox="image-4" title="STC Mix and Mingle" ><img src="images/mix_mingle_mini.jpg" alt="STC Mix and Mingle">
                    <h3>Mix & Mingle</h3>
                   </a>
                </li>
                    <li><a href="images/jubilee.jpg" data-lightbox="image-5" title="Vintage Typography" ><img src="images/jubilee_mini.jpg" alt="STC Mix and Mingle">
                    <h3>Vintage Typography </h3>
                   </a>
                </li>
                </ul>    
            </section>
            <footer id="connect">
                <ul>
                    <li><a href="http://www.linkedin.com/pub/justin-stewart/1a/8b6/a7b" target="_blank">LinkedIN</a></li>
                    <li><a href="blog.php" target="_blank">Journal</a></li>
                    <li ><a href="#form" id="email">email</a></li>
                </ul>
                <div>
                <form method="post" action="index.php#connect" id="form" class="hide">
        
    <label>Name</label>
    <input name="name" placeholder="Your name">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Email@email.com">
            
    <label>Message</label>
    <textarea name="message" placeholder="Hello Justin"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Start conversation">
        
</form>
                <?php if($result){
echo "<div style=\"background-color:pink; height:150px; font-size:4em; text-align:center; font-family:verdana; padding-top:20px; color:#5b96b5\"> <h2> Your message is on its way </h2> </div>";
}
?>
                    </div>
            </footer>
            
        </div>
        
        <script>
        $("#email").click(function(){
  $("form").toggle();
});
</script>  
    </body>
</html>