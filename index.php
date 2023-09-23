<?php

include_once('functions.php')
?>

<!doctype html>
<html lang="ar" class="no-js" data-scheme="alt">
<head>
	<title><?=$data->name?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="assets/js/detect-support.js"></script>
	<link rel="shortcut icon" href="favicon.png">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900" rel="stylesheet">
  <link href="https://db.onlinewebfonts.com/c/b86c0f3afb7b6eb1952be1d4c753140c?family=Al-Jazeera-Arabic-Regular" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/materialdesignicons.css">
	<link rel="stylesheet" href="assets/css/fancybox.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home navbar-sticky video-sticky navbar-transparent has-sidebar">
	<header id="top-header" class="site-header">
		<div class="wrapper">
			<div class="site-identity">
				<a href="<?=$url?>" class="custom-logo-link" rel="home" title="Visit homepage"><img src="tmp/logo2.png" class="custom-logo" width="131" height="36" alt="Bateria"><img src="tmp/logo.png" class="custom-logo alt-version" width="131" height="36" alt="Bateria"></a>
				<p class="site-description screen-reader-text"><?=$data->name?></p>
			</div>
			<div id="menu-toggle" class="mobile-menu-toggle">
				<a href="#menu-main" title="Toggle menu"><em class="mdi mdi-menu"></em><em class="mdi mdi-close"></em></a>
			</div>
			<nav class="main-navigation">
				<ul id="menu-main" class="menu">
					<li class="menu-item-has-children current-menu-parent">
						<a href="index.html">Home<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="index.html">Home - Audio</a></li>
							<li class="current-menu-item"><a href="index-video.html">Home - Video</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="episodes.html">Episodes<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="episodes.html">Episodes (sidebar)</a></li>
							<li><a href="episodes-grid.html">Episodes (grid)</a></li>
							<li><a href="episodes-list.html">Episodes (list)</a></li>
							<li><a href="single-episode.html">Audio episode</a></li>
							<li><a href="single-episode-video.html">Video episode</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="blog.html">Blog<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="blog.html">Browse posts</a></li>
							<li><a href="single-post.html">Single post</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="shop.html">Shop<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="shop.html">Right sidebar (2 cols)</a></li>
							<li><a href="shop-wide.html">Fullwidth (3 cols)</a></li>
							<li><a href="shop-cart.html">Cart</a></li>
							<li><a href="shop-checkout.html">Checkout</a></li>
							<li><a href="single-product.html">Single product</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="styleguide.html">Features<em class="mdi mdi-chevron-down"></em></a>
						<ul class="sub-menu">
							<li><a href="styleguide.html">Styleguide</a></li>
							<li class="menu-item-has-children">
								<a href="#">Submenus</a>
								<ul class="sub-menu">
									<li><a href="#">Submenu item 1</a></li>
									<li><a href="#">Submenu item 2</a></li>
									<li><a href="#">Submenu item 3</a></li>
								</ul>
							</li>
							<li><a href="404.html">404 not found</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li class="menu-item-scheme">
						<a href="#" title="Toggle color scheme"><em class="mdi mdi-weather-night"></em><em class="mdi mdi-white-balance-sunny"></em><span>Toggle color scheme</span></a>
					</li>
					<li class="menu-item-search">
						<a href="#searchform" title="Toggle search"><em class="mdi mdi-magnify"></em><em class="mdi mdi-close"></em></a>
						<form class="searchform" method="get" action="blog.html" role="search">
							<label class="screen-reader-text">Search for:</label>
							<input type="search" value="" name="s" placeholder="Search&hellip;">
							<button type="submit"><em class="mdi mdi-magnify"></em><span class="screen-reader-text">Search</span></button>
						</form>
					</li>
					<li class="menu-item-cart">
						<a href="shop-cart.html" title="Shopping cart"><em class="mdi mdi-shopping-outline"></em><span class="cart-text">Shopping cart</span><span class="cart-total">3</span></a>
					</li>
				</ul>
			</nav>
			<nav class="social-navigation">
				<ul class="menu">
					<li><a href="https://twitter.com" title="Twitter profile"><span class="screen-reader-text">Twitter profile</span></a></li>
					<li><a href="https://instagram.com" title="Instagram profile"><span class="screen-reader-text">Instagram profile</span></a></li>
					<li><a href="https://youtube.com" title="YouTube page"><span class="screen-reader-text">YouTube page</span></a></li>
				</ul>
			</nav>
		</div>
	</header>

	<header id="featured" class="site-featured">
		<div id="featured-media" class="featured-media has-overlay">
			<div class="wrapper">
				<div class="featured-episode">
					<div class="featured-episode-text">
						<p class="text-uppercase text-weight-medium text-opacity-75">Featured Podcast Episode</p>
						<h1 class="display" style="font-family:Al-Jazeera-Arabic-Regular; text-align:right"><a href="single-episode-video.html"><?php echo $data->description?></a></h1>
						<p  style="font-family:Al-Jazeera-Arabic-Regular; text-align:right"><?=$data->description?></p>
					</div>
          <div class="episode-player episode-type-video shine-on-hover">
						<video src="tmp/10.mp4"  preload="metadata" poster="<?=$url.'tmp/image1.jpg'?>"  autoplay  width="1280" height="720"></video>
						<a href="https://html.liviucerchez.com/bateria/tmp/sample-featured-video1.mp4" class="media-cover"><span class="media-play-pause"></span></a>
						<div class="media-controls">
							<button class="media-play-pause"></button>
							<button class="media-rate" data-rates="1.5 0.5 1" title="Playback speed">1x</button>
							<span class="media-current-time">00:00</span>
							<div class="media-time-rail"><span class="media-time-rail-current"></span></div>
							<span class="media-duration">00:10</span>
							<a class="media-download" href="https://html.liviucerchez.com/bateria/tmp/sample-featured-video1.mp4" download title="Download episode (3.1 MB)"></a>
							<button class="media-pip" title="Picture-in-Picture"></button>
							<button class="media-fullscreen" title="Toggle fullscreen"></button>
						</div>
					</div>
				</div>
				<div class="featured-actions">
					<div class="featured-actions-main">
						<a href="#"><span class="mdi mdi-podcast"></span> Subscribe on Apple Podcasts</a>
						<a href="#"><span class="mdi mdi-rss"></span> Subscribe using RSS Feed</a>
					</div>
					<div class="featured-actions-secondary">
						<a href="episodes.html">Browse all episodes <span class="mdi mdi-trending-neutral"></span></a>
					</div>
				</div>
			</div>
			<!-- <img src="tmp/sample-featured.jpg" alt=""> -->
      <video src="tmp/sample-featured-video2.mp4" poster="<?=$url.''?>" preload="metadata" muted="" autoplay="" loop="" width="1320" height="756"></video>
		</div>
	</header>

	<div id="content" class="site-content">
		<div class="wrapper">
			<div class="entry-content">
				<div class="post-listing style-default">
          <?php
          
