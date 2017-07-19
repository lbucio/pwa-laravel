<!DOCTYPE html><html lang=en><head><meta charset=utf-8><meta http-equiv=X-UA-Compatible content="IE=edge"><meta name=viewport content="width=device-width,initial-scale=1"><title>pwa-vue</title><link rel=icon type=image/png sizes=32x32 href=/static/img/icons/favicon-32x32.png><link rel=icon type=image/png sizes=16x16 href=/static/img/icons/favicon-16x16.png><!--[if IE]><link rel="shortcut icon" href="/static/img/icons/favicon.ico"><![endif]--><link rel=manifest href=/static/manifest.json><meta name=theme-color content=#4DBA87><meta name=apple-mobile-web-app-capable content=yes><meta name=apple-mobile-web-app-status-bar-style content=black><meta name=apple-mobile-web-app-title content=pwa-vue><link rel=apple-touch-icon href=/static/img/icons/apple-touch-icon-152x152.png><meta name=msapplication-TileImage content=/static/img/icons/msapplication-icon-144x144.png><meta name=msapplication-TileColor content=#000000><link rel=preload href=/static/js/app.715b10c1a48ce147900e.js as=script><link rel=preload href=/static/css/app.ec5053e15b2a5fe9bbc12eca316a1621.css as=style><link rel=preload href=/static/js/vendor.775eeb1b764a6beb2a03.js as=script><link rel=preload href=/static/js/manifest.dac0aa19e05fd47411ff.js as=script><link href=/static/css/app.ec5053e15b2a5fe9bbc12eca316a1621.css rel=stylesheet></head><body><noscript>This is your fallback content in case JavaScript fails to load.</noscript><div id=app></div><script>(function() {
  'use strict';

  // Check to make sure service workers are supported in the current browser,
  // and that the current page is accessed from a secure origin. Using a
  // service worker from an insecure origin will trigger JS console errors.
  const isLocalhost = Boolean(window.location.hostname === 'localhost' ||
      // [::1] is the IPv6 localhost address.
      window.location.hostname === '[::1]' ||
      // 127.0.0.1/8 is considered localhost for IPv4.
      window.location.hostname.match(
        /^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/
      )
    );

  window.addEventListener('load', function() {
      if ('serviceWorker' in navigator &&
          (window.location.protocol === 'https:' || isLocalhost)) {
        navigator.serviceWorker.register('service-worker.js')
        .then(function(registration) {
          // updatefound is fired if service-worker.js changes.
          registration.onupdatefound = function() {
            // updatefound is also fired the very first time the SW is installed,
            // and there's no need to prompt for a reload at that point.
            // So check here to see if the page is already controlled,
            // i.e. whether there's an existing service worker.
            if (navigator.serviceWorker.controller) {
              // The updatefound event implies that registration.installing is set
              const installingWorker = registration.installing;

              installingWorker.onstatechange = function() {
                switch (installingWorker.state) {
                  case 'installed':
                    // At this point, the old content will have been purged and the
                    // fresh content will have been added to the cache.
                    // It's the perfect time to display a "New content is
                    // available; please refresh." message in the page's interface.
                    break;

                  case 'redundant':
                    throw new Error('The installing ' +
                                    'service worker became redundant.');

                  default:
                    // Ignore
                }
              };
            }
          };
        }).catch(function(e) {
          console.error('Error during service worker registration:', e);
        });
      }
  });
})();</script><script type=text/javascript src=/static/js/manifest.dac0aa19e05fd47411ff.js></script><script type=text/javascript src=/static/js/vendor.775eeb1b764a6beb2a03.js></script><script type=text/javascript src=/static/js/app.715b10c1a48ce147900e.js></script></body></html>