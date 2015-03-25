/*globals window, document, define, $, Backbone, console, Modernizr, require, alert*/



require.config({
    paths: {
        'router': '../bower_components/requirejs-router/router'
    }
});

require(['router', 'modules/eastereggs'], function(router, EasterEggs) {
    'use strict';

    router
        .registerRoutes({
            // matches an exact path
            home: {
                path: '/',
                moduleId: 'home/homeView'
            },

            // matches using a wildcard
            customer: {
                path: '/customer/*',
                moduleId: 'customer/customerView'
            },

            // matches using a path variable
            order: {
                path: '/orders/:id',
                moduleId: 'order/orderView'
            },

            // matches a pattern like '/word/number'
            regex: {
                path: /^\/\w+\/\d+$/i,
                moduleId: 'regex/regexView'
            },

            // matches everything else
            notFound: {
                path: '*',
                moduleId: 'views/notfound'
            }
        })
        .on('routeload', function (Module, routeArguments) {
            var keys = [];

            

            EasterEggs.listen();

            var quotes = [
                '"You came in that thing? You\'re braver than I thought."',
                '"Great, kid. Don’t get cocky!"',
                '"It\'s a trap!"',
                '"When 900 years old, you reach… Look as good, you will not."',
                '"You don’t know how hard I found it, signing the order to terminate your life"',
                '"He\'s holding a thermal detonator!"',
                '"Aren\'t you a little short for a storm trooper"',
                '"Why you stuck-up, half-witted, scruffy-looking nerf-herder!"',
                '"Lando\'s not a system he’s a man!"',
                '"These aren\'t the droids you\'re looking for..."',
                '"Traveling through hyperspace ain\'t like dusting crops, farm boy."',
                '"If there\'s a bright centre to the universe, you\'re on the planet that it\'s farthest from."',
                '"Don\'t call me a mindless philosopher, you overweight glob of grease."',
                '"I find your lack of faith disturbing."',
                '"Help me Obi-Wan Kenobi, you\'re my only hope."',
                '"Laugh it up, Fuzz ball."',
                '"No. I am your Father."',
                '"Obi-Wan has taught you well."',
                '"One thing\'s for sure, we\'re all going to be a lot thinner."',
                '"Great shot kid, that was one in a million."',
                '"I suggest a new strategy, R2: let the Wookiee win."'




            ];
            
            console.log(quotes[Math.floor((Math.random() * quotes.length))]);




        })
        .init(); // Set up event handlers and trigger the initial page load
});
