<?php namespace melt; ?>
<?php $tweet_text= urlencode("Check out my brand new Melt application");?>


<a href="http://www.facebook.com/meltframework" title="Visit Melt on facebook"><img src="<?php echo url('static/images/icon-facebook.png'); ?>" alt="Visit melt on facebook" /></a>
<a href="http://twitter.com/share?&text=<?php echo $tweet_text; ?>" data-text="Check out my brand new Melt application" data-count="none" title="Tweet about you application"><img src="<?php echo url('static/images/icon-twitter.png'); ?>" alt="Tweet about your application" /></a>