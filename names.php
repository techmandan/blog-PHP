<?php
    
//this config file is for setting => here is set every text and database
$database['name'] = 'danblog';
$database['subname'] = 'blog';
$database['username'] = 'bulant';
$database['password'] = 'Aritma123';
$database['location'] = 'localhost';
$database['category'] = 'category';
$database['desc'] = 'description';
//end MySQLi config
//start names config
//global
$names['blogSubtitle'] = 'and his blog';
$names['writen'] = 'writen ';//mention the <space> at the end
$names['by'] = 'by';
$names['readmore'] = 'Read more';
$names['pageTitle'] = 'My own blog';
$names['category'] = 'categories:';//title of categories
$names['home'] = 'home';
$names['author'] = 'William Shakespear';//author name => show inside meta and if no author is set from SQL
$names['blogTitle'] = $names['author'];
$names['url'] = 'http://blog-php.danbulant.eu';//base URL with http://
$names['desc'] = 'This is the page description';//meta description
$names['title'] = 'Example title';//webside title
$names['blog-post'] = 'Post - my own forum';//navbar post page title
$names['theme'] = '#268cff';//chrome theme color
$names['icourl'] = 'https://example.com/favicon.ico';//full icon url
$names['onLoad'] = 'alert("Loaded!");';//script to start when page load is complete
$names['from'] = 'from:';//from text
$names['datePost'] = 'writen at ';//text to display BEFORE the date. Mention the {space} at the end.
//analytics
$names['Ganalytics'] = 'UA-93897496-1';//example code
//sidebar
$names['cardText'] = 'We are working on it HARD!';//'card' text, mostly used for short info
$names['404Title'] = 'Not found';//if not found any post
$names['404Desc'] = 'We don\'t found anything :C';
$names['showAll'] = 'show all';
$names['search'] = 'Search something';//search text
$names['searchbtn'] = 'Search!';//search button text
$names['cardtext'] = 'This blogging system was made by Daniel Bulant!';
//copyright
$names['copyright']['before'] = 'Copyright';
$names['copyright']['name'] = 'blog-php(Daniel Bulant)';
$names['copyright']['after'] = '<br/>MIT LICENSED';
//dates format
$names['dates']['useText'] = true;//if true, instead of date(1.1.2018) it will show 1 month ago
$names['dates']['full'] = false;//if true, it will show something similar to 1month, 4 weeks...
//$names['dates']['']
//conf
$conf['footer']['show']['post'] = true; //show footer at post page
$conf['footer']['show']['home'] = true;//show footer at home page
$conf['comments']['add'] = false;//add comments form and function
$conf['comments']['show'] = true;//show comments
$conf['comments']['addText'] = 'Add your comment!';//add comment text
//custom pages
$names['show1'] = true;//show custom page on navbar
$names['custom1ur'] = '#';//custom page url
$names['custom1'] = 'Custom Page 1';//custom page name
$names['show2'] = false;//show custom page on navbar
$names['custom2ur'] = $names['url'].'/help.php';//custom page url
$names['custom2'] = 'Help';//custom page name
//plugins:
//include('path/to/plugin.php');
//an example of this config can be found on http://blog-php.danbulant.eu/names.php?code=php
//if you want JSON config example, it's avaible on http://blog-php.danbulant.eu/names.php?code=json
