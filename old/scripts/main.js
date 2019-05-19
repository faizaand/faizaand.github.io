/*!
 *
 *  Web Starter Kit
 *  Copyright 2015 Google Inc. All rights reserved.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *    https://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License
 *
 */
/* eslint-env browser */
(function() {
  'use strict';

  // Check to make sure service workers are supported in the current browser,
  // and that the current page is accessed from a secure origin. Using a
  // service worker from an insecure origin will trigger JS console errors. See
  // http://www.chromium.org/Home/chromium-security/prefer-secure-origins-for-powerful-new-features
  var isLocalhost = Boolean(window.location.hostname === 'localhost' ||
      // [::1] is the IPv6 localhost address.
      window.location.hostname === '[::1]' ||
      // 127.0.0.1/8 is considered localhost for IPv4.
      window.location.hostname.match(
        /^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/
      )
    );

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
          // The updatefound event implies that registration.installing is set:
          // https://slightlyoff.github.io/ServiceWorker/spec/service_worker/index.html#service-worker-container-updatefound-event
          var installingWorker = registration.installing;

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

  // Your custom JavaScript goes here
  /*
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

  (function($) {

    skel.breakpoints({
      xlarge:	'(max-width: 1680px)',
      large:	'(max-width: 1280px)',
      medium:	'(max-width: 980px)',
      small:	'(max-width: 736px)',
      xsmall:	'(max-width: 480px)',
      xxsmall: '(max-width: 360px)'
    });

    /**
     * Applies parallax scrolling to an element's background image.
     * @return {jQuery} jQuery object.
     */
    $.fn._parallax = function(intensity) {

      var	$window = $(window),
        $this = $(this);

      if (this.length == 0 || intensity === 0)
        return $this;

      if (this.length > 1) {

        for (var i=0; i < this.length; i++)
          $(this[i])._parallax(intensity);

        return $this;

      }

      if (!intensity)
        intensity = 0.25;

      $this.each(function() {

        var $t = $(this),
          $bg = $('<div class="bg"></div>').appendTo($t),
          on, off;

        on = function() {

          $bg
            .removeClass('fixed')
            .css('transform', 'matrix(1,0,0,1,0,0)');

          $window
            .on('scroll._parallax', function() {

              var pos = parseInt($window.scrollTop()) - parseInt($t.position().top);

              $bg.css('transform', 'matrix(1,0,0,1,0,' + (pos * intensity) + ')');

            });

        };

        off = function() {

          $bg
            .addClass('fixed')
            .css('transform', 'none');

          $window
            .off('scroll._parallax');

        };

        // Disable parallax on ..
        if (skel.vars.browser == 'ie'		// IE
          ||	skel.vars.browser == 'edge'		// Edge
          ||	window.devicePixelRatio > 1		// Retina/HiDPI (= poor performance)
          ||	skel.vars.mobile)				// Mobile devices
          off();

        // Enable everywhere else.
        else {

          skel.on('!large -large', on);
          skel.on('+large', off);

        }

      });

      $window
        .off('load._parallax resize._parallax')
        .on('load._parallax resize._parallax', function() {
          $window.trigger('scroll');
        });

      return $(this);

    };

    $(function() {

      var	$window = $(window),
        $body = $('body'),
        $wrapper = $('#wrapper'),
        $header = $('#header'),
        $nav = $('#nav'),
        $main = $('#main'),
        $navPanelToggle, $navPanel, $navPanelInner;

      // Disable animations/transitions until the page has loaded.
      $window.on('load', function() {
        window.setTimeout(function() {
          $body.removeClass('is-loading');
        }, 100);
      });

      // Prioritize "important" elements on medium.
      skel.on('+medium -medium', function() {
        $.prioritize(
          '.important\\28 medium\\29',
          skel.breakpoint('medium').active
        );
      });

      // Scrolly.
      $('.scrolly').scrolly();

      // Background.
      $wrapper._parallax(0.925);

      // Intro.
      var $intro = $('#intro');

      if ($intro.length > 0) {

        // Hack: Fix flex min-height on IE.
        if (skel.vars.browser == 'ie') {
          $window.on('resize.ie-intro-fix', function() {

            var h = $intro.height();

            if (h > $window.height())
              $intro.css('height', 'auto');
            else
              $intro.css('height', h);

          }).trigger('resize.ie-intro-fix');
        }

        // Hide intro on scroll (> small).
        skel.on('!small -small', function() {

          $main.unscrollex();

          $main.scrollex({
            mode: 'bottom',
            top: '25vh',
            bottom: '-50vh',
            enter: function() {
              $intro.addClass('hidden');
            },
            leave: function() {
              $intro.removeClass('hidden');
            }
          });

        });

        // Hide intro on scroll (<= small).
        skel.on('+small', function() {

          $main.unscrollex();

          $main.scrollex({
            mode: 'middle',
            top: '15vh',
            bottom: '-15vh',
            enter: function() {
              $intro.addClass('hidden');
            },
            leave: function() {
              $intro.removeClass('hidden');
            }
          });

        });

      }

    });

  })(jQuery);



})();
