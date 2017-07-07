<?php

/*
 * This is the main file of the application, including routing and controllers.
 *
 * $app is a Slim application instance, see the framework documentation for more details:
 * http://docs.slimframework.com/
 *
 * The order of the routes matter, as it will define the priority of routes. For that reason we
 * need to keep the more "generic" routes, such as the pages route, at the end of the file.
 *
 * If you decide to change the URLs, make sure to change PrismicLinkResolver in LinkResolver.php
 * as well to make sures links in your site are correctly generated.
 */

use Prismic\Api;
use Prismic\LinkResolver;
use Prismic\Predicates;

require_once 'includes/http.php';


$apiEndpoint = $WPGLOBAL['app']->getContainer()->get('settings')['prismic.url'];
$repoEndpoint = str_replace("/api", "", $apiEndpoint);
$url = $repoEndpoint . '/app/settings/onboarding/run';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array("language=php&framework=slim"));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result=curl_exec ($ch);
curl_close ($ch);


// Index page
$app->get('/', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  $home = $api->getSingle('home');
  
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'main', 
    array(
      'home' => $home,
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});


// Geo Distributions page
$app->get('/geo-distribution', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'geo-distribution', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Geo Distributions page
$app->get('/analytics', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'analytics', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});



// Users Profiles page
$app->get('/events', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'events', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Users Profiles page
$app->get('/users_profiles', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'users_profiles', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Campaigns page
$app->get('/campaigns', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'campaigns', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Campaigns page
$app->get('/in-app-notifications', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'in-app-notifications', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});


// push-notifications page
$app->get('/push-notifications', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'push-notifications', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// push-notifications page
$app->get('/sms', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  
  render(
    $app, 'sms', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});



// push-notifications page
$app->get('/email-marketing', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');

  $clients = $api->query(Predicates::at("document.type", "c"));
 
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );
  
  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'email-marketing', 
    array(
      'clients' => $clients->getResults(),
      'general_content' => $generalContent,
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Index page
$app->get('/all_features', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'all_features', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});


// Index page
$app->get('/company', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'company', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});

// Index page
$app->get('/blog-list', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'blog-list', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});

// Index page
$app->get('/press-list', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'press-list', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});



// Index page
$app->get('/terms-of-service', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  $termsOfService = $api->getSingle('terms_of_service');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'terms-of-service', 
    array(
      'general_content' => $generalContent,
      'terms_of_service' => $termsOfService,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults()
    ) 
  );

});

// Index page
$app->get('/contact', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'contact', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});

// Index page
$app->get('/pricing', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'pricing', 
    array(
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});

// Index page
$app->get('/privacy-policy', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  $privacyPolice = $api->getSingle('privacy_police');
  
  $clients = $api->query(Predicates::at("document.type", "c"));

  //1 11 2 6 7 8 9 10 5 4  
  $ids = ['4', '1', '5', '6', '7', '8', '9', '10', '11'];
  $features_menu = $api->query(
      Predicates::in('my.features_item.uid', $ids)
  );

  $menu_learn = $api->query(
    Predicates::at('document.type', 'menu_learn'),
    [ 'orderings' => '[my.menu_learn.uid]' ]
  );

  $menu_doc = $api->query(
    Predicates::at('document.type', 'menu_doc'),
    [ 'orderings' => '[my.menu_doc.uid]' ]
  );

  $menu_user_guide = $api->query(
    Predicates::at('document.type', 'menu_user_guide'),
    [ 'orderings' => '[my.menu_user_guide.uid]' ]
  );

  $menu_help = $api->query(
    Predicates::at('document.type', 'menu_help'),
    [ 'orderings' => '[my.menu_help.uid]' ]
  );
  

  $features_items = $api->query(
    Predicates::at('document.type', 'features_item'),
    [ 'orderings' => '[my.features_item.uid]' ]
  );
  
  render(
    $app, 'privacy-policy', 
    array(
      'privacy_police' => $privacyPolice,
      'general_content' => $generalContent,
      'clients' => $clients->getResults(),
      'features_items' => $features_items->getResults(),
      'features_menu' => $features_menu->getResults(),
      'menu_learn' => $menu_learn->getResults(),
      'menu_doc' => $menu_doc->getResults(),
      'menu_user_guide' => $menu_user_guide->getResults(),
      'menu_help' => $menu_help->getResults(),
    ) 
  );

});


// Index page
$app->get('/login', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  render(
    $app, 'login', 
    array(
      'general_content' => $generalContent,
    ) 
  );

});

// Index page
$app->get('/sign-up', function ($request, $response) use ($app, $prismic) {

  // Query the API for the homepage content and all the posts
  $api = $prismic->get_api();

  $generalContent = $api->getSingle('general_content');
  
  render(
    $app, 'sign-up', 
    array(
      'general_content' => $generalContent,
    ) 
  );

});



// Help Page
$app->get('/help', function ($request, $response) use ($app, $prismic) {
  $DEFAULT_ENDPOINT = 'https://tapgage.prismic.io/api';
  $API_ENDPOINT = $app->getContainer()->get('settings')['prismic.url'];
  preg_match("/^(https?:\/\/([-_a-zA-Z0-9]+)\..+)\/api$/", $API_ENDPOINT, $match);
  $repoURL = $match[1];
  $name = $match[2];
  $host = $request->getUri()->getBaseUrl();
  $isConfigured = $DEFAULT_ENDPOINT != $API_ENDPOINT;
  render($app, 'help', array(
    'isConfigured' => $isConfigured,
    'repoURL'=> $repoURL,
    'name'=> $name,
    'host'=> $host
  ));
});

// Previews
$app->get('/preview', function ($request, $response) use ($app, $prismic) {
  $token = $request->getParam('token');
  $url = $prismic->get_api()->previewSession($token, $prismic->linkResolver, '/');
  setcookie(Prismic\PREVIEW_COOKIE, $token, time() + 1800, '/', null, false, false);
  return $response->withStatus(302)->withHeader('Location', $url);
});
