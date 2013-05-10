<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

/*
Theme the loggedinblock that shows for logged-in users.
*/
function Chihade_lt_loggedinblock(){
	drupal_add_js();
  global $user;
  $block_content = t('Welcome '). $block_content = check_plain($user->name) .' | ' . l(t('Your Account'), 'user').' | '. l(t('Log out'), 'user/logout');
  return $block_content;
}
  global $user;
  drupal_add_js(array('currentUser' => $user->name, 'userId' => $user->uid), 'setting');
?>