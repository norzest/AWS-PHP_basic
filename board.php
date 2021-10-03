<?php include 'db_load.php'; ?>
<?php include 'db_delete.php'; ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>게시판</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

			<div id="wrapper" class="divided">
				<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
					<div class="content">
						<h2>게시판</h2>
						<p>별도의 로그인 없이 게시판에 익명으로 글을 남길 수 있습니다.</p>
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

                <!-- Table -->
                  <section>
                    <header>
                      <h3>게시글</h3>
                    </header>
                    <div class="content">

                      <div class="table-wrapper">
                        <table>
                          <thead>
                            <tr>
                              <th width="100">번호</th>
                              <th width="300">내용</th>
                              <th width="100">이름</th>
                            </tr>
                          </thead>
                          <tbody>
														<?php
														table_load($conn);
														?>
                          </tbody>
                        </table>
                      </div>
											<div class="content">
												<form method="post" action="#">
													<div class="fields">
												<div class="field half">
													<label for="name">번호</label>
													<input type="text" name="d_num" id="d_num" value="" />
												</div>
												<div class="field half">
													<label for="password">비밀번호</label>
													<input type="password" name="d_password" id="d_password" value="" />
												</div>
												</div>
												<ul class="actions">
												<li><form action="db_delete.php" method="post">
													<input type="submit" name="delete" id="delete" value="삭제" />
												</form></li>
												</ul>
												</form>
                    	</div>
										</div>
                  </section>

                  <!-- Form -->
                  <section>
                    <header>
                      <h3>글쓰기</h3>
                    </header>
                    <div class="content">

                      <form method="post" action="#">
                        <div class="fields">
                          <div class="field half">
                            <label for="name">이름</label>
                            <input type="text" name="name" id="name" value="" />
                          </div>
                          <div class="field half">
                            <label for="password">비밀번호</label>
                            <input type="password" name="password" id="password" value="" />
                          </div>
                          <div class="field">
                            <label for="message">내용</label>
                            <input type="text" name="message" id="message" value="" />
                          </div>
                        </div>
                        <ul class="actions">
                          <li><form action="db_load.php" method="post">
														<input type="submit" name="submit" id="submit" value="작성" />
													</form></li>
                        </ul>
                      </form>

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
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
