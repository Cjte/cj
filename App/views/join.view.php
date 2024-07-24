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
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/join.css">
    <title>Ministries</title>
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
                <h1>Join A Group.</h1>

             </div>
        </section>

    

        <section class="joinus">
            <div class="join">
                <form method="post">
                <div class="alter">
                     <?php if (!empty($errors)) : ?>

                     <?= implode('<br>', $errors) ?>
                     <?php elseif (!empty($errors)) : echo"<h1> data enterd succesfully</h1>" ?>
                     


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

                    <h1>Select A Group To Join </h1>
                    <select name="team" id="team">
                       
                        <option value="praice">Praice And Worship Team</option>
                        <option value="choir">Choir</option>
                        <option value="inter">Intercessors</option>
                        <option value="duplex">Duplex For Jesus</option>
                        <option value="hashering">Hashering Department</option>

                    </select><br>
                        
                    

                    <br>
                    <button type="submit" name="submit">Send</button>




                </form>
            </div>



            <div class="welcome">
                <h2>Welcome To M.C.K Kunene Ministries</h2>
                <p>Joining our church ministry, you're embraced with love and purpose. Together, let's serve with joy and unity, fulfilling God's calling. Remember Ephesians 4:16, 'From him the whole body, joined and held together by every supporting ligament, grows and builds itself up in love, as each part does its work.</p>
                
            </div>

            
        </section>
        
    </main>





    <header>
        <?php
        include_once 'footer.php';
        ?>
    </header>

</body>

</html>