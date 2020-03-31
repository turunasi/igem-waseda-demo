<?php
	$articles_limit = 2;

	$events_json_source = file_get_contents('data/events.json');
	$events = json_decode($events_json_source, true);
	$events_display_flag = is_array($events)? true :false;
	$new_events = array();
	for($i = 1; $i <= $articles_limit; $i++) {
		$new_event = array_pop($events);
		if (is_null($new_event)) break;
		$new_events[] = $new_event;
	}

	$activities_json_source = file_get_contents('data/activities.json');
	$activities = json_decode($activities_json_source, true);
	$activity_display_flag = is_array($activities)? true :false;
	$new_activities = array();
	for($i = 1; $i <= $articles_limit; $i++) {
		$new_activity = array_pop($activities);
		if (is_null($new_activity)) break;
		$new_activities[] = $new_activity;
	}
?>
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
		  	<div class="section scrollspy" id="igem">
				<h5>iGEMとは</h5>
				<div class="divider"></div>
				<p>iGEMとはiGEM( International Genetically Engineered Machine competition)とは合成生物学の世界大会のことです。この大会は年に一回ボストンで開催されます。そこでは遺伝子工学によって自分たちで新たな生物的なパーツを作り出します。その機能、実用性、実現性などをチームでプレゼンし、競い合います。iGEMは2004年に米5大学間の大会として始まり、今では世界各国から約300チーム、4000人が集まる国際大会へと発展しました。</p>
				<a href="/igem.php" class="waves-effect waves-light btn-small right red lighten-1"><i class="material-icons left">arrow_forward</i>MORE</a>
		  	</div>
		  	<div class="section scrollspy" id="about">
				<h5>About us</h5>
				<div class="divider"></div>
				<p>私たちはiGEM(合成生物学の世界大会)に挑戦している早稲田大学のチームです。先進理工学部電気情報生命工学科を中心とした現在10名ほどで、2020年大会の出場、金賞の獲得を目標に活動しています。本大学初めての本格的なiGEMチームということもあり、現在はチームの基盤づくりや生物、情報分野の基礎的な勉強に励んでいます。</p>
				<a href="/about.php" class="waves-effect waves-light btn-small right red"><i class="material-icons left">arrow_forward</i>MORE</a>
		  	</div>
		  	<div class="section scrollspy" id="event">
				<h5>Event</h5>
				<div class="divider"></div>
				<div class="row">
					<?php if($events_display_flag) {?>
						<?php foreach($new_events as $id => $new_event) {?>
						<div class="col s12 m6">
							<a href="<?php echo $new_event['anchor'] ?>">
								<div class="card teal lighten-1">
									<div class="card-content white-text">
										<div class="row">
											<img class="circle responsive-img col" src="img/article.png">
											<div class="col s8">
												<h6><?php echo $new_event['title'] ?: 'タイトル未設定';?></h6>
												<p class="truncate"><?php echo $new_event['content'] ?: '本文未設定'; ?></p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php }} else { ?>
						<div class="col s12">
							<h3 class="center-align">まだ記事は投稿されていません</h3>
						</div>
				    <?php } ?>
				</div>
			</div>
		  	<div class="section scrollspy" id="activity">
				<h5>Activity</h5>
				<div class="divider"></div>
				<div class="row">
					<?php if($activity_display_flag) {?>
						<?php foreach($new_activities as $id => $new_activity) {?>
						<div class="col s12 m6">
							<a href="<?php echo $new_activity['anchor'] ?>">
								<div class="card teal lighten-1">
									<div class="card-content white-text">
										<div class="row">
											<img class="circle responsive-img col s4" src="img/article.png">
											<div class="col s8">
												<h6><?php echo $new_activity['title'] ?: 'タイトル未設定'?></h6>
												<p class="truncate"><?php echo $new_activity['content'] ?: '本文未設定'?></p>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>
					<?php }} else { ?>
						<div class="col s12">
							<h3 class="center-align">まだ記事は投稿されていません</h3>
						</div>
				    <?php } ?>
				</div>
			</div>
		  	<div class="section">
				<h5>twitter</h5>
				<div class="divider"></div>
				<a class="twitter-timeline" id="twitter" data-width="100" data-lang="ja" data-theme="dark" data-link-color="#26a69a" href="https://twitter.com/Wasedaigem?ref_src=twsrc%5Etfw">
					Tweets by Wasedaigem
				</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
