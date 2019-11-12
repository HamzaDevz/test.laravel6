                                     Laravel 6 REST API with Passport

Here, i  create rest api with authentication using passport in laravel 6 application .

1 -Install Dependencies : 
                                 composer install
                                 
                                 
2-Configure the Environment  :

Create .env file:

                                $ cat .env.example > .env
                                
                                
                                
                                               
                
 3- Next, we need to install passport using command, Using passport:install command, it will create token keys for security : 
 
 
                                php artisan passport:install
                
                

4- Run                          
                                php artisan key:generate
5- Run 
                                php artisan migrate --seed




 
 
 
 
 Route Api Endpoint : 
 

POST	http://localhost:8000/api/auth/login	        login and get your access token

POST	http://localhost:8000/api/auth/register	        create a new user into your application

GET 	http://localhost:8000/api/products	            Product List 

POST	http://localhost:8000/api/products	            Create Product  

GET	    http://localhost:8000/api/products/{id}	        Show Product 

PUT	    http://localhost:8000/api/products/{id}		    Update Product 

DELETE	http://localhost:8000/api/products/{id}	      Delete Product  
                
                
                
  
 
