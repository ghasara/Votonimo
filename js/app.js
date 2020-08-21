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
        popUp.slideUp(500);
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
            
        var mySwiper = new Swiper('#multiplephotos', {
            direction: 'horizontal',
            loop: false,
            spaceBetween: 30,
            breakpoints: {
                100: {
                    slidesPerView: 2,
                    spaceBetween: 10,
                },
                200: {
                    slidesPerView: 3.5,
                    spaceBetween: 10,
                },
                375: {
                    slidesPerView: 3.5,
                    spaceBetween: 10,
                },
                425: {
                    slidesPerView: 3.5,
                    spaceBetween: 10,
                },
                756: {
                    slidesPerView: 3.5,
                    spaceBetween: 80,
                },
                1024: {
                    slidesPerView: 3.5,
                    spaceBetween: 80,
                },
                
            }
        });
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
      
      
    
           