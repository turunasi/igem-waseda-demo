<!DOCTYPE html>
<html>
<head>
	<?php require_once('temp/head.php') ?>
</head>
<body>
    <header>
		<?php require_once('temp/header.php') ?>
    </header>
    <div class="wrapper">
		<div class="container">
		  	<div id="information" class="section scrollspy">
				<h5>About us</h5>
				<div class="divider"></div>
				<div class="row valign-wrapper">
					<i class="large material-icons col m4 hide-on-small-only center-align">flag</i>
					<div class="col m8">
						<p>
							私たちは合成生物学の国際大会であるiGEMに挑戦しているチームです。
							主に早稲田大学の先進理工学部の学生を中心に立ち上げ、現在では文理関係なく様々なバックグランドをもつメンバーが在籍してます。
							私たちはiGEMの2020年大会での金賞の獲得とファイナリストになることを目標に活動しています。
							主に週1回のミーティングを行い、チームの方向性や各自の課題を明確にし、チームと個人が最大限成長できるように努めています。
						</p>
					</div>
				</div>
			</div>
		  	<div id="contact" class="section scrollspy">
				<h5>Contact</h5>
				<div class="divider"></div>
				<div class="row valign-wrapper">
			  		<div class="col m8">
						<p>
				  			また私たちは、合成生物学について真剣に学び、考える仲間たちを募集しています。興味がある人は気軽に見学にいらしてください。こちらまで連絡お願いします。
						</p>
			  		</div>
			  		<i class="large material-icons col m4 hide-on-small-only center-align">contact_mail</i>
				</div>
				<div class="row">
			  		<div class="col s12 m6">
						<div class="card-panel grey lighten-5 z-depth-1 row">
				  			<div class="col s3 m2">
								<i class="small material-icons">email</i>
				  			</div>
				  			<div class="col s9 m4">
								<a href="mailto:igem2020admin@list.waseda.jp">
						  			<span class="black-text">
										igem2020admin@list.waseda.jp
						  			</span>
								</a>
				  			</div>
						</div>
			  		</div>
			  		<div class="col s12 m6">
						<div class="card-panel grey lighten-5 z-depth-1 row">
				  			<div class="col s3 m2">
								<img src="img/twitter.png" alt="" class="circle responsive-img" width="30px">
				  			</div>
				  		<div class="col s9 m4">
							<span class="black-text">
						  		@Wasedaigem
							</span>
				  		</div>
						</div>
			  		</div>
				</div>
		  	</div>
		</div>
	</div>
	<script type="text/javascript">
		const screen_size_px = window.parent.screen.width;
		const screen_size = parseInt(screen_size_px);
		if (screen_size >= 600) {
			document.getElementById('twitter').setAttribute('data-width', screen_size*0.85/2);
		} else {
			document.getElementById('twitter').setAttribute('data-width', screen_size);
		}
	</script>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
	M.AutoInit();
	
	document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.scrollspy');
    	var instances = M.ScrollSpy.init(elems,{"scrollOffset":50});
  	});
</script>
</html>
