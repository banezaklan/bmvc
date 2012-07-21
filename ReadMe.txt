
BMVC a simple PHP MVC web application

Application was created with MVC design pattern in mind. I tried to create 
a re-usable code base which can be extended depending on the requirements.
Files are split in four folders: controller, model, view and system.

System folder contains MVC base class files and few helper classes.

All MVC classes inherit the same parent class: bmvc_base, which purpose is to 
provide globally used objects and config data. For example it would be a place 
to put session and access control related functionality, etc.
Per MVC design logic, there are three base classes controller_base, model_base 
and view_base, which are either used directly or further extended depending on
the website structure requirements.
Example of extending the base class would be the controller_main_layout class, 
which is used to provide a way to change entire layout of the site by changing a 
layout view used in the class. Note that site layout view is the same as other 
views.
There are few naming rules as a result of the way routes are decoded.
Controller class must have 'controller_' prefix and action methods must have
'action_' prefix. 
Index.php is always in the root of the site and it contains a very simple routing
as well as parameter decoding logic.
The rules of the url are as follows:
www.mysite.com/index.php/controller/action/para0/para1/para2.../para5

By using url rewriting it can be shortened.

Idea behind the classes is to create a "stub" of a flexible MVC-like framework, 
which is as object oriented as possible but simple to setup and use. 