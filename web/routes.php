<?php

use wfm\Router;

Router::add('^$', ['controller' => 'Index', 'action' => 'index']);
Router::add('^login', ['controller' => 'Login', 'action' => 'index']);
Router::add('^register', ['controller' => 'Register', 'action' => 'index']);
Router::add('^logout', ['controller' => 'Login', 'action' => 'logout']);


Router::add('^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/?$');
