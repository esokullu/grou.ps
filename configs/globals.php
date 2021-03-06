<?php

include_once(dirname(__FILE__)."/languages.php"); // don't change

$app_base = dirname(__FILE__)."/../"; // don't change

// trailing slash is important, don't remove it!
$service_host = "http://localhost:80/groups/"; 

$db_name='gnippetsdb';
$db_type='mysql';
$db_username='root';
$db_password='password';
$db_host='localhost';

$group_language = "english";
$group_template = "transparentia";
$group_keywords = "grou.ps,keyword2,keyword3"; // for search engine optimization
$group_description = <<<EOS
This group is about this and that.
EOS;

$allow_people = true; // don't change
$allow_talks = true;
$allow_wiki = true;

$open_people = true; 
$open_talks = true;
$open_wiki = true;

$weight_talks = true;
$weight_wiki = true;
$weight_people = true;

$group_title = "Example Group";
$short_group_desc = "Group Tagline goes here...";

$can_anyone_join = true;

$modules_people_allowTags = true;
$modules_people_allowFavorites = true;

?>
