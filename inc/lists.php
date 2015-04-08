<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://s.w.org/wp-includes/css/dashicons.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
		html{height:100%;width:100%;padding:0;margin:0;}
		body{margin:0;padding:0;padding-bottom:60px;height:100%;width:100%;overflow:hidden;}
		div,section,article,header,footer,main,content,aside,sidebar{box-sizing:border-box;}
		.btn,.form-control,input,textarea,button,.panel,.table,.input-group-addon{border-radius:2px;}
		a:focus{outline:none;}
		section.icons{padding:15px;}
		section.icons > ul.nav.nav-tabs{padding:0 10px;}
		section.icons > .tab-content{padding-top:15px;}
		section.icons > .tab-content > .tab-pane > ul.list{list-style:none;padding:15px;margin:0;overflow:auto;border:1px solid #DDD;background-color:#F5F5F5;}
		section.icons > .tab-content > .tab-pane > ul.list > li{background-color:#999;width:50px;height:50px;display:inline-block;margin:0 4px 4px 0;padding:0;}
		section.icons > .tab-content > .tab-pane > ul.list > li > button{position:relative;width:100%;height:100%;display:block;}
		section.icons > .tab-content > .tab-pane > ul.list > li > button > span{font-size:1.5em;width:auto;height:auto;}
		section.icons > .tab-content > .tab-pane > ul.list > li > button > span.dashicons{font-size:1.9em;width:auto;height:auto;}
		footer.footer{position:fixed;bottom:0;padding:10px;background-color:#F5F5F5;border-top:1px solid #DDD;width:100%;}
	</style>
</head>
<body>
	<section class="icons">
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#glyphicon" data-toggle="tab">Glyphicon</a></li>
			<li role="presentation"><a href="#dashicons" data-toggle="tab">Dashicons</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="glyphicon">
				<!-- <div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
							<input type="text" class="form-control" role="search" placeholder="Search Icon" />
						</div>
					</div>
				</div> -->
				<ul class="list">
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="asterisk"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="plus"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="euro"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="eur"><span class="glyphicon glyphicon-eur" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="minus"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cloud"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="envelope"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="pencil"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="glass"><span class="glyphicon glyphicon-glass" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="music"><span class="glyphicon glyphicon-music" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="heart"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="star"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="star-empty"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="user"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="film"><span class="glyphicon glyphicon-film" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="th-large"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="th"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="th-list"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ok"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="remove"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="zoom-in"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="zoom-out"><span class="glyphicon glyphicon-zoom-out" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="off"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="signal"><span class="glyphicon glyphicon-signal" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cog"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="trash"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="file"><span class="glyphicon glyphicon-file" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="road"><span class="glyphicon glyphicon-road" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="download-alt"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="download"><span class="glyphicon glyphicon-download" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="upload"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="inbox"><span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="play-circle"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="repeat"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="refresh"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="list-alt"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="lock"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="flag"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="headphones"><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="volume-off"><span class="glyphicon glyphicon-volume-off" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="volume-down"><span class="glyphicon glyphicon-volume-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="volume-up"><span class="glyphicon glyphicon-volume-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="qrcode"><span class="glyphicon glyphicon-qrcode" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="barcode"><span class="glyphicon glyphicon-barcode" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tag"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tags"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="book"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bookmark"><span class="glyphicon glyphicon-bookmark" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="print"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="camera"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="font"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bold"><span class="glyphicon glyphicon-bold" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="italic"><span class="glyphicon glyphicon-italic" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="text-height"><span class="glyphicon glyphicon-text-height" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="text-width"><span class="glyphicon glyphicon-text-width" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="align-left"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="align-center"><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="align-right"><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="align-justify"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="list"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="indent-left"><span class="glyphicon glyphicon-indent-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="indent-right"><span class="glyphicon glyphicon-indent-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="facetime-video"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="picture"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="map-marker"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="adjust"><span class="glyphicon glyphicon-adjust" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tint"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="edit"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="share"><span class="glyphicon glyphicon-share" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="check"><span class="glyphicon glyphicon-check" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="move"><span class="glyphicon glyphicon-move" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="step-backward"><span class="glyphicon glyphicon-step-backward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="fast-backward"><span class="glyphicon glyphicon-fast-backward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="backward"><span class="glyphicon glyphicon-backward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="play"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="pause"><span class="glyphicon glyphicon-pause" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="stop"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="forward"><span class="glyphicon glyphicon-forward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="fast-forward"><span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="step-forward"><span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="eject"><span class="glyphicon glyphicon-eject" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="chevron-left"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="chevron-right"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="plus-sign"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="minus-sign"><span class="glyphicon glyphicon-minus-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="remove-sign"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ok-sign"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="question-sign"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="info-sign"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="screenshot"><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="remove-circle"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ok-circle"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ban-circle"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="arrow-left"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="arrow-right"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="arrow-up"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="arrow-down"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="share-alt"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="resize-full"><span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="resize-small"><span class="glyphicon glyphicon-resize-small" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="exclamation-sign"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="gift"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="leaf"><span class="glyphicon glyphicon-leaf" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="fire"><span class="glyphicon glyphicon-fire" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="eye-open"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="eye-close"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="warning-sign"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="plane"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="calendar"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="random"><span class="glyphicon glyphicon-random" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="comment"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="magnet"><span class="glyphicon glyphicon-magnet" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="chevron-up"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="chevron-down"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="retweet"><span class="glyphicon glyphicon-retweet" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="shopping-cart"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="folder-close"><span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="folder-open"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="resize-vertical"><span class="glyphicon glyphicon-resize-vertical" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="resize-horizontal"><span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hdd"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bullhorn"><span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bell"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="certificate"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="thumbs-up"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="thumbs-down"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hand-right"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hand-left"><span class="glyphicon glyphicon-hand-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hand-up"><span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hand-down"><span class="glyphicon glyphicon-hand-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="circle-arrow-right"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="circle-arrow-left"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="circle-arrow-up"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="circle-arrow-down"><span class="glyphicon glyphicon-circle-arrow-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="globe"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="wrench"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tasks"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="filter"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="briefcase"><span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="fullscreen"><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="dashboard"><span class="glyphicon glyphicon-dashboard" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="paperclip"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="heart-empty"><span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="link"><span class="glyphicon glyphicon-link" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="phone"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="pushpin"><span class="glyphicon glyphicon-pushpin" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="usd"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="gbp"><span class="glyphicon glyphicon-gbp" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-alphabet"><span class="glyphicon glyphicon-sort-by-alphabet" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-alphabet-alt"><span class="glyphicon glyphicon-sort-by-alphabet-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-order"><span class="glyphicon glyphicon-sort-by-order" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-order-alt"><span class="glyphicon glyphicon-sort-by-order-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-attributes"><span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sort-by-attributes-alt"><span class="glyphicon glyphicon-sort-by-attributes-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="unchecked"><span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="expand"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="collapse-down"><span class="glyphicon glyphicon-collapse-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="collapse-up"><span class="glyphicon glyphicon-collapse-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="log-in"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="flash"><span class="glyphicon glyphicon-flash" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="log-out"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="new-window"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="record"><span class="glyphicon glyphicon-record" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="save"><span class="glyphicon glyphicon-save" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="open"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="saved"><span class="glyphicon glyphicon-saved" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="import"><span class="glyphicon glyphicon-import" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="export"><span class="glyphicon glyphicon-export" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="send"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="floppy-disk"><span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="floppy-saved"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="floppy-remove"><span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="floppy-save"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="floppy-open"><span class="glyphicon glyphicon-floppy-open" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="credit-card"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="transfer"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cutlery"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="header"><span class="glyphicon glyphicon-header" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="compressed"><span class="glyphicon glyphicon-compressed" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="earphone"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="phone-alt"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tower"><span class="glyphicon glyphicon-tower" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="stats"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sd-video"><span class="glyphicon glyphicon-sd-video" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hd-video"><span class="glyphicon glyphicon-hd-video" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="subtitles"><span class="glyphicon glyphicon-subtitles" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sound-stereo"><span class="glyphicon glyphicon-sound-stereo" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sound-dolby"><span class="glyphicon glyphicon-sound-dolby" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sound-5-1"><span class="glyphicon glyphicon-sound-5-1" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sound-6-1"><span class="glyphicon glyphicon-sound-6-1" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sound-7-1"><span class="glyphicon glyphicon-sound-7-1" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="copyright-mark"><span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="registration-mark"><span class="glyphicon glyphicon-registration-mark" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cloud-download"><span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cloud-upload"><span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tree-conifer"><span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tree-deciduous"><span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="cd"><span class="glyphicon glyphicon-cd" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="save-file"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="open-file"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="level-up"><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="copy"><span class="glyphicon glyphicon-copy" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="paste"><span class="glyphicon glyphicon-paste" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="alert"><span class="glyphicon glyphicon-alert" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="equalizer"><span class="glyphicon glyphicon-equalizer" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="king"><span class="glyphicon glyphicon-king" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="queen"><span class="glyphicon glyphicon-queen" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="pawn"><span class="glyphicon glyphicon-pawn" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bishop"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="knight"><span class="glyphicon glyphicon-knight" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="baby-formula"><span class="glyphicon glyphicon-baby-formula" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="tent"><span class="glyphicon glyphicon-tent" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="blackboard"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bed"><span class="glyphicon glyphicon-bed" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="apple"><span class="glyphicon glyphicon-apple" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="erase"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="hourglass"><span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="lamp"><span class="glyphicon glyphicon-lamp" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="duplicate"><span class="glyphicon glyphicon-duplicate" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="piggy-bank"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="scissors"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="bitcoin"><span class="glyphicon glyphicon-bitcoin" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="btc"><span class="glyphicon glyphicon-btc" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="xbt"><span class="glyphicon glyphicon-xbt" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="yen"><span class="glyphicon glyphicon-yen" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="jpy"><span class="glyphicon glyphicon-jpy" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ruble"><span class="glyphicon glyphicon-ruble" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="rub"><span class="glyphicon glyphicon-rub" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="scale"><span class="glyphicon glyphicon-scale" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ice-lolly"><span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="ice-lolly-tasted"><span class="glyphicon glyphicon-ice-lolly-tasted" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="education"><span class="glyphicon glyphicon-education" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="option-horizontal"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="option-vertical"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="menu-hamburger"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="modal-window"><span class="glyphicon glyphicon-modal-window" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="oil"><span class="glyphicon glyphicon-oil" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="grain"><span class="glyphicon glyphicon-grain" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="sunglasses"><span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="text-size"><span class="glyphicon glyphicon-text-size" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="text-color"><span class="glyphicon glyphicon-text-color" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="text-background"><span class="glyphicon glyphicon-text-background" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-top"><span class="glyphicon glyphicon-object-align-top" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-bottom"><span class="glyphicon glyphicon-object-align-bottom" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-horizontal"><span class="glyphicon glyphicon-object-align-horizontal" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-left"><span class="glyphicon glyphicon-object-align-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-vertical"><span class="glyphicon glyphicon-object-align-vertical" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="object-align-right"><span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="triangle-right"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="triangle-left"><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="triangle-bottom"><span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="triangle-top"><span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="console"><span class="glyphicon glyphicon-console" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="superscript"><span class="glyphicon glyphicon-superscript" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="subscript"><span class="glyphicon glyphicon-subscript" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="menu-left"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="menu-right"><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="menu-down"><span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="glyphicon" data-icon="menu-up"><span class="glyphicon glyphicon-menu-up" aria-hidden="true"></span></button></li>
				</ul>
			</div>
			<div class="tab-pane" id="dashicons">
				<!-- <div class="row">
					<div class="col-md-3">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
							<input type="text" class="form-control" role="search" placeholder="Search Icon">
						</div>
					</div>
				</div> -->
				<ul class="list">
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="menu"><span class="dashicons dashicons-menu"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-site"><span class="dashicons dashicons-admin-site"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="dashboard"><span class="dashicons dashicons-dashboard"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-post"><span class="dashicons dashicons-admin-post"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-media"><span class="dashicons dashicons-admin-media"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-links"><span class="dashicons dashicons-admin-links"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-page"><span class="dashicons dashicons-admin-page"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-comments"><span class="dashicons dashicons-admin-comments"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-appearance"><span class="dashicons dashicons-admin-appearance"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-plugins"><span class="dashicons dashicons-admin-plugins"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-users"><span class="dashicons dashicons-admin-users"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-tools"><span class="dashicons dashicons-admin-tools"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-settings"><span class="dashicons dashicons-admin-settings"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-network"><span class="dashicons dashicons-admin-network"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-home"><span class="dashicons dashicons-admin-home"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-generic"><span class="dashicons dashicons-admin-generic"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="admin-collapse"><span class="dashicons dashicons-admin-collapse"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-write-blog"><span class="dashicons dashicons-welcome-write-blog"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-add-page"><span class="dashicons dashicons-welcome-add-page"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-view-site"><span class="dashicons dashicons-welcome-view-site"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-widgets-menus"><span class="dashicons dashicons-welcome-widgets-menus"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-comments"><span class="dashicons dashicons-welcome-comments"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="welcome-learn-more"><span class="dashicons dashicons-welcome-learn-more"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-aside"><span class="dashicons dashicons-format-aside"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-image"><span class="dashicons dashicons-format-image"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-gallery"><span class="dashicons dashicons-format-gallery"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-video"><span class="dashicons dashicons-format-video"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-status"><span class="dashicons dashicons-format-status"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-quote"><span class="dashicons dashicons-format-quote"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-chat"><span class="dashicons dashicons-format-chat"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="format-audio"><span class="dashicons dashicons-format-audio"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="camera"><span class="dashicons dashicons-camera"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="images-alt"><span class="dashicons dashicons-images-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="images-alt2"><span class="dashicons dashicons-images-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="video-alt"><span class="dashicons dashicons-video-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="video-alt2"><span class="dashicons dashicons-video-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="video-alt3"><span class="dashicons dashicons-video-alt3"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-archive"><span class="dashicons dashicons-media-archive"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-audio"><span class="dashicons dashicons-media-audio"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-code"><span class="dashicons dashicons-media-code"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-default"><span class="dashicons dashicons-media-default"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-document"><span class="dashicons dashicons-media-document"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-interactive"><span class="dashicons dashicons-media-interactive"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-spreadsheet"><span class="dashicons dashicons-media-spreadsheet"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-text"><span class="dashicons dashicons-media-text"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="media-video"><span class="dashicons dashicons-media-video"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="playlist-audio"><span class="dashicons dashicons-playlist-audio"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="playlist-video"><span class="dashicons dashicons-playlist-video"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-play"><span class="dashicons dashicons-controls-play"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-pause"><span class="dashicons dashicons-controls-pause"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-forward"><span class="dashicons dashicons-controls-forward"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-skipforward"><span class="dashicons dashicons-controls-skipforward"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-back"><span class="dashicons dashicons-controls-back"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-skipback"><span class="dashicons dashicons-controls-skipback"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-repeat"><span class="dashicons dashicons-controls-repeat"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-volumeon"><span class="dashicons dashicons-controls-volumeon"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="controls-volumeoff"><span class="dashicons dashicons-controls-volumeoff"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="image-crop"><span class="dashicons dashicons-image-crop"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="image-rotate-left"><span class="dashicons dashicons-image-rotate-left"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="image-rotate-right"><span class="dashicons dashicons-image-rotate-right"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="image-flip-vertical"><span class="dashicons dashicons-image-flip-vertical"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="image-flip-horizontal"><span class="dashicons dashicons-image-flip-horizontal"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="undo"><span class="dashicons dashicons-undo"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="redo"><span class="dashicons dashicons-redo"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-bold"><span class="dashicons dashicons-editor-bold"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-italic"><span class="dashicons dashicons-editor-italic"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-ul"><span class="dashicons dashicons-editor-ul"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-ol"><span class="dashicons dashicons-editor-ol"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-quote"><span class="dashicons dashicons-editor-quote"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-alignleft"><span class="dashicons dashicons-editor-alignleft"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-aligncenter"><span class="dashicons dashicons-editor-aligncenter"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-alignright"><span class="dashicons dashicons-editor-alignright"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-insertmore"><span class="dashicons dashicons-editor-insertmore"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-spellcheck"><span class="dashicons dashicons-editor-spellcheck"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-expand"><span class="dashicons dashicons-editor-expand"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-contract"><span class="dashicons dashicons-editor-contract"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-kitchensink"><span class="dashicons dashicons-editor-kitchensink"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-underline"><span class="dashicons dashicons-editor-underline"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-justify"><span class="dashicons dashicons-editor-justify"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-textcolor"><span class="dashicons dashicons-editor-textcolor"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-paste-word"><span class="dashicons dashicons-editor-paste-word"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-paste-text"><span class="dashicons dashicons-editor-paste-text"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-removeformatting"><span class="dashicons dashicons-editor-removeformatting"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-video"><span class="dashicons dashicons-editor-video"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-customchar"><span class="dashicons dashicons-editor-customchar"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-outdent"><span class="dashicons dashicons-editor-outdent"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-indent"><span class="dashicons dashicons-editor-indent"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-help"><span class="dashicons dashicons-editor-help"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-strikethrough"><span class="dashicons dashicons-editor-strikethrough"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-unlink"><span class="dashicons dashicons-editor-unlink"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-rtl"><span class="dashicons dashicons-editor-rtl"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-break"><span class="dashicons dashicons-editor-break"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-code"><span class="dashicons dashicons-editor-code"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="editor-paragraph"><span class="dashicons dashicons-editor-paragraph"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="align-left"><span class="dashicons dashicons-align-left"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="align-right"><span class="dashicons dashicons-align-right"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="align-center"><span class="dashicons dashicons-align-center"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="align-none"><span class="dashicons dashicons-align-none"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="lock"><span class="dashicons dashicons-lock"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="calendar"><span class="dashicons dashicons-calendar"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="calendar-alt"><span class="dashicons dashicons-calendar-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="visibility"><span class="dashicons dashicons-visibility"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="post-status"><span class="dashicons dashicons-post-status"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="edit"><span class="dashicons dashicons-edit"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="trash"><span class="dashicons dashicons-trash"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="external"><span class="dashicons dashicons-external"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-up"><span class="dashicons dashicons-arrow-up"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-down"><span class="dashicons dashicons-arrow-down"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-right"><span class="dashicons dashicons-arrow-right"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-left"><span class="dashicons dashicons-arrow-left"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-up-alt"><span class="dashicons dashicons-arrow-up-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-down-alt"><span class="dashicons dashicons-arrow-down-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-right-alt"><span class="dashicons dashicons-arrow-right-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-left-alt"><span class="dashicons dashicons-arrow-left-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-up-alt2"><span class="dashicons dashicons-arrow-up-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-down-alt2"><span class="dashicons dashicons-arrow-down-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-right-alt2"><span class="dashicons dashicons-arrow-right-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="arrow-left-alt2"><span class="dashicons dashicons-arrow-left-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="sort"><span class="dashicons dashicons-sort"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="leftright"><span class="dashicons dashicons-leftright"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="randomize"><span class="dashicons dashicons-randomize"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="list-view"><span class="dashicons dashicons-list-view"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="exerpt-view"><span class="dashicons dashicons-exerpt-view"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="grid-view"><span class="dashicons dashicons-grid-view"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="share"><span class="dashicons dashicons-share"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="share-alt"><span class="dashicons dashicons-share-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="share-alt2"><span class="dashicons dashicons-share-alt2"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="twitter"><span class="dashicons dashicons-twitter"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="rss"><span class="dashicons dashicons-rss"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="email"><span class="dashicons dashicons-email"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="email-alt"><span class="dashicons dashicons-email-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="facebook"><span class="dashicons dashicons-facebook"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="facebook-alt"><span class="dashicons dashicons-facebook-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="googleplus"><span class="dashicons dashicons-googleplus"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="networking"><span class="dashicons dashicons-networking"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="hammer"><span class="dashicons dashicons-hammer"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="art"><span class="dashicons dashicons-art"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="migrate"><span class="dashicons dashicons-migrate"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="performance"><span class="dashicons dashicons-performance"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="universal-access"><span class="dashicons dashicons-universal-access"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="universal-access-alt"><span class="dashicons dashicons-universal-access-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="tickets"><span class="dashicons dashicons-tickets"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="nametag"><span class="dashicons dashicons-nametag"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="clipboard"><span class="dashicons dashicons-clipboard"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="heart"><span class="dashicons dashicons-heart"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="megaphone"><span class="dashicons dashicons-megaphone"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="schedule"><span class="dashicons dashicons-schedule"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="wordpress"><span class="dashicons dashicons-wordpress"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="wordpress-alt"><span class="dashicons dashicons-wordpress-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="pressthis"><span class="dashicons dashicons-pressthis"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="update"><span class="dashicons dashicons-update"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="screenoptions"><span class="dashicons dashicons-screenoptions"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="info"><span class="dashicons dashicons-info"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="cart"><span class="dashicons dashicons-cart"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="feedback"><span class="dashicons dashicons-feedback"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="cloud"><span class="dashicons dashicons-cloud"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="translation"><span class="dashicons dashicons-translation"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="tag"><span class="dashicons dashicons-tag"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="category"><span class="dashicons dashicons-category"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="archive"><span class="dashicons dashicons-archive"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="tagcloud"><span class="dashicons dashicons-tagcloud"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="text"><span class="dashicons dashicons-text"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="yes"><span class="dashicons dashicons-yes"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="no"><span class="dashicons dashicons-no"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="no-alt"><span class="dashicons dashicons-no-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="plus"><span class="dashicons dashicons-plus"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="plus-alt"><span class="dashicons dashicons-plus-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="minus"><span class="dashicons dashicons-minus"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="dismiss"><span class="dashicons dashicons-dismiss"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="marker"><span class="dashicons dashicons-marker"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="star-filled"><span class="dashicons dashicons-star-filled"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="star-half"><span class="dashicons dashicons-star-half"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="star-empty"><span class="dashicons dashicons-star-empty"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="flag"><span class="dashicons dashicons-flag"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="location"><span class="dashicons dashicons-location"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="location-alt"><span class="dashicons dashicons-location-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="vault"><span class="dashicons dashicons-vault"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="shield"><span class="dashicons dashicons-shield"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="shield-alt"><span class="dashicons dashicons-shield-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="sos"><span class="dashicons dashicons-sos"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="search"><span class="dashicons dashicons-search"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="slides"><span class="dashicons dashicons-slides"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="analytics"><span class="dashicons dashicons-analytics"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="chart-pie"><span class="dashicons dashicons-chart-pie"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="chart-bar"><span class="dashicons dashicons-chart-bar"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="chart-line"><span class="dashicons dashicons-chart-line"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="chart-area"><span class="dashicons dashicons-chart-area"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="groups"><span class="dashicons dashicons-groups"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="businessman"><span class="dashicons dashicons-businessman"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="id"><span class="dashicons dashicons-id"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="id-alt"><span class="dashicons dashicons-id-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="products"><span class="dashicons dashicons-products"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="awards"><span class="dashicons dashicons-awards"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="forms"><span class="dashicons dashicons-forms"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="testimonial"><span class="dashicons dashicons-testimonial"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="portfolio"><span class="dashicons dashicons-portfolio"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="book"><span class="dashicons dashicons-book"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="book-alt"><span class="dashicons dashicons-book-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="download"><span class="dashicons dashicons-download"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="upload"><span class="dashicons dashicons-upload"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="backup"><span class="dashicons dashicons-backup"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="clock"><span class="dashicons dashicons-clock"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="lightbulb"><span class="dashicons dashicons-lightbulb"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="microphone"><span class="dashicons dashicons-microphone"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="desktop"><span class="dashicons dashicons-desktop"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="tablet"><span class="dashicons dashicons-tablet"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="smartphone"><span class="dashicons dashicons-smartphone"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="phone"><span class="dashicons dashicons-phone"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="index-card"><span class="dashicons dashicons-index-card"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="carrot"><span class="dashicons dashicons-carrot"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="building"><span class="dashicons dashicons-building"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="store"><span class="dashicons dashicons-store"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="album"><span class="dashicons dashicons-album"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="palmtree"><span class="dashicons dashicons-palmtree"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="tickets-alt"><span class="dashicons dashicons-tickets-alt"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="money"><span class="dashicons dashicons-money"></span></button></li>
					<li><button class="btn btn-default btn-block btn-icon" data-type="dashicons" data-icon="smiley"><span class="dashicons dashicons-smiley"></span></button></li>
				</ul>
			</div>
		</div>
	</section>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			var args = top.tinymce.activeEditor.windowManager.getParams(),
				frameHeight = $(window).innerHeight(),
				listPos = $('ul.list').position().top,
				listHeight = frameHeight - listPos - 30;
			// alert(listHeight);
			$('ul.list').css('max-height',listHeight);
			$('.btn-icon').on('click',function(){
				var iconType = $(this).data('type'),
					iconName = $(this).data('icon'),
					shortCode = '['+iconType+' type="'+iconName+'"]';
				top.tinymce.activeEditor.selection.setContent(shortCode);
				top.tinymce.activeEditor.windowManager.close();
			});
		});
	</script>
</body>
</html>