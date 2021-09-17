window.addEventListener('load',function(){
    new Glider(document.querySelector('.caruselLista'),{
    	 slidesToShow: 3,
		   slidesToScroll: 'auto',
       draggable:true,
		  
		  dots: '.dots',
		  arrows: {
		    prev: '.anterior',
		    next: '.siguiente'
		  },
          responsive: [
            {
              // screens greater than >= 775px
              breakpoint: 775,
              settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 1,
                slidesToScroll: 'auto',
              
              }
            },{
              // screens greater than >= 1024px
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 'auto',
               
              }
            }
          ]

         
    });
});


