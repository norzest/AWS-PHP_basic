<!DOCTYPE HTML>

<html>
	<head>
		<title>갤러리</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

			<div id="wrapper" class="divided">
				<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
					<div class="content">
						<h2>갤러리</h2>
						<p>사진들을 관람하실 수 있습니다.</p>
						<ul class="actions"><li><a href="index.php" class="button primary">홈</a></li></ul>
					</div>
					<div class="image">
						<img src="images/spotlight01.jpg" alt="" />
					</div>
				</section>

				<!-- Additional Elements -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<div class="index align-left">

								<!-- Images -->
						<section>
							<header>
								<h3>사진들</h3>
							</header>
							<div class="content">

								<span class="image fit"><img id="itemImg1" name="itemImg1" src="https://s2014156026.s3-ap-northeast-1.amazonaws.com/1.jpg"/></span>
								<span class="image fit"><img id="itemImg2" name="itemImg2" src="https://s2014156026.s3-ap-northeast-1.amazonaws.com/2.jpg"/></span>
								<span class="image fit"><img id="itemImg3" name="itemImg3" src="https://s2014156026.s3-ap-northeast-1.amazonaws.com/3.jpg"/></span>
								<span class="image fit"><img id="itemImg4" name="itemImg4" src="https://s2014156026.s3-ap-northeast-1.amazonaws.com/4.jpg"/></span>

							</div>
						</section>


						</div>
					</div>
				</section>
			</div>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

<script>
    var tmpDate = new Date();
		$("#itemImg1").attr("src", "https://s2014156026.s3-ap-northeast-1.amazonaws.com/1.jpg?" + tmpDate.getTime());
		$("#itemImg2").attr("src", "https://s2014156026.s3-ap-northeast-1.amazonaws.com/2.jpg?" + tmpDate.getTime());
		$("#itemImg3").attr("src", "https://s2014156026.s3-ap-northeast-1.amazonaws.com/3.jpg?" + tmpDate.getTime());
		$("#itemImg4").attr("src", "https://s2014156026.s3-ap-northeast-1.amazonaws.com/4.jpg?" + tmpDate.getTime());
</script>
