<?
//this config file is for setting => here is set every text and database
$database['name'] = 'example';
$database['username'] = 'admin';
$database['password'] = 'password';
$database['location'] = 'localhost';
//end MySQLi config
//start names config
//global
$names['author'] = 'William Shakespear';//author name => show inside meta and if no author is set from SQL
$names['url'] = 'http://example.com';//base URL with http://
$names['desc'] = 'This is the page description';//meta description
$names['title'] = 'Example title';//webside title
$names['theme'] = '#268cff';//chrome theme color
$names['icourl'] = 'https://example.com/favicon.ico';//full icon url
//analytics
$names['Ganalytics'] = 'UA-93897496-1';//example code
//sidebar
$names['search'] = 'Search something';//search text
$names['searchbtn'] = 'Search!';//search button text
$names['cardtext'] = 'This blogging system was made by Daniel Bulant!';
//custom pages
$names['show1'] = false;//show custom page on navbar
$names['custom1ur'] = $names['url'].'about.php';//custom page url
$names['custom1'] = 'About me';//custom page name
$names['show2'] = false;//show custom page on navbar
$names['custom2ur'] = $names['url'].'help.php';//custom page url
$names['custom2'] = 'Help';//custom page name
