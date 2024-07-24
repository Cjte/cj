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
    <title>Add Blog</title>
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
       
    

        <section class="mess">
            <div class="mymessage">
                <form method="post" enctype="multipart/form-data">
                <div class="alter">
                     <?php if (!empty($errors)) : ?>

                     <?= implode('<br>', $errors) ?>

                    <?php endif; ?>

                    <br>
                    

                     <?php if (!empty($imgc)) : ?>

                     <?= implode('<br><hr>', $imgc) ?>


                    <?php endif; ?>

                    
                 </div>
                    
                    <input type="text" class="name" id="name" name="name" placeholder="Name">

                   
                    <input type="email" class="email" id="email" name="email"  placeholder="Email">
                    <br>

                    <input type="phone" class="phone" id="phone" name="phone"  placeholder="Phone Number">
                    <br>


              
                    <textarea name="message" id="message" cols="30" rows="10"  placeholder="Blog Content"></textarea>
                    <br>
                
                    <label for="fileToUpload" class="imagelabel">(Optional) Chose A Profile Image. </label>
                    <br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    

                    
                    <button type="submit" name="submit">Submit for Review</button>

                  




                </form>
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