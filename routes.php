<?php
//home routes
$router->get('app', 'VisitsController@allVisits');

//Authenticate routes
$router->post('app/login', "Authenticate@validate");
$router->get('app/login', "Authenticate@loggedIn");
$router->get('app/logout', "Authenticate@logout");

//users routes
$router->get('app/users', 'UsersController@allUsers');
$router->get('app/users/{userId}', 'UsersController@oneUser');
$router->post('app/users', 'UsersController@addUser');

//customers routes
$router->get('app/customers', 'CustomerController@allCustomers');
$router->get('app/customers/{customerId}', 'CustomerController@oneCustomer');
$router->post('app/customers', 'CustomerController@addCustomer');
$router->get('app/customers/{customerId}/customers', 'CustomerController@oneCustomer');

//visits routes
$router->get('app/visits', 'VisitsController@allVisits');
$router->get('app/visits/{customerId}', 'VisitsController@oneVisit');
$router->post('app/visits', 'VisitsController@addVisit');
$router->get('app/visit_type', 'VisitsController@visitTypes');

//pets routes
$router->get('app/pets/{petId}','PetsController@onePet');
$router->get('app/pets','PetsController@allPets');
$router->post('app/pets','PetsController@addPet');
$router->post('app/petsNames', 'CustomerController@petsFromCustomers');

//species routes
$router->get('app/species', 'CustomerController@getSpecies');

//gender routes
$router->get('app/genders', 'CustomerController@getGenders');