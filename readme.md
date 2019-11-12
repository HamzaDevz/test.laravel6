                                     Laravel 6 REST API with Passport

Here, i  create rest api with authentication using passport in laravel 6 application .

Install Dependencies : 
                                 composer install

First , we need to install passport via the Composer package manager :
 
                                composer require laravel/passport
                
                
 Next, we need to install passport using command, Using passport:install command, it will create token keys for security : 
 
 
                                php artisan passport:install
                
                
Configure the Environment  :

Create .env file:

                                $ cat .env.example > .env


Migrate and Seed the Database :
                                
                                $ php artisan migrate:fresh --seed
 
 
 
 
 Route Api Endpoint : 
 

POST	http://localhost:8000/api/auth/login	        login and get your access token

POST	http://localhost:8000/api/auth/register	        create a new user into your application

GET 	http://localhost:8000/api/products	            Product List 

POST	http://localhost:8000/api/products	            Create Product  

GET	    http://localhost:8000/api/products/{id}	        Show Product 

PUT	    http://localhost:8000/api/products/{id}		    Update Product 

DELETE	http://localhost:8000/api/products/{id}	      Delete Product  
                
                
                
  
 
