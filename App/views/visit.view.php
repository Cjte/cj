<!DOCTYPE html>
<html lang="en">

<head>
    
    
        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WK9MHLF4');</script>
    <!-- End Google Tag Manager -->
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/visit.css">
    <title>Visit us</title>
</head>

<body>
    
    
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK9MHLF4"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <header>
        <?php
        include_once 'header.php';
        ?>

    </header>


    <main>
        <section class="topsec">
            <div class="conectintro">
                <h1>Visit Us.</h1>

             </div>
        </section>

    
        <section class="visitus">
            <section class="joinus">
                <div class="join">
                    <form method="post">
                      <div class="alter">
                          <?php if (!empty($errors)) : ?>

                          <?= implode('<br>', $errors) ?>


                           <?php endif; ?>
                        </div>
                    
                        <input type="text" class="name" id="name" name="name" placeholder="Name">
                        <br>

                   
                        <input type="email" class="email" id="email" name="email"  placeholder="Email">
                        <br>

              
                        <input type="phone" class="phone" id="phone" name="phone" placeholder="Phone Number">
                        <br>

                        <input type="text" id="place" class="place" name="place" placeholder="Place Of Recident">
                        <br>

                
                       <br>
                        <button type="submit" name="submit">Plan Your Visit</button>




                    </form>
                </div>

                <div class="jContent">
                    <h3>Bounjur</h3>
                    <p>Welcome to our church, MCK Kunene! As you step into our congregation, may you feel the 
                        warmth of fellowship and the embrace of community. Remember the words of Psalms 133:1, '
                        How good and pleasant it is when God’s people live together in unity.' Join us in spreading 
                        love and faith.</p>

                </div>


            
            </section>


            <section class="visitcontent">
                <div class="vicithead">
                    <h2>We're Looking Forward To Meet You & Your Family!</h2>
                </div>
                <div class="expectations">
                    
                   
                    <div class="expcont">
                        <h2 class="meet">WHEN WE MEET</h2>
                        <h4>We meet sunday at 8 AM & 11 AM</h4>
                        <p>
                            Our services typically last about 2 hours and include live music and teaching. 

                          </p>
                        <h4> We also have prayers and fasting day</h4>      
                        <p>    
                            on every friday of the week
                         
                        </p>
                    </div>
                    <img src="<?= ROOT ?>/assets/images/imgast/pln1.jpeg" alt="Kids Photo" class="img2">
                </div>

                <div class="expectations">
                   
                   
                    <div class="expcont">
                        <h2 class="place">WHERE WE MEET</h2>
                        <p>
                            Find us along meru-maua road near Meru University of Science and Technologies
                           
                        </p>

                        <button ><a href="https://maps.app.goo.gl/wnrYMrALtYhraA8u5">Get Directions</a></button>
                    </div>
                     <img src="<?= ROOT ?>/assets/images/imgast/pln2.jpeg" alt="Kids Photo" class="img2">
                </div>


                <div class="expectations">
                <img src="<?= ROOT ?>/assets/images/imgast/pln3.jpeg" alt="Kids Photo" class="img2">
                   
                    <div class="expcont">
                        <h2 class="wear">WHAT TO WEAR</h2>
                        <p>We wear casual around here.you will see jeans, shorts, dresses 
                            and business casual arrite.so, wear something comfortable and 
                            joins us.
                            
                           
                        </p>
                        
                    </div>
                    
                </div>


                <div class="expectations">
                   
                   
                    <div class="expcont">
                        <h2 class="believe">WHAT WE BELIEVE</h2>
                        <p>God the father sent his son Jesus as a sarcifice for the sins of mankind.
                           
                           
                        </p>
                        <button><a href="<?= ROOT ?>/about">Find Out More</a></button>
                    </div>
                    <img src="<?= ROOT ?>/assets/images/imgast/pln4.jpeg" alt="Kids Photo" class="img2">
                </div>

                    
             </section>


            
        </section>
    </main>





    <header>
        <?php
        include_once 'footer.php';
        ?>
    </header>



</body>

</html>