foreach($items as $item){

  $name= $item->name;
  $date= $item->release_date;
  $image = $item->images[1]->url;

?>

<article class="entry entry-episode has-post-thumbnail">
<div class="entry-media">
  <a href="single-episode.html" class="shine-on-hover"><img src="<?= $image?>" alt="" width="540" height="540"></a>
</div>
<div class="entry-text">
  <header class="entry-header">
    <div class="entry-meta">
      <span class="posted-in">
        <span class="screen-reader-text">Posted in:</span> <em class="mdi mdi-folder-outline"></em> <a href="episodes.html" rel="category tag">Season 1</a>
      </span>
      <span class="posted-on">
        <span class="screen-reader-text">Posted on</span> <em class="mdi mdi-calendar-blank"></em> <a href="single-episode.html" rel="bookmark"><span class="entry-date published">Sep 3, 2023</span><span class="updated">Sep 4, 2023</span></a>
      </span>
      <span class="tags">
        <span class="screen-reader-text">Tags:</span> <em class="mdi mdi-tag-outline"></em> <a href="episodes.html" rel="tag">clothes</a><span>, </span><a href="episodes.html" rel="tag">travel</a><span>, </span><a href="episodes.html" rel="tag">solo</a>
      </span>
    </div>
    <h2 class="entry-title"><a href="single-episode.html" rel="bookmark"><?=$item->name?></a></h2>
  </header>
  <div class="entry-audio">
    <div class="episode-player episode-type-audio">
      <?php
    //   $episode_url =$item->href;
    // $episode = get_episode($old_token, $episode_url);

      ?>
      <audio><source src="<?=$item->audio_preview_url?>" type="audio/mpeg" /><source src="<?=$item->audio_preview_url?>" type="audio/ogg" /></audio>
      <div class="media-controls">
        <button class="media-play-pause"></button>
        <span class="media-current-time"></span>
        <div class="media-time-rail"><span class="media-time-rail-current"></span></div>
        <span class="media-duration"><?=$item->duration_ms/1000?></span>
      </div>
    </div>
  </div>
  <div class="entry-excerpt">
    <p><?=$item->description?></p>
  </div>
</div>
</article>
<?php
}
          ?>
				
					
					<div class="pagination">
						<span aria-current="page" class="page-numbers current"><span class="screen-reader-text">Page </span>1</span>
						<a class="page-numbers" href="episodes.html"><span class="screen-reader-text">Page </span>2</a>
						<a class="page-numbers" href="episodes.html"><span class="screen-reader-text">Page </span>3</a>
						<a class="next page-numbers" href="episodes.html"><span class="screen-reader-text">Next Page </span></a>
					</div>
				</div>
			</div>
			<aside id="sidebar" class="widget-area">
				<div class="widget widget_text widget_subscribe">
					<h5 class="widget-title">Subscribe now!</h5>
					<div class="textwidget">
						<p><a href="#" class="shine-on-hover"><img src="tmp/sample-540x540.jpg" width="500" height="500" alt=""></a></p>
						<p>
							<a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-apple"></span> iTunes</a> <a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-podcast"></span> Stitcher</a> <a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-microphone"></span> Castos</a> <a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-google-play"></span> Google Play</a> <a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-spotify"></span> Spotify</a> <a class="button button-underline" href="#" target="_blank" rel="noopener noreferrer"><span class="mdi mdi-rss"></span> RSS</a>
						</p>
					</div>
				</div>
				<div class="widget widget_media_gallery">
					<h5 class="widget-title">Recent photos</h5>
					<div class="block-gallery columns-2">

					
					
					
					  <figure class="block-image">
					 	 <a href="tmp/sample-540x540.jpg" data-fancybox="test-gallery"><img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""></a>

					  </figure>

						<figure class="block-image">
							<a href="tmp/sample-540x540.jpg" data-fancybox="test-gallery"><img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""></a>
						</figure>
						<figure class="block-image">
							<a href="tmp/sample-540x540.jpg" data-fancybox="test-gallery"><img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""></a>
						</figure>
						<figure class="block-image">
							<a href="tmp/sample-540x540.jpg" data-fancybox="test-gallery"><img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""></a>
						</figure>
					</div>
				</div>
				<div class="widget widget_search">
					<form action="shop.html" method="get" class="searchform" role="search">
						<label class="screen-reader-text">Search for:</label>
						<input type="search" value="" name="s" placeholder="Search&hellip;">
						<button type="submit"><em class="mdi mdi-magnify"></em><span class="screen-reader-text">Search</span></button>
					</form>
				</div>
				<div class="widget widget_product_categories">
					<h5 class="widget-title">Categories</h5>
					<ul>
						<li class="cat-item">
							<a href="#">Blog</a> <span class="count">(6)</span>
							<ul class="children">
								<li class="cat-item"><a href="#">Interviews</a> <span class="count">(2)</span></li>
								<li class="cat-item"><a href="#">Podcast</a> <span class="count">(1)</span></li>
								<li class="cat-item"><a href="#">Updates</a> <span class="count">(3)</span></li>
							</ul>
						</li>
						<li class="cat-item current-cat"><a href="#">Podcast</a> <span class="count">(12)</span>
							<ul class="children">
								<li class="cat-item"><a href="#">Season 1</a> <span class="count">(12)</span></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="widget widget_tag_cloud">
					<h5 class="widget-title">Tags</h5>
					<div class="tagcloud">
						<a href="#" class="tag-cloud-link">adventure</a> <a href="#" class="tag-cloud-link">audio</a> <a href="#" class="tag-cloud-link">branding</a> <a href="#" class="tag-cloud-link">citrus</a> <a href="#" class="tag-cloud-link">gallery</a> <a href="#" class="tag-cloud-link">goodbyes</a> <a href="#" class="tag-cloud-link">handmade</a> <a href="#" class="tag-cloud-link">lessons</a> <a href="#" class="tag-cloud-link">seed</a> <a href="#" class="tag-cloud-link">talk</a> <a href="#" class="tag-cloud-link">zen</a>
					</div>
				</div>
			</aside>
		</div>
	</div>

	<footer class="site-footer-gallery">
		<div class="wrapper">
			<a href="https://instagram.com/liviucerchez/" target="_blank" class="intro-gallery">
				<span class="intro-gallery-title">Find more personal moments <span class="highlight">on Instagram</span></span>
				<em class="intro-gallery-username">@liviucerchez</em>
			</a>
