<?php
/* 
 Keep in mind, all EBC nodes are funneled via ThemeKey and the $picture via Taxonomy class are dependant on each other.
*/
?>
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($page == 0): ?>
		<?php print $picture ?>
        <h1 class="title"><a href="<?php print $node_url ?>"><?php print $title ?></a></h1>
        <div class="submit"><span class="submitted"><?php print $submitted ?></span></div>
    <?php endif; ?>
    <div class="taxonomy"><?php print $terms ?></div>
  
    <div class="content">
        <?php print $content ?>
    </div>
    <?php if ($links): ?>
        <div class="links-indent">
            <div class="links"><?php print $links ?></div>
        </div>
        <div class="clear"></div>
    <?php endif; ?>
</div>