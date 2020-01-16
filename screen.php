<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/mainUI.css">
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0' name='viewport'/>
		<meta name="theme-color" content="#636ad5">
		<title>Pubquiz screen 2020</title>

		<style>
			.contentPage {
				overflow: hidden;
			}
			.contentPage .scoreBar {
				position: relative;
				float: left;
				left: 17%;
				top: 100%;
				
				padding: 5px;
				margin: -5px 0;

				margin-left: calc((100% - 2 * 17% - 100% / 5 * 3) / 4);
				width: calc(100% / 5 - 5px * 2);
				height: 100%;


				border-radius: 10px 10px 0 0;
				
				transition: all .5s;
			}

			.contentPage .scoreBar.first {
				background: #fc5;
				box-shadow: 0 0 30px 10px rgba(255, 204, 85, .15);
			}
			.contentPage .scoreBar.second {
				background: #D3D3D3;
				box-shadow: 0 0 30px 10px rgba(211, 211, 211, .15);
			}
			.contentPage .scoreBar.third {
				background: #b87333;
				box-shadow: 0 0 30px 10px rgba(184, 115, 51, .15);
			}


			.scoreBar .positionIndicatorHolder {
				position: absolute;
				top: -200px;
				
				width: 100%;
				height: 100%;
			}
			
			.scoreBar.first .positionIndicatorHolder {
				background: url("images/trophyGold.png"); 
				background-size: 30% auto;
				background-position: 50% 10%;
				background-repeat: no-repeat;
			}
			.scoreBar.second .positionIndicatorHolder {
				background: url("images/trophySilver.png");
				background-size: 30% auto;
				background-position: 50% 10%;
				background-repeat: no-repeat;
			}
			.scoreBar.third .positionIndicatorHolder {
				background: url("images/trophyBronze.png");
				background-size: 30% auto;
				background-position: 50% 10%;
				background-repeat: no-repeat;
			}
			


			.scoreBar .teamNameHolder {
				position: relative;
				padding-top: 20px;
				font-size: 25px;
				color: #444;
			}

			.scoreBar .scoreHolder {
				position: relative;
				
				margin: auto;
				margin-top: 20px;

				background: rgba(255, 255, 255, .5);
				width: 100px;

				padding: 5px;
				border-radius: 5px;


				font-size: 25px;
				color: #444;
			}


			.contentPage {
				height: calc(100vh - 30px * 2) !important;
			}
			



			body {
				position: fixed;
				top: 0;
				left: 0;

				margin: 0;

				width: 100vw;
				height: 100vh;
				opacity: .9;
				background: #eee;
				transition: all .3s;
			}



			.contentPage .catagoryHolder {
				position: relative;
				
				margin: auto;
				margin-top: 20px;

				width: auto;
				max-width: 80vw;

				display: inline-block;
				
				padding: 10px 15px;

				/*background: rgba(255, 255, 255, .85);*/
				border-radius: 10px;
				box-shadow: 5px 5px 30px 10px rgba(0, 0, 0, .01);

				font-size: 25px;
				/*color: #333;*/
				color: #eee;

				transition: all .3s;
			}


		


			#questionHolder {
				position: relative;
				
				margin: auto;
				top: 40%;
				transform: translateY(-50%);

				width: auto;
				max-width: 80vw;
				height: auto;


				display: inline-block;
				
				padding: 25px;


				background: rgba(255, 255, 255, .9);
				border-radius: 10px;
				box-shadow: 5px 5px 30px 10px rgba(0, 0, 0, .05);

				font-size: 40px;
				color: #333;

				transition: all .3s;
			}

			#questionHolder.hide {
				animation: dropOut 0.6s 1;
				animation-fill-mode: forwards;
			}

			#questionHolder:not(.hide) {
				animation: dropIn 0.6s 1;
				animation-fill-mode: forwards;
			}


			@keyframes dropOut {
			    0%   {transform: scale(1) translateY(-50%); opacity: 1}
			    30%   {transform: scale(1.1) translateY(-50%); opacity: 1}
			  	100%   {transform: scale(.5) translateY(-50%); opacity: 0}
			}
			@keyframes dropIn {
			    0%   {transform: scale(0) translateY(-50%); opacity: 0}
			    60%   {transform: scale(1.1) translateY(-50%); opacity: 1}
			    70%   {transform: scale(1.1) translateY(-50%);}
			  	100%   {transform: scale(1) translateY(-50%)}
			}


		</style>
	</head>
	<body>
	
		<div id="mainContentHolder">
			<div class="contentPage hide">
				<div class="scoreBar">
					<div class="positionIndicatorHolder"></div>
					<div class="text teamNameHolder">Team bolsons</div>
					<div class="text scoreHolder"></div>
				</div>
				<div class="scoreBar">
					<div class="positionIndicatorHolder"></div>
					<div class="text teamNameHolder">Team bolsons</div>
					<div class="text scoreHolder"></div>
				</div>
				<div class="scoreBar">
					<div class="positionIndicatorHolder"></div>
					<div class="text teamNameHolder">Team bolsons</div>
					<div class="text scoreHolder"></div>
				</div>
			</div>
			
			<div class="contentPage">
			
				<div class="centerAligner">
					<div class="text hide catagoryHolder">
					</div>
					<br>

					<div class="text hide" id="questionHolder">
					</div>
				</div>
			</div>
		</div>


		<script src="/JS/jQuery.js"></script>
		<script src="js/extraFunctions.js"></script>
		<script src="js/page.js"></script>

		<script src="js/server.js"></script>

		<script>
			const Server = new _Server_displayer(89130);

		</script>

	</body>
</html>