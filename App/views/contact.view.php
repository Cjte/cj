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
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/contact.css">
    <title>Contact</title>
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
                <h1>Connect with us.</h1>

             </div>
        </section>

    

        <section class="mess">
            <div class="mymessage">
                <form method="post">
                <div class="alter">
                     <?php if (!empty($errors)) : ?>

                     <?= implode('<br>', $errors) ?>

                    

                    <?php endif; ?>
                 </div>
                    
                    <input type="text" class="name" id="name" name="name" placeholder="Name">

                   
                    <input type="email" class="email" id="email" name="email"  placeholder="Email">
                    <br>

                    <input type="phone" class="phone" id="phone" name="phone"  placeholder="Phone Number">
                    <br>


              
                    <textarea name="message" id="message" cols="30" rows="10"  placeholder="Message"></textarea>

                    <br>
                    <button type="submit" name="submit">Connect</button>




                </form>
            </div>

            <div class="contactinfo">
                <h2>Contact us on</h2>
                <ul>
                    <li>Phone: +254 721 580023</li>
                    <li>Email: mckkunene@gmail.com</li>
                </ul>
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