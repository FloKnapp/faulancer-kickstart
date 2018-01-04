# Introduction
This repository provides default configuration files and a very basic 
directory structure to kickstart your project with the faulancer framework. 
This framework is maintained in my spare time with the goal to simplify 
every process. 

This means that there are some techniques which are meanwhile considered 
'deprecated' or 'not fancy enough', but provides robust and reliable 
functionality. For example, the ServiceLocator- and the Factory-Pattern. 
IHMO there are many positive aspects:
- it's really simple and understandable
- it' well proven over the past decade
- it automatically is 'separation of concerns'

---

#Get started
Navigate to your preferred directory where the application should be 
installed and enter the following command into console:
```bash
user@machine> composer create-project floknapp/faulancer-kickstart path-to-your-directory/
```

If you already created the target directory, navigate to it and type:
```bash
user@machine> composer create-project floknapp/faulancer-kickstart .
```

---

#Overview

###Controllers
You can define controllers wherever you want. But i strongly suggest to 
stick with the current directory structure, which provides a simple yet 
clear overall view about the responsibilities.

###Services
Everything is a service. For better separation all services are located in 
the 'Service'-Folder. The services file- and classname should be suffixed 
with the term 'Service'. 

Example: `RegistrationService`

The managing ServiceLocator automatically searches for a 'Factory'-Folder 
within the 'Service'-Folder which is the home for Factories. These 
factories create the service and inject dependencies into the constructor. 

The currently fancy DependencyInjection-Pattern is from the view of it's 
functionality nearly the same as the ServiceLocator-/Factory-Pattern.

Note: Factories must have the same name as the service itself, but suffixed 
with the term 'Factory'.

Example: `RegistrationServiceFactory`

###Views
Views are highly flexible due to template inheritance. You can easily swap 
the parent layout within the content view. Just take a look at the files 
'/templates/layout.phtml' and '/templates/pages/index.phtml'. 
You may immediately understand what's going on.

Note: In 'app.conf.php' there is the template root path defined without 
a trailing slash. So whenever you reference a template you write it as 
it would be an absolute path beginning from that directory. IMHO it 
prevents confusion if you got a few more templates there.

Example (within a controller): `$this->render('/path/to/template.phtml)`

###Routes
The route structure is pretty straightforward. You define an array with 
the name of the route as the key. The value holds (next to the basic options 
like 'path' and 'action') multiple route specific options like i18n-Keys 
for automatic language specific link generation or role names to permit 
only logged in users access to that site. Just take a look at the file 
'routes.conf.php'.

###ORM and Entities


###Database
The Faulancer Framework is based on a third party library for simple and 
fast database operations