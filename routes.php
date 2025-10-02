<?php

require_once __DIR__.'/router.php';

// Views
get('/', 'views/index.php');
get('/home', 'views/home.php');
get('/login', 'views/login.php');
get('/profile', 'views/profile.php');
get('/contact-us', 'views/contact-us.php');
get('/search', 'views/search.php');
get('/users/$id', 'views/user.php');
get('/bridge-logout', 'bridges/bridge-logout.php');
get('/shop/$gender/$age/$maxPrice', 'views/shop.php');

// Bridges
post('/bridge-login', 'bridges/bridge-login.php');
post('/bridge-logout', 'bridges/bridge-logout.php');
post('/bridge-signup', 'bridges/bridge-signup.php');
post('/bridge-search', 'bridges/bridge-search.php');

// APIs
get('/api-get-user', 'apis/api-get-user.php');
get('/api-like-tweet', 'apis/api-like-tweet.php');
get('/api-unlike-tweet', 'apis/api-unlike-tweet.php');
post('/api-save-user', 'apis/api-save-user.php');
post('/api-delete-user', 'apis/api-delete-user.php');
get('/api-get-posts', 'apis/api-get-posts.php');
get('/api-create-password', 'apis/api-create-password.php');

// 404 Page Not Found
any('/404','views/404.php');