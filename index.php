<?php
    include_once"./includes/ref.php";
    define("DIR_HEADER","./includes/header/");
    define("LOGO","logo_moow_2018.png");
    $video = "Mickey";
?>
<div class="filter2"></div>
<div class="homepage-hero-module">
    <div class="video-container">
        <!--div class="filter"></div-->
        <video autoplay loop class="fillWidth">
            <source src="<?PHP echo DIR_HEADER;?>MP4/<?php echo "$video";?>.mp4" type="video/mp4" />
            <source src="<?PHP echo DIR_HEADER;?>OGV/<?php echo "$video";?>.ogv" type="video/ogv" />
            <source src="<?PHP echo DIR_HEADER;?>WEBM/<?php echo "$video";?>.webm" type="video/webm" />
        </video>
        <div class="poster hidden">
            <img src="<?PHP echo DIR_HEADER;?>Snapshots/<?php echo "$video";?>.jpg" alt="">
        </div>
    </div>
</div>
<div>
    <div class="logo_site">
        <img src="./includes/content_head/img/<?php echo LOGO;?>" alt="moow">
    </div>
</div>
<div>
    <div class="social_net">
        <ul>
            <li><a class="fa fa-facebook" title="facebook" href="#oi2"></a></li>
            <li><a class="fa fa-twitter" title="twitter" href="#oi1"></a></li>            
            <li><a class="fa fa-google-plus" title="google +" href="#oi3"></a></li>
            <li><a class="fa fa-linkedin" title="linkedin" href="#oi5"></a></li>
            <li><a class="fa fa-envelope" title="e-mail" href="#oi4"></a></li>            
        </ul>
    </div>
</div>
<div>
    <div class="container">  
        <div class="transition-loader">
            <div class="transition-loader-inner">
                <label></label>
                <label></label>
                <label></label>
                <label></label>
                <label></label>
                <label></label>
            </div>
        </div>
    </div>
</div>
<div class="menu-section">
    <div class="menu-toggle">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
        <div class="text_menu">menu</div>
    </div>
    <nav>
		<ul role="navigation" class="hidden">
			<li><a href="#">work</a></li>
			<li><a href="#">about</a></li>
			<li><a href="#">resume</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	</nav>
</div>