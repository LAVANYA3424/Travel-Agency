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

<div class="container">

  <header id="head" role="banner">
    <hgroup class="five logo alpha">
       <div id="logo">
        <?php if ($logo): ?><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a><?php endif; ?>
        <?php if ($site_slogan): ?><div class="site-slogan"><?php print $site_slogan; ?></div><!--site slogan--><?php endif; ?>
       </div>
    </hgroup>
    
    <div class="eleven columns omega" id="headright">
      <?php if (theme_get_setting('socialicon_display', 'responsive')): ?>
      <?php 
      $twitter_url = variable_get('twitter_page_url'); 
      $facebook_url = variable_get('facebook_page_url'); 
      $youtube_url = variable_get('youtube_page_url'); 
      $theme_path_social = base_path() . drupal_get_path('theme', 'responsive');
      ?>
      <div id="socialbar">
        <ul class="social">
      <?php if ($twitter_url): ?><li> <a href="<?php print $twitter_url; ?>" target="_blank"> <img src="<?php print $theme_path_social; ?>/images/twitter.png"> </a> </li> <?php endif; ?>
      <?php if ($facebook_url): ?><li> <a href="<?php print $facebook_url; ?>" target="_blank"> <img src="<?php print $theme_path_social; ?>/images/facebook.png"> </a> </li> <?php endif; ?>
      <?php if ($youtube_url): ?><li> <a href="<?php print $youtube_url; ?>" target="_blank"> <img src="<?php print $theme_path_social; ?>/images/gplus.png"> </a> </li> <?php endif; ?>
        </ul>
      </div>
      <?php endif; ?>
      
      <nav id="navigation" role="navigation">
      <div id="main-menu">
        <?php 
          if (module_exists('i18n')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
          } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
          }
          print drupal_render($main_menu_tree);
        ?>
       </div>
      </nav><!-- end main-menu -->
     </div>
  </header>
</div>
  
<div class="container" id="content-contain">
  <?php if ($page['header']): ?>
   <div id="header" class="sixteen columns">
    <?php print render($page['header']); ?>
   </div>
   <div class="clear"></div>
   <?php endif; ?>
  <?php if ($page['content_top']): ?><div id="content_top"><?php print render($page['content_top']); ?></div><?php endif; ?>
  
  <?php if (!empty($node->field_image['und'][0]['uri'])): ?>
    <div class="image">
      <?php $src = image_style_url('thumb_980x400',$node->field_image['und'][0]['uri']); ?>
      <img src="<?php print $src; ?> ">
    </div>
  <?php endif ?>
  
  <?php if($page['sidebar_first']) { $contentwid= "eleven"; } else { $contentwid= "sixteen"; } ?>
 
 <div id="content" class="<?php print $contentwid; ?> columns">
  <div id="breadcrumbs"><?php if (theme_get_setting('breadcrumbs', 'responsive')): ?><?php if ($breadcrumb): print $breadcrumb; endif;?><?php endif; ?></div>
   <section id="post-content" role="main">
    <?php print $messages; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?><h1 class="page-title"><?php print $title; ?></h1><?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if (!empty($tabs['#primary'])): ?><div class="tabs-wrapper"><?php print render($tabs); ?></div><?php endif; ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
    <?php print render($page['content']); ?>
  </section> <!-- /#main -->
 </div>

  <?php if ($page['sidebar_first']): ?>
    <aside id="sidebar-first" role="complementary" class="sidebar five columns">
      <?php print render($page['sidebar_first']); ?>
    </aside>  <!-- /#sidebar-first -->
  <?php endif; ?>

  <div class="clear"></div>
  
  <?php if ($page['footer']): ?>
   <div id="foot" class="sixteen columns">
     <?php print render($page['footer']) ?>
   </div>
   <?php endif; ?>
  
</div>
 
<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?> 
  <div id="bottom" class="container">
  <?php $botomwid = "four"; $bottom = ((bool) $page['footer_first'] + (bool) $page['footer_second'] + (bool) $page['footer_third'] + (bool) $page['footer_fourth']);
    switch ($bottom) { 
      case 1: $botomwid = "sixteen"; break; case 2: $botomwid = "eight"; break;
      case 3: $botomwid = "five"; break; case 4: $botomwid = "four";
    } ?>
    <?php if ($page['footer_first']): ?>
    <div class="<?php print $botomwid; ?> columns botblck"><?php print render($page['footer_first']); ?></div>
    <?php endif; ?>
    <?php if ($page['footer_second']): ?>
    <div class="<?php print $botomwid; ?> columns botblck"><?php print render($page['footer_second']); ?></div>
    <?php endif; ?>
    <?php if ($page['footer_third']): ?>
    <div class="<?php print $botomwid; ?> columns botblck"><?php print render($page['footer_third']); ?></div>
    <?php endif; ?>
    </div>
<?php endif; ?>
  
<div id="copyright" class="container">
 <div class="credit"><?php print t('Copyright'); ?> &copy; <?php echo date("Y"); ?>, <?php print $site_name; ?> <br/> 
  <?php print t('Developed by'); ?> 
      <a target="_blank" href="http://www.smartbeeagency.com" title="Réalisé par Smartbee Web Agency">Smartbee</a>
  <div class="clear"></div>
</div>