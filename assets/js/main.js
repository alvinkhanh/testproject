// topbar

// search
$('.search-icon').on('click', function () {
    $('form').toggleClass('active');
});
// account panel;
$('.action').on('click', function () {
    $('.menu-profile').toggleClass('active');
});
// sidebar
$('#sidebarBar').on('click', function () {
    $('.sidebar1').toggleClass('active');
    $('.wrapper').toggleClass('active');
});
      // dropdown
        $('.feat-btn').click(function(){
          $('nav ul .feat-show').toggleClass("show");
          $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
          $('nav ul .serv-show').toggleClass("show1");
          $('nav ul .second').toggleClass("rotate");
        });
        $('.three-btn').click(function(){
          $('nav ul .three-show').toggleClass("show2");
          $('nav ul .three').toggleClass("rotate");
        });
        $('.four-btn').click(function(){
          $('nav ul .four-show').toggleClass("show3");
          $('nav ul .four').toggleClass("rotate");
        });
      // hover effect active
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
// content

// jam
        function updateClock(){
    var now = new Date();
    var dname = now.getDay(),
        mo = now.getMonth(),
        dnum = now.getDate(),
        yr = now.getFullYear(),
        hou = now.getHours(),
        min = now.getMinutes(),
        sec = now.getSeconds(),
        pe = "AM";
        
        if(hou >= 12){
          pe = "PM";
        }
        if(hou == 0){
          hou = 12;
        }
        if(hou > 12){
          hou = hou - 12;
        }

        Number.prototype.pad = function(digits){
          for(var n = this.toString(); n.length < digits; n = 0 + n);
          return n;
        }

        var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
        var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var ids = ["dayname", "month", "daynume", "year", "hour", "minutes", "seconds", "period"];
        var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
        for(var i = 0; i < ids.length; i++)
        document.getElementById(ids[i]).firstChild.nodeValue = values[i];
  }

  function initClock(){
    updateClock();
    window.setInterval("updateClock()", 1);
  }


