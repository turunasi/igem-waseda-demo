<?php
	$events_json_source = file_get_contents('data/events.json');
	$events = json_decode($events_json_source, true);
	$display_flag = is_array($events)? true :false;
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
		  	<div class="section">
				<h5>Event</h5>
				<div class="divider"></div>
				<div class="row">
					<?php if ($display_flag) { ?>
						<?php foreach($events as $id => $event) {?>
						<a class="modal-trigger" href="#modal<?php echo $id; ?>">
							<div class="col s12 m4 l3">
								<div class="card teal lighten-1">
									<div class="card-content white-text">
										<h6><?php echo $event['title']?: 'タイトル未設定'; ?></h6>
										<img class="circle responsive-img" src="img/article.png">
									</div>
								</div>
							</div>
						</a>
						<div id="modal<?php echo $id; ?>" class="modal">
				  			<div class="modal-content">
								<h4><?php echo $event['title']?: 'タイトル未設定'; ?></h4>
								<p><?php echo $event['content']?: '本文未設定'; ?></p>
						  	</div>
						  	<div class="modal-footer">
								<a href="<?php echo $event['anchor']; ?>" class="modal-close waves-effect waves-red btn-flat">More</a>
								<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
					 		</div>
						</div>
					<?php  }} else { ?>
						<div class="col s12">
							<h3 class="center-align">まだ記事は投稿されていません</h3>
						</div>
				    <?php } ?>
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