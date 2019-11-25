<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<?php if (theme_get_setting('social_links', 'fresh')): ?>
<div id="topbar">
<div class="feedlist">
  <ul>
    <li><a href="http://www.facebook.com/<?php echo check_plain(theme_get_setting('facebook_username', 'fresh')); ?>" target="_blank" rel="me">Facebook</a></li> 
    <li><a href="http://www.twitter.com/<?php echo check_plain(theme_get_setting('twitter_username', 'fresh')); ?>" target="_blank" rel="me">Twitter</a></li>
  </ul>
</div>
</div>
<?php endif; ?>
<div id="masthead">
  <div id="top">
    <div class="head">      
    <?php if ($logo): ?>
       <div id="logo">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" /></a>
        </div>
      <?php endif; ?>
      <h1 class="sitename"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>
      <div class="clear"></div>
      </div>
  </div>
	
  <div id="botmenu">
    <a title="Home" href="<?php print $front_page; ?>" class="homemenu"> </a>
      <div id="submenu">
        <?php 
          if (module_exists('i18n')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
      </div>
  </div>
</div>

<div id="wrapper">
  <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
    <?php if (!empty($node->field_image['und'][0]['uri'])): ?>
    <div class="image">
      <?php $src = image_style_url('thumb_980x400',$node->field_image['und'][0]['uri']); ?>
      <img src="<?php print $src; ?> ">
    </div>
  <?php endif ?>
  <div class="clear"></div>
 <div id="casing">
  <?php print render($page['header']); ?>

  <div id="content">
  <?php if (theme_get_setting('breadcrumbs', 'fresh')): ?><div class="breadcrumb"><?php if ($breadcrumb): print $breadcrumb; endif;?></div><?php endif; ?>
  <section id="main" role="main" class="post">
    <?php print $messages; ?>
    <a id="main-content"></a>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><div class="title"><h2 class="title" id="page-title"><?php print $title; ?></h2></div><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper clearfix"><?php print render($tabs); ?></div><?php endif; ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
  </div>
  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar clearfix">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

<div class="clear"></div>
<?php print render($page['footer']) ?>
</div> 
</div>

<div class="bottomcover">
<div id="bottom">
 <?php if ($page['footer_first']): ?><!-- / start first footer block -->
    <div class="botwid">
      <?php print render($page['footer_first']); ?>
    </div> <!-- / end first footer -->
  <?php endif; ?>
 <?php if ($page['footer_second']): ?><!-- / start second footer block -->
    <div class="botwid">
      <?php print render($page['footer_second']); ?>
    </div> <!-- / end second footer -->
  <?php endif; ?>
 <?php if ($page['footer_third']): ?><!-- / start third footer block -->
    <div class="botwid">
      <?php print render($page['footer_third']); ?>
    </div> <!-- / end third footer -->
  <?php endif; ?>
<div class="clear"></div>
</div> 
</div> 

<div id="footer">
  <div class="fcred">
    <?php if (theme_get_setting('footer_copyright', 'fresh')): ?>
    <div id="copyright"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?>.</div>
    <?php endif; ?>
    <?php if (theme_get_setting('footer_credits', 'fresh')): ?>
    <div id="credits"><?php print t('Developed by'); ?> 
      <a target="_blank" href="http://www.smartbeeagency.com" title="Réalisé par Smartbee Web Agency">Smartbee</a>

    <?php endif; ?>
  </div>
</div>