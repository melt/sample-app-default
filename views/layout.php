<?php namespace melt; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
    <head profile="http://gmpg.org/xfn/11">
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet"  type="text/css" media="screen, projection" href="<?php echo url('static/css/reset.css'); ?>">
        <link rel="stylesheet/less" type="text/css" href="<?php echo url('static/css/style.less'); ?>">
        <?php echo $this->head; ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <h1>Melt</h1><h2 id="site-description">Sample application</h2>
                <img src="<?php echo url('static/images/img-header.png'); ?>" alt="Nice header image" />
            </div>
            <div id="menu">
                <ul>
                    <li><a href="#" title="Startpage">Home</a></li>
                    <li><a href="#" title="About">About</a></li>
                </ul>
            </div>
            <div id="content">
                <div id="main">
                    <?php echo $this->content; ?>
                </div>
                <div id="sidebar">
                   
                  <h2>Sample app</h2>
                  <p> Melt version: <strong><?php echo \melt\internal\VERSION; ?></strong><br/>
                      Acessed by: <strong><?php echo $_SERVER['REMOTE_ADDR']; ?></strong><br/>
                     Running on: <strong><?php print_r($_SERVER['SERVER_SOFTWARE']); ?></strong>
                  </p>

                </div>
                <br class="clear" />
            </div>
            
            
        </div>
        

    </body>
</html>