<?php
			foreach ($results['items'] as $index=>$video) {

				if($index>0){
?>
			<div class="gallery-photo">
				<!-- <a href="https://instagram.com/liviucerchez/" target="_blank"> -->
			

				<iframe width="200" height="200" src="<?php echo 'https://www.youtube.com/embed/'.$video['id']['videoId']?>" frameborder="0" allowfullscreen></iframe>
					<!-- <img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""> -->
					<!-- <span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">3</strong></span>
						</span>
					</span> -->
				</a>
			</div>
			<?php
				}
			
			}
		?>
			<!-- <div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">5</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">5</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">2</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">2</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">2</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">9</strong></span>
						</span>
					</span>
				</a>
			</div>
			<div class="gallery-photo">
				<a href="https://instagram.com/liviucerchez/" target="_blank">
					<img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt="">
					<span class="data">
						<span class="meta">
							<span class="likes"><em class="mdi mdi-heart"></em> <strong class="count">12</strong></span>
						</span>
					</span>
				</a>
			</div> -->
			<a href="https://instagram.com/liviucerchez/" target="_blank" class="outro-gallery"><span>Don't miss daily inspiration and updates</span></a>
		</div>
	</footer>

	<footer class="sales-box">
		<div class="wrapper">
			<div class="sales-box-cover">
				<a href="#" class="shine-on-hover"><img src="tmp/sample-540x540.jpg" width="540" height="540" loading="lazy" alt=""></a>
			</div>
			<div class="sales-box-content">
				<h2>New Stuff Each Week!</h2>
				<p>Listen below and order your copy from Amazon, iTunes or your favorite record store. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia conseqa untur magni dolores eos qui ratione sequi.</p>
				<p><a href="#" class="button button-primary"><span class="mdi mdi-amazon"></span> Amazon</a> <a href="#" class="button button-primary"><span class="mdi mdi-apple"></span> iTunes</a> <a href="#" class="button button-primary"><span class="mdi mdi-spotify"></span> Spotify</a></p>
			</div>
		</div>
		<img src="tmp/sample-featured-video.jpg" alt="">
	</footer>

	<footer class="site-footer">
		<a id="scroll-to-top" class="scroll-to-top" href="#top-header" title="To the top"><em class="mdi mdi-chevron-up"></em><svg width="150" height="50" viewBox="0 0 39.687499 13.229167"><path d="M-.0035 296.999c9.007 0 11.8302-13.1833 19.8324-13.1852C27.8372 283.8118 30.636 297 39.683 297c9.047 0-48.6935-.001-39.6864-.001z" transform="translate(0,-283.77081)"></path></svg></a>
		<div class="widget-area">
			<div class="widget widget_logo">
				<h3><a href="index.html" class="footer-title">Bateria</a></h3>
			</div>
			<div class="widget widget_nav_menu">
				<nav class="social-navigation">
					<ul class="menu">
						<li><a href="https://twitter.com"><span class="screen-reader-text">Twitter profile</span></a></li>
						<li><a href="https://instagram.com"><span class="screen-reader-text">Instagram profile</span></a></li>
						<li><a href="https://youtube.com"><span class="screen-reader-text">YouTube page</span></a></li>
					</ul>
				</nav>
			</div>
			<div class="widget widget_text">
				<div class="textwidget">
					<h3 class="widget-title">Don't miss our weekly episodes. Subscribe now!</h3>
					<form class="mc4wp-form" method="post" action="index.html">
						<div class="mc4wp-form-fields">
							<p>A template with a simple and organized approach to presenting your content with understated charm and undeniable appeal.</p>
							<p class="one-line">
								<label for="subscribe_email" class="sr-only">Subscription Email</label> <input type="email" name="email" id="subscribe_email" placeholder="Your email address..." required=""><input type="submit" value="Subscribe" class="button-color button-filled">
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; 2023 <a href="index.html">Bateria</a> &mdash; Created with &hearts; in Europe. All Rights Reserved. &mdash; <a class="privacy-policy-link" href="#">Privacy Policy</a></p>
		</div>
	</footer>

	<script src="assets/js/fancybox.min.js"></script>
	<script src="assets/js/functions.js"></script>
</body>
</html>