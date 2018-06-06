$( document ).ready(function() {
    $("#wallet,#ctprice,#ctprice_future").bind('input', function(){

		var data = {
            wallet: $("#wallet").val(),
            ctprice: $("#ctprice").val(),
            ctprice_future: $("#ctprice_future").val()
        }

		$.ajax({
			url:"http://21534.hosts.ma-cloud.nl/crypto/calculate.php",
			method:"POST",
			data:data,
			dataType:"JSON",
			success:function(data)
			{
				
				$("#wallet_future").val(data.walletFuture);
				$("#ct").val(data.ct);
				$("#ct_future").val(data.ctFuture);
				
				$("#profit").val(data.profit);
				$("#x").val(data.x);
				$("#percent").val(data.percent);

			}
		})
	});

});