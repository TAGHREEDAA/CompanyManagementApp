# Coding Standards

To collaborate in this project you have to follow our coding standards as shown below:

## Migrations
- Tables have to be named in small letters.
-  If table name consists of 2 words you need to separate with underscore `table_name`


## Controllers
- There is a directory for Admin controllers.
- Directory for Driver controllers.
- Directory for Client controllers.

## Routes
- There will be a namespace for every user [Admin/ Driver / Client]

- Put routes into groups.

- Example: Admin namespace may has some of namespaces... every one has a group of routes

---Admin

----Clients

------Group of routes relate to the clients and can only be accessed by the admin.



