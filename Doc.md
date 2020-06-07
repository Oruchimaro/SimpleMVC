# Structuring the application directories

    We will create these folders for this app.
    public/
    public/css/
    public/js/
    app/
    app/controllers/
    app/core/
    app/models/
    app/views/
    app/views/home/


# Bootstraping the core Files for the App
    we will create a an /public/index.php file that serving as front (landing page) for 
    our app by requiring the /app/init.php file and initialization of our App.php class, then we create the /app/init.php file for requiring the core files.
    Then we can create  /app/core/App.php and /app/core/Controller.php classes .
    for testing we will create a simple constructor too.

# Configure routing for our app
    We will configure our App.php class to parse Urls as an array, then we will
    use the .htaccess in root drectory and app/  to make apache prevent access to app/ and root
    folders. so only public directory will be accessable in browser. and in
    .htaccess file in public directory we will use RewriteEngine to make apache
    convert urls like /public/home/profile to /public?url=home/?url=profile  .
    The RewriteRule would use a Regex to pass urls as query strings.
    

    then we will take the array to see if the url is accessing a controller,
    method, url params ...


    rtrim => will trim space,... and '/' from url
    
    
    filter_var => will filter url with FILTER_SANITIZE_URL that removes all illegal URL characters from a string


    explode =>  Split a url by a / and Returns an array of strings,


# Configure Controllers for app
    Our desired urls construct is /controller/method/param1/param2/...


    We will get the first argument of the url array and check if the controller
    exists.If not the controller will be the default controller we set.

    Then we check if the method exists in controller.
    If no we will get the default method .
   
    After doing checks we unset the value of those, so if any thing remains its
    the params. so we will pass these params to requested method with a helper function.If no method is passed then the params will be sent to default method.
