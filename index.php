<?php
/**
An introduction to MVC Architecture in PHP.

What is MVC?
MVC stands for Model, View, Controller.

Model - Handles all database queries and any handling of data.
View - Displays information to the user.
Controller - Handles the URI and communicates with the view and model. Determines which page to show etc.

A model was not implemented in this example as no database functions are used.

Created By Andrew Lee http://andrewleenj.com
*/

//Define a global constant to prevent direct access to PHP pages.
define('COMPONENT', true);

//Define a global constant for our application.
define('PATH', dirname(__FILE__) . '/');

//Bootstrap the application.
require PATH . 'resources/boostrap.php';
?>