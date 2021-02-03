	$(document).ready(function(){
      	$.ajax({
            type: 'POST',
          	url: "jadwal/get_jurusan.php",
          	cache: false, 
          	success: function(msg){
              $("#jurusan").html(msg);
            }
        });

		$("#jurusan").change(function(){
			var jurusan = $("#jurusan").val();
				$.ajax({
					type: 'POST',
					url: "jadwal/get_kelas.php",
					data: {jurusan: jurusan},
					cache: false,
					success: function(msg){
					$("#kelas").html(msg);
				  }
			  });
			  $.ajax({
				type: 'POST',
				url: "jadwal/get_mengajar.php",
				data: {jurusan: jurusan},
				cache: false,
				success: function(msg){
				$("#mengajar").html(msg);
			  }
		  });
		});
     });
