  const navigation = document.querySelector('.navbar');
  const menu = document.querySelector('.mnbtn');
  const close = document.querySelector('.clsbtn');
  const navigate = document.querySelectorAll('.clsnava');
  const inernav = document.querySelector('.dropdown-menu');

  menu.addEventListener("click", function() {
      navigation.style.visibility = "visible";
      menu.style.visibility = "hidden";


  })


  close.addEventListener('click', function() {
      navigation.style.visibility = "hidden";
      menu.style.visibility = "visible";
  })



  navigate.addEventListener("click", function() {
      if (inernav.style.disply = "none") {
          inernav.style.disply = "block";

      }



  })