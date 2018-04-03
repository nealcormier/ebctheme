<?php
/* 
EBC Theme Page TPL. Drupal 6. EBC Will be converted to D7 as per this .tpl set. 
*/
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"><head>  <title><?php print $head_title ?></title>  

<meta http-equiv="Content-Style-Type" content="text/css" />  
<?php print $head ?>  <?php print $styles ?>  <?php print $scripts ?>	    <script src="<?php print base_path().path_to_theme() ?>/js/jquery-1.3.2.min.js" type="text/javascript">
</script>	

<script src="<?php print base_path().path_to_theme() ?>/js/cufon-yui.js" type="text/javascript"></script>	

<script src="<?php print base_path().path_to_theme() ?>/js/Futura_BdCn_BT_400.font.js" type="text/javascript"></script>    

<script src="<?php print base_path().path_to_theme() ?>/js/cufon-replace.js" type="text/javascript"></script>  

</head>  

<body id="body">	

<div class="min-width">    	
<div class="bg-bot">        	
<div id="main">                
<div id="header">                    
<div class="head-row1">                        
<?php if ($logo) : ?>                            
	<a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" class="logo" /></a>                        
<?php endif; ?>                        
<?php if ($site_name) : ?>                            

	<h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>                        <?php endif; ?>                                                <?php if ($site_slogan) : ?>                            <div class="slogan"><?php print($site_slogan) ?></div>                        <?php endif;?>                                                    <?php if ($mission != ""): ?>                            <div id="mission"><?php print $mission ?></div>                        <?php endif; ?>                    </div>                    <div class="head-row2">                        <?php if (isset($primary_links)) : ?>                            <div class="pr-menu">                                <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>                            </div>                        <?php endif; ?>                    </div>                    <div class="head-row3">                        <?php if ($custom != ""): ?>                            <div id="custom">                                <div class="ind">                                    									                                <?php print $custom?>								</div>                            </div>                        <?php endif; ?>                    </div>                    <div class="head-row4">                        <div class="search-box">							<?php if ($search_box): print $search_box;  endif; ?>                        </div>                    </div>                </div>                                                                <div id="cont">                                	<?php if ($left != ""): ?>                                           <?php endif; ?>                                        <div id="cont-col">                        <div class="ind">                                                                                        <?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>                            <?php if ($title): print '                                <h2'. ($tabs ? ' class="with-tabs title"' : '') .'>'. $title .'</h2>                            '; endif; ?>                            <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>                            <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>                                                                         <?php if ($show_messages && $messages != ""): ?>                                <?php print $messages ?>                            <?php endif; ?>                                                    <?php if ($help != ""): ?>                                <div id="help"><?php print $help ?></div>                            <?php endif; ?>                                                      <!-- start main content -->                            <?php print $content; ?>                                                                                        </div>                    </div>                                        </div>                                    </div>            <div id="footer">                <div class="foot">                    <?php if ($footer_message || $footer) : ?>                        <span><?php print $footer_message;?></span>                    <?php endif; ?>                </div>            </div>        </div>    </div> <?php print $closure;?><script type="text/javascript"> Cufon.now(); </script></body></html>