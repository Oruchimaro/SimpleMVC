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
