$(document).ready(function(){
    // Here we put all the code
    var heart = $('.heart'),
        cog = $('#cog'),
        popUp = $('.popUp'),
        closePopUp = $('#closePopUp'),
        cancelPopUp = $('#cancelPopUp');

    heart.click(function(){
        $(this).toggleClass('fa-heart-o');
        $(this).toggleClass('heart-red fa-heart');
    })

    cog.click(function(){
        popUp.fadeIn(500);
    })

    closePopUp.click(function(){
        popUp.fadeOut(500);
    })

    cancelPopUp.click(function(){
        popUp.slideUp(500)
    })

})
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction1() {
              document.getElementById("myDropdown1").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction2() {
              document.getElementById("myDropdown2").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            function myFunction3() {
              document.getElementById("myDropdown3").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            function myFunction4() {
              document.getElementById("myDropdown4").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            function myFunction5() {
              document.getElementById("myDropdown5").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            $(document).ready(function() {
              $("#owl-demo1").owlCarousel({
              items : 2,
              itemsDesktop : [1199,2],
      itemsDesktopSmall : [979,2]
              });
          });
          $(document).ready(function() {
              $("#owl-demo2").owlCarousel({
              items : 2,
              itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
              });
          });
          $(document).ready(function() {
            $("#owl-demo3").owlCarousel({
            items : 2,
            itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
            });
        });
        $(document).ready(function() {
            $("#owl-demo4").owlCarousel({
            items : 2,
            itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
            });
        });
        $(document).ready(function() {
          $("#owl-demo5").owlCarousel({
          items : 2,
          itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
          });
      });
      $(document).ready(function() {
          $("#owl-demo6").owlCarousel({
          items : 2,
          itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
          });
      });
            