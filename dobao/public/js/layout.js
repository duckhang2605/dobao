$(document).ready(function(){
          var balls=$(".preloader-ball")
          var n=balls.length;
          var d=13;
          var t=0.45;
          balls.each(function(i){
            var cur=$(this);
            var a=(i/n)*(Math.PI*2);
            cur.css({
              left:Math.cos(a)*d,
              top:Math.sin(a)*d,
              animation:"ball-anim "+t+"s ease-in -"+((t/n)*(n-i))+"s infinite"
            })
          })
        });
        window.onload = function() {
            $(".se-pre-con").fadeOut();
        };
        /**
         * Slide right instantiation and action.
         */
         var slideRight = new Menu({
            wrapper: '#menu',
            type: 'slide-right',
            menuOpenerClass: '.c-button',
            maskId: '#c-mask'
        });

         var slideRightBtn = document.querySelector('#c-button--slide-right');

         slideRightBtn.addEventListener('click', function(e) {
            e.preventDefault;
            slideRight.open();
        });