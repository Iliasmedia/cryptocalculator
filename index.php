<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
  <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Crypto Calculator</title>
  <meta name="author" content="Iriasu Koshiro">
  <meta name="description" content="What if I invested in cryptocurrency when it was .. ?">
  <meta name="keywords" content="crypto,currency,bitcoin,ripple,hodl,low,sell,high,market,bubble,fomo,fud,facebook">
  <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="assets/stylesheet.css" type="text/css">
  <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  </head>
  <body>
	<div class="wrapper">
		<span class="title">
		<h3> What if the coin/token hits $... dollars? </h3>
		</span>
		<div class="flex-container">
			<div class="wallet">
				<p><h3>Fill the fields in</h3></p>
				<p>Invested money <input id="wallet" class="dollar" type="number" min="0.01" name="wallet" value="100"></p>
				<p>Price per coin/token before <input id="ctprice" class="dollar" type="number" name="wallet" value="0.001"></p>
				<p>Price per coin/token after <input id="ctprice_future" class="dollar" type="number" name="wallet" value="10"></p>
			</div>
			
			<div class="wallet_future">
				<p><h3>Estimated results</h3></p>
				<p>New balance<input id="wallet_future"class="dollar disabled" type="text" name="wallet" disabled value="1,000,000.00"></p>
				<p>Coins/Tokens <input id="ct" class="disabled" type="text" name="wallet" disabled value="100,000.000"></p>
				<div class="winloss">
					<p>Profit <br><input id="profit" class="dollar" type="text"  value="999,900.00" disabled></p>
					<p>Multiplier <input id="x" type="text"  disabled value="10,000x"></p>
					<p>Percent <input id="percent" type="text"  disabled value="100,000.00%"></p>
				</div>
				<!--<p>Coins/Tokens <input id="ct_future" class="disabled" type="text" name="wallet" disabled></p>-->
			</div>
			
			<div class="warning">
				<small> <i class="em-svg em-chart_with_upwards_trend" style="margin-top:-5px;"></i> This is a tool to see how much money you'd make if your coin/token hits a certain dollar.</small>
			</div>
			
		
		
		</div>
			<footer>
			This is a non-profit (no ads). <br>Please donate some crypto to show some love <i class="em-svg em-revolving_hearts"></i> !<br>
				
				<br>
				<b>Bitcoin:</b> 159ScA6oHS8YriEG5LvczDrC7NBziUxXho<br>
				<b>Ethereum:</b> 0x16b0fb05a2fea8698ab7b9c0beadba40f35ed9c5 <br>
			</footer>
		
		
	</div>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js" type="text/javascript"></script>
  <script src="assets/ajax.js"></script>
  </body>
</html>
