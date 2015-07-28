<?php

include_once(ROOT . DS . 'application' . DS . "Controllers" . DS . "main.php");

// validate login
$app->post(
    '/validate_login','main:validate_login'
)->setParams(array($app));

// Register new user
$app->post(
    '/register_user','main:register_user'
)->setParams(array($app));

// User Data
$app->post(
    '/user_data','main:user_data'
)->setParams(array($app));

// Route to upload profile image
$app->post(
    '/image_user','main:image_user'
)->setParams(array($app));

// Route to upload biography image
$app->post(
    '/image_user_biography','main:image_user_biography'
)->setParams(array($app));

// All users
$app->post(
    '/users','main:users'
)->setParams(array($app));

// Route for change password
$app->post(
    '/change_password','main:change_password'
)->setParams(array($app));

// Route for change name user
$app->post(
    '/change_name_user','main:change_name_user'
)->setParams(array($app));

// Route for change username user
$app->post(
    '/change_username_user','main:change_username_user'
)->setParams(array($app));

// Route for verify username user
$app->post(
    '/verify_username_user','main:verify_username_user'
)->setParams(array($app));

// Route for all levels of each mode game
$app->post(
    '/levels_mode','main:levels_mode'
)->setParams(array($app));

// Route for all categories of each level game
$app->post(
    '/category_level','main:category_level'
)->setParams(array($app));

// Route for register new question 
$app->post(
    '/register_question','main:register_question'
)->setParams(array($app));

// Route for get all questions 
$app->post(
    '/all_questions/:filter','main:all_questions'
)->setParams(array($app));

// Route for get data question 
$app->post(
    '/data_question','main:data_question'
)->setParams(array($app));

// Route for active or deactive question 
$app->post(
    '/question/:param','main:question'
)->setParams(array($app));

$app->get(
    '/andres','main:get_route'
)->setParams(array($app));

// PUT route
$app->put('/put', function () {
        echo 'This is a PUT route';
    }
);

// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});

// DELETE route
$app->delete('/delete', function () {
        echo 'This is a DELETE route';
    }
);

$app->run();

?>