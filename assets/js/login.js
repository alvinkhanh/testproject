 /*For Sign In---------------------------------*/
 
 $(document).on('click','.s-btn',function(){
    $('.sign-in').addClass('active-sign-in').siblings('.sign-in').removeClass('active-sign-up')
   }); 
    
    /*For Sign up-------------------------------*/
    
   $(document).on('click','.new-btn',function(){
    $('.sign-in').addClass('active-sign-up').siblings('.sign-in').removeClass('active-sign-in')
   }); 
    
    /*For Go Back To Main Page---------------------*/
    
     $(document).ready(function(){
     $('.cancel a').click(function(){
      $('.sign-in').removeClass('active-sign-in , active-sign-up')
    
     })
    });