<!--<endora></endora>--><?
//this config file is for setting => here is set every text and database
$database['name'] = 'blog';
$database['subname'] = 'blog';
$database['username'] = 'admin';
$database['password'] = 'admin123';
$database['location'] = 'localhost';
$database['category'] = 'category';
$database['desc'] = 'description';
//end MySQLi config
//start names config
//global
$names['blogSubtitle'] = 'and his blog';
$names['readmore'] = 'Read more';
$names['pageTitle'] = 'My own blog';
$names['category'] = 'categories:';
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
$names['datePost'] = 'writen in ';//text to display BEFORE the date. Mention the {space} at the end.
//analytics
$names['Ganalytics'] = 'UA-93897496-1';//example code
//sidebar
$names['cardText'] = 'We are working on it HARD!';
$names['404Title'] = 'Not found';
$names['404Desc'] = 'We don\'t found anything :C';
$names['showAll'] = 'show all';
$names['search'] = 'Search something';//search text
$names['searchbtn'] = 'Search!';//search button text
$names['cardtext'] = 'This blogging system was made by Daniel Bulant!';
//copyright
$names['copyright']['before'] = 'Copyright';
$names['copyright']['after'] = '<br/>MIT LICENSED';
//conf
$conf['footer']['show']['post'] = true; //show footer at post page
$conf['footer']['show']['home'] = true;//show footer at home page
$conf['comments']['add'] = false;//add comments form and function
$conf['comments']['show'] = true;//show comments
$conf['comments']['addText'] = 'Add your comment!';//add comment text
//custom pages
$names['show1'] = false;//show custom page on navbar
$names['custom1ur'] = $names['url'].'about.php';//custom page url
$names['custom1'] = 'About me';//custom page name
$names['show2'] = false;//show custom page on navbar
$names['custom2ur'] = $names['url'].'help.php';//custom page url
$names['custom2'] = 'Help';//custom page name
//plugins:
//include('path/to/plugin.php');
