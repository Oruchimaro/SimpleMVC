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


#Configure Models for app
    We will set a model method on base controller file, then after creating th
    model file we can get an instance of the model class with this method .


    Inside the controller :
    ```PHP
    $modelInstance = $this->model('model name');
    ```




# Configure Views for app
    In Controller base we will add a view method that returns an instance of
    view and passed data to it, so we can use that data in our view.
    Then create the view file and specify th route to it.


# Database Integration 
    First use composer get 'Illuminate/database' package.
    ```BASH 
        composer show illuminate/database 
        composer search illuminate/database 
        composer require illuminate/database 
    ```
   
    Now create a file app/database.php.
    Then go to init.php and require the composer's autoloader file and
    database.php file that we created.
    Now in the composer.json file add the models directory to autoload.

    ```JSON
    {
    "require": {
        "illuminate/database": "^7.14"
    },
    "autoload": {
        "classmap": [
            "app/models"
        ]
    }
}
    ```

    If we want to use a model in our models directory, it will be autoloaded and
    we can use them globaly.now dump autoloaded files .

    ```BASH 
        composer dump-autoload
    ```
    After this we can go to HomeController for example and use something like :

    ```PHP
        User::find(1)
    ```

    Add the DB credentials to app/database.php as its shown in
    'illuminate/databse ' packages documentation.Now extend our models with
    Eloquent class.

