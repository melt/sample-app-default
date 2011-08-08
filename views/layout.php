<?php namespace melt; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head profile="http://gmpg.org/xfn/11">
        <title>Melt framework - Default Sample Application</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet"  type="text/css" media="screen, projection" href="<?php echo url('static/css/reset.css'); ?>">
        <link rel="stylesheet/less" type="text/css" href="<?php echo url('static/css/style.less'); ?>">
        <?php echo $this->head; ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="social-media"><?php $this->display('social-media'); ?></div>
                <h1>Melt</h1><h2 id="site-description">Default sample application</h2>
                <img src="<?php echo url('static/images/img-header.png'); ?>" alt="Nice header image" />
            </div>
            <div id="menu">
                
            <?php echo $this->menu; ?>
            </div>
            <div id="content">
                <div id="main">
                    <?php echo $this->content; ?>
                </div>
                <div id="sidebar">
                   <?php $this->display('sidebar'); ?>
                </div>
                <br class="clear" />
            </div>
            
            
        </div>
        

    </body>
</html>