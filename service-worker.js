/**
 * Copyright 2016 Google Inc. All rights reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
*/

// DO NOT EDIT THIS GENERATED OUTPUT DIRECTLY!
// This file should be overwritten as part of your build process.
// If you need to extend the behavior of the generated service worker, the best approach is to write
// additional code and include it using the importScripts option:
//   https://github.com/GoogleChrome/sw-precache#importscripts-arraystring
//
// Alternatively, it's possible to make changes to the underlying template file and then use that as the
// new base for generating output, via the templateFilePath option:
//   https://github.com/GoogleChrome/sw-precache#templatefilepath-string
//
// If you go that route, make sure that whenever you update your sw-precache dependency, you reconcile any
// changes made to this original template file with your modified copy.

// This generated service worker JavaScript will precache your site's resources.
// The code needs to be saved in a .js file at the top-level of your site, and registered
// from your pages in order to be used. See
// https://github.com/googlechrome/sw-precache/blob/master/demo/app/js/service-worker-registration.js
// for an example of how you can register this script and handle various service worker events.

/* eslint-env worker, serviceworker */
/* eslint-disable indent, no-unused-vars, no-multiple-empty-lines, max-nested-callbacks, space-before-function-paren, quotes, comma-spacing */
'use strict';

var precacheConfig = [["Prototype/New Wireframe 1.png","d21ef4ceb127c20b7fca7eeee40c0324"],["README.md","1f1336e9abc791297d8bd3c83b6baa6f"],["asblEtdon.php","8a81c679cd7e2c203ebb5adb579fb3ce"],["benevole.php","5abda5825293e29b6f924424797eba5b"],["composer.json","c8ffeb470728e701d8bc8f2582e46b3a"],["composer.lock","e67a1eeed6dfefae26cdef976db30736"],["contact.php","b05e5912f005b63e9d6136fecb808fb7"],["css/business-casual.css","78df5ef17e3fb035dc5a02726570e29c"],["css/business-casual.min.css","85aaf2e918071ee0fd845cd3c44431cb"],["css/style.css","6f3b82585342b934ac00a89449a42dd9"],["footer.php","1488d10f7a208cc360f35ec194f9565a"],["form-logs.php","d41d8cd98f00b204e9800998ecf8427e"],["formation.php","c1232c6471d97fb679fbc596953ad87b"],["formulaire_hakan.php","2b0a6e5776e3524e9be636a6b4e60075"],["gmail.php","c5e90b6c8206b2bc65a47034f93c7a99"],["img/acceuil.jpg","2f032170c92760d1ebf5e56e55e34376"],["index.php","0657e1cd30689fe405dc644fae953dc1"],["logs.txt","d41d8cd98f00b204e9800998ecf8427e"],["navbar.php","e1622c2b2a28e7fc8cf6724e0156a085"],["pass.php","433f5711d95a4d4d8053c261a6eb9e19"],["upload.php","9298787c597122a887bccf4933547976"],["upload/Thumbs.db","06c5aebccea8386d3ccba4b58a2e6e97"],["asset/autoload.php","7ccc97c08a5c2b5e4a9607764aa07fe5"],["asset/bootstrap/css/bootstrap.css","9994d4d794d795da41a39e4b7526f9d7"],["asset/bootstrap/css/bootstrap.css.map","7f22dc40aa22dc514eaf73c8d619e8bd"],["asset/bootstrap/css/bootstrap.min.css","e59aa29ac4a3d18d092f6ba813ae1997"],["asset/bootstrap/css/bootstrap.min.css.map","ea6c3c97d126f9996d7cc206f2df625b"],["asset/bootstrap/js/bootstrap.bundle.js","a9ba10ace11075c9fd1dce8457c95b66"],["asset/bootstrap/js/bootstrap.bundle.js.map","1d446b0e668ececab31cd3cb5e137d4a"],["asset/bootstrap/js/bootstrap.bundle.min.js","ce2d7df84b9758b467f225e1f6efbc4f"],["asset/bootstrap/js/bootstrap.bundle.min.js.map","c41626cedb5efebbfb7b18e140042613"],["asset/bootstrap/js/bootstrap.js","ee003c1c7bf3d79ad359f4e845604513"],["asset/bootstrap/js/bootstrap.js.map","1659c6f13c0a9611a9ae186d99184f18"],["asset/bootstrap/js/bootstrap.min.js","85636d56f74c4c11d1abecae2051c1e4"],["asset/bootstrap/js/bootstrap.min.js.map","97aa185a0946b2aae827ac35ea0bcabb"],["asset/composer/ClassLoader.php","7bcd58ef2df6fe97165bea70fe9c7712"],["asset/composer/autoload_classmap.php","974f87c32ea7947b3fc400b8d7e9df72"],["asset/composer/autoload_namespaces.php","35e12c7d76c4a81633bcf547c0e229a9"],["asset/composer/autoload_psr4.php","bef49c9294d2e96895a4c28fd166a876"],["asset/composer/autoload_real.php","eca2303837887f5239b00743fa4b5c8f"],["asset/composer/autoload_static.php","8faa065aef413c5d56cf95a53fc9251b"],["asset/composer/installed.json","6b0804ff6dff949ad1643592016ba9b9"],["asset/jquery/jquery.js","b0e8755b0ab71a0a4aea47c3b589b47e"],["asset/jquery/jquery.min.js","378087a64e1394fc51f300bb9c11878c"],["asset/jquery/jquery.min.map","bae3c738b74dd89a555b7a54e4891608"],["asset/jquery/jquery.slim.js","463ddafe4fe82461cec020e4666981b0"],["asset/jquery/jquery.slim.min.js","a79e2167f5ab76ca6e4feeafb31fcc04"],["asset/jquery/jquery.slim.min.map","375e0272b0153d6871979c5ac2465321"],["asset/phpmailer/phpmailer/README.md","1f5479adb7a1ddb8fcd211f903ff8433"],["asset/phpmailer/phpmailer/SECURITY.md","9b8576928161fa554d70b5d5ed98ccd2"],["asset/phpmailer/phpmailer/get_oauth_token.php","6c14e01129eb48c98fe6366ad426c489"],["asset/phpmailer/phpmailer/language/phpmailer.lang-am.php","056619ad1767eb0fe6e3ddf6b437e079"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ar.php","33ac1799844f989ceda5761d3f69ae92"],["asset/phpmailer/phpmailer/language/phpmailer.lang-az.php","3b87c16df6960bc4b79e62e570e84c5a"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ba.php","e69c178be3809400483f70c5dfb1fe9a"],["asset/phpmailer/phpmailer/language/phpmailer.lang-be.php","14c07d86543e6aa0e99d25a788f2091d"],["asset/phpmailer/phpmailer/language/phpmailer.lang-bg.php","e840e139d82976c1b584b9d336345e33"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ca.php","1be0d28a1ba1b16848357506342c17a2"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ch.php","dc2e41a95e01a49ad920756d6a3c7b32"],["asset/phpmailer/phpmailer/language/phpmailer.lang-cs.php","26ba8a7ba80d9490f49b89a6259742bd"],["asset/phpmailer/phpmailer/language/phpmailer.lang-da.php","701a5dd09e71a3b394bed54dde6e4521"],["asset/phpmailer/phpmailer/language/phpmailer.lang-de.php","128d9906c91bcb10887eb147e37ec458"],["asset/phpmailer/phpmailer/language/phpmailer.lang-el.php","9e8744b4e3e4e710935932731ff9eb71"],["asset/phpmailer/phpmailer/language/phpmailer.lang-eo.php","6fa89fd00475ac0f90b42f7936bf86e7"],["asset/phpmailer/phpmailer/language/phpmailer.lang-es.php","713058e15831fc265b135544fc22f7fc"],["asset/phpmailer/phpmailer/language/phpmailer.lang-et.php","eaef7ae1dbfc537230b9a33a4f855b92"],["asset/phpmailer/phpmailer/language/phpmailer.lang-fa.php","349dd8ddf58c2d4fc465175956ed808b"],["asset/phpmailer/phpmailer/language/phpmailer.lang-fi.php","eebeb6e63bbb2fac1e4627af4a0d00f8"],["asset/phpmailer/phpmailer/language/phpmailer.lang-fo.php","7540348b2aa2ddaf8a423fe6aeca81be"],["asset/phpmailer/phpmailer/language/phpmailer.lang-fr.php","414ac3972d8e6ffda37e09edb1096222"],["asset/phpmailer/phpmailer/language/phpmailer.lang-gl.php","b856cf123097449e3f38e4c28b7015f3"],["asset/phpmailer/phpmailer/language/phpmailer.lang-he.php","f8ce76cb3c243baa6a2a49f35fa8f0ce"],["asset/phpmailer/phpmailer/language/phpmailer.lang-hi.php","193da1176be85b1a96125ef22a58d924"],["asset/phpmailer/phpmailer/language/phpmailer.lang-hr.php","9fe76cee22e885532a47d11daf5cbd88"],["asset/phpmailer/phpmailer/language/phpmailer.lang-hu.php","b68f34e809adcbd02eade4e9858763a0"],["asset/phpmailer/phpmailer/language/phpmailer.lang-id.php","26874dbd091577ffea4b2d604354bcf9"],["asset/phpmailer/phpmailer/language/phpmailer.lang-it.php","d38edebaf22f03af44107b0964ee2e01"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ja.php","ebc5689520f4ba62be49c6da4d27c6ef"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ka.php","13ba329bb06361d5ff3468581eedea2f"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ko.php","0ca88b982ce3993a21bd9a66293e043a"],["asset/phpmailer/phpmailer/language/phpmailer.lang-lt.php","c435503e1a60ee2053274c64f177a700"],["asset/phpmailer/phpmailer/language/phpmailer.lang-lv.php","d412884e77b9649a7ff65ed8b1941206"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ms.php","a25749b7113720aa68b33906079cd1da"],["asset/phpmailer/phpmailer/language/phpmailer.lang-nb.php","4c6cd3e5ff09189c9c40e2834511c10c"],["asset/phpmailer/phpmailer/language/phpmailer.lang-nl.php","f96fcd5a2d3b91cb78e65c9f3262ef92"],["asset/phpmailer/phpmailer/language/phpmailer.lang-pl.php","5ea687c8a4717c07f05a902ce12a87da"],["asset/phpmailer/phpmailer/language/phpmailer.lang-pt.php","30d94a29755730052af776791eac8093"],["asset/phpmailer/phpmailer/language/phpmailer.lang-pt_br.php","b2d60b0a9bf25f49d46a831ebfa0fad4"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ro.php","2677ef0044fb9327735651c9eb6feb2a"],["asset/phpmailer/phpmailer/language/phpmailer.lang-rs.php","3786e37cba5ba075d91ea99c91a359f8"],["asset/phpmailer/phpmailer/language/phpmailer.lang-ru.php","497c972ba662f15c67480fca0153f097"],["asset/phpmailer/phpmailer/language/phpmailer.lang-sk.php","150bac9b639831052287bfb63eda5e6f"],["asset/phpmailer/phpmailer/language/phpmailer.lang-sl.php","97ba36e49b0ea30a62313aa890ef1178"],["asset/phpmailer/phpmailer/language/phpmailer.lang-sv.php","1b10761de1b779defe80a044e191d628"],["asset/phpmailer/phpmailer/language/phpmailer.lang-tr.php","c6d16de317171257d45097a4947357d1"],["asset/phpmailer/phpmailer/language/phpmailer.lang-uk.php","e6225e12faa1a30c1608665aba00f03e"],["asset/phpmailer/phpmailer/language/phpmailer.lang-vi.php","7909fa5263999a62bac0a3b3059485a6"],["asset/phpmailer/phpmailer/language/phpmailer.lang-zh.php","0ea13b7926c1f5ad77e55cf1eab96478"],["asset/phpmailer/phpmailer/language/phpmailer.lang-zh_cn.php","0476f6cb73f8dfff7245a60a57a426f0"],["asset/phpmailer/phpmailer/src/Exception.php","0346c0eeff7eddf79107e177d18011b0"],["asset/phpmailer/phpmailer/src/OAuth.php","20c1aa1a548c58946a0c28c723a410c4"],["asset/phpmailer/phpmailer/src/PHPMailer.php","71a24297ce42c34fee47b3d944767f52"],["asset/phpmailer/phpmailer/src/POP3.php","e673d67aad8236ad6d9cd97ddc05c146"],["asset/phpmailer/phpmailer/src/SMTP.php","a04ef150ae3b7473aae86a517868feaf"],["asset/verot/class.upload.php/LICENSE.txt","fdafc691aa5fb7f8e2a9e9521fef771b"],["asset/verot/class.upload.php/README.md","b89d8843dffed948168e3116b339b358"],["asset/verot/class.upload.php/composer.json","225e8e24e9953ca1a63bc56e4569d214"],["asset/verot/class.upload.php/src/class.upload.php","bf725c688a5fc93af2b9b8e5e6754803"],["asset/verot/class.upload.php/src/lang/class.upload.ca_CA.php","e8cc802d3c414d7bc550735ca0cf202e"],["asset/verot/class.upload.php/src/lang/class.upload.cs_CS.php","c57150cbc955077efeebd9504d1b02bc"],["asset/verot/class.upload.php/src/lang/class.upload.da_DK.php","8d8d3f08363f5bfdc0aef37ef12f404c"],["asset/verot/class.upload.php/src/lang/class.upload.de_DE.php","116255ae466eda65d371a6eefb96482a"],["asset/verot/class.upload.php/src/lang/class.upload.el_GR.php","8b0c86ccc5d6897b1be769adc904ef87"],["asset/verot/class.upload.php/src/lang/class.upload.es_ES.php","16dc9468e35b0019477701aa82d44c40"],["asset/verot/class.upload.php/src/lang/class.upload.et_EE.php","d2c956a7348e2151af3e91ed8043e704"],["asset/verot/class.upload.php/src/lang/class.upload.fa_IR.php","a777945c45df0c97fc891876ce440704"],["asset/verot/class.upload.php/src/lang/class.upload.fi_FI.php","f209747c0a2597a757cdfad6e1546a14"],["asset/verot/class.upload.php/src/lang/class.upload.fr_FR.php","56b1f00b441ae2c06c1159a421064c12"],["asset/verot/class.upload.php/src/lang/class.upload.he_IL.php","e1b87ceec3af27d81ae46d93607707f3"],["asset/verot/class.upload.php/src/lang/class.upload.hr_HR.php","c1ac4b49c1c98bbc6f655dfbab3b62e1"],["asset/verot/class.upload.php/src/lang/class.upload.hu_HU.php","158824bd0ebf20da07aac3f6d32b926b"],["asset/verot/class.upload.php/src/lang/class.upload.id_ID.php","9fe138f670b0cf733e297a99b4ceff5d"],["asset/verot/class.upload.php/src/lang/class.upload.it_IT.php","1925f369d9e0de54bd4bc102355e54da"],["asset/verot/class.upload.php/src/lang/class.upload.ja_JP.php","e5ddd650129412d7100a0a1f24a019e9"],["asset/verot/class.upload.php/src/lang/class.upload.lt_LT.php","a151598381402a6b471bbfd24f35878e"],["asset/verot/class.upload.php/src/lang/class.upload.mk_MK.php","c2b58814e84ff5670c3a20a04a1ab341"],["asset/verot/class.upload.php/src/lang/class.upload.nl_NL.php","43dc2d15a9321219d2364c74aa0f4e8f"],["asset/verot/class.upload.php/src/lang/class.upload.no_NO.php","74b16f14c11411eaee0d249808ee2504"],["asset/verot/class.upload.php/src/lang/class.upload.pl_PL.php","47722bc0438665267cdf7ef17847d5bb"],["asset/verot/class.upload.php/src/lang/class.upload.pt_BR.php","fcb161e05ff07c0f01040093d889896d"],["asset/verot/class.upload.php/src/lang/class.upload.ro_RO.php","fe3839dd9940d63e7aa3e735e0fbe6f5"],["asset/verot/class.upload.php/src/lang/class.upload.ru_RU.php","89c5ad03fa4903d9f35928d51702e96f"],["asset/verot/class.upload.php/src/lang/class.upload.ru_RU.windows-1251.php","78b81c87f45c28a30a1eeef88431fa94"],["asset/verot/class.upload.php/src/lang/class.upload.sk_SK.php","dff04a0b2d556bbba21034431ad179b6"],["asset/verot/class.upload.php/src/lang/class.upload.sr_YU.php","de78833266760e91b88fa0ac30e4be93"],["asset/verot/class.upload.php/src/lang/class.upload.sv_SE.php","c63f52f3de3112adc3a198dd811bf172"],["asset/verot/class.upload.php/src/lang/class.upload.ta_TA.php","b6cd16b973f767d7984a4ff9b06779d7"],["asset/verot/class.upload.php/src/lang/class.upload.tr_TR.php","5b7c656dea0f540fdc3e480b4c954f0f"],["asset/verot/class.upload.php/src/lang/class.upload.uk_UA.php","fa7af99738b3411f9118a3ec74f38d44"],["asset/verot/class.upload.php/src/lang/class.upload.uk_UA.windows-1251.php","b075532c3dcf80b0a33fbac42266ea7a"],["asset/verot/class.upload.php/src/lang/class.upload.vn_VN.php","155597b3a90c440c4e5eb2f7ebc6bd83"],["asset/verot/class.upload.php/src/lang/class.upload.xx_XX.php","1ed052b8736ef8ce781680ce22fb9005"],["asset/verot/class.upload.php/src/lang/class.upload.zh_CN.gb-2312.php","605a7f0af2fe2b1864aa4a506831df99"],["asset/verot/class.upload.php/src/lang/class.upload.zh_CN.php","0c54a397f0227143667b1d56c0229835"],["asset/verot/class.upload.php/src/lang/class.upload.zh_TW.php","37ba89153babb410edec6693da3160c8"],["asset/verot/class.upload.php/test/bg.gif","a28ef71a1c661330f0a0abd4fe6fa20d"],["asset/verot/class.upload.php/test/foo.gdf","c23f6763e578afa9fc7c220a929a1216"],["asset/verot/class.upload.php/test/foo.ttf","74692ba304e5cbd6849892291188cb28"],["asset/verot/class.upload.php/test/index.html","372e5e685052f1499ec82adb6d91b9a0"],["asset/verot/class.upload.php/test/test.bmp","7845e38372dde8e2d1e7b92be94e82bc"],["asset/verot/class.upload.php/test/test.gif","780a3e6e720cb83feff25f181dd7f3cc"],["asset/verot/class.upload.php/test/test.jpg","fff1504892be82d505d7f43f212d756c"],["asset/verot/class.upload.php/test/test.png","aa24e34400066bbb3bffa596839446bf"],["asset/verot/class.upload.php/test/upload.php","ee8bfabaabd796f5eca7fa74175cf9b5"],["asset/verot/class.upload.php/test/watermark.png","b68cb43acf0232f30a22d49d705911a3"],["asset/verot/class.upload.php/test/watermark_large.png","9f2369168e3bc1edd6823fa8dd594018"]];
var cacheName = 'sw-precache-v3-sw-precache-' + (self.registration ? self.registration.scope : '');


var ignoreUrlParametersMatching = [/^utm_/];



var addDirectoryIndex = function (originalUrl, index) {
    var url = new URL(originalUrl);
    if (url.pathname.slice(-1) === '/') {
      url.pathname += index;
    }
    return url.toString();
  };

var cleanResponse = function (originalResponse) {
    // If this is not a redirected response, then we don't have to do anything.
    if (!originalResponse.redirected) {
      return Promise.resolve(originalResponse);
    }

    // Firefox 50 and below doesn't support the Response.body stream, so we may
    // need to read the entire body to memory as a Blob.
    var bodyPromise = 'body' in originalResponse ?
      Promise.resolve(originalResponse.body) :
      originalResponse.blob();

    return bodyPromise.then(function(body) {
      // new Response() is happy when passed either a stream or a Blob.
      return new Response(body, {
        headers: originalResponse.headers,
        status: originalResponse.status,
        statusText: originalResponse.statusText
      });
    });
  };

var createCacheKey = function (originalUrl, paramName, paramValue,
                           dontCacheBustUrlsMatching) {
    // Create a new URL object to avoid modifying originalUrl.
    var url = new URL(originalUrl);

    // If dontCacheBustUrlsMatching is not set, or if we don't have a match,
    // then add in the extra cache-busting URL parameter.
    if (!dontCacheBustUrlsMatching ||
        !(url.pathname.match(dontCacheBustUrlsMatching))) {
      url.search += (url.search ? '&' : '') +
        encodeURIComponent(paramName) + '=' + encodeURIComponent(paramValue);
    }

    return url.toString();
  };

var isPathWhitelisted = function (whitelist, absoluteUrlString) {
    // If the whitelist is empty, then consider all URLs to be whitelisted.
    if (whitelist.length === 0) {
      return true;
    }

    // Otherwise compare each path regex to the path of the URL passed in.
    var path = (new URL(absoluteUrlString)).pathname;
    return whitelist.some(function(whitelistedPathRegex) {
      return path.match(whitelistedPathRegex);
    });
  };

var stripIgnoredUrlParameters = function (originalUrl,
    ignoreUrlParametersMatching) {
    var url = new URL(originalUrl);
    // Remove the hash; see https://github.com/GoogleChrome/sw-precache/issues/290
    url.hash = '';

    url.search = url.search.slice(1) // Exclude initial '?'
      .split('&') // Split into an array of 'key=value' strings
      .map(function(kv) {
        return kv.split('='); // Split each 'key=value' string into a [key, value] array
      })
      .filter(function(kv) {
        return ignoreUrlParametersMatching.every(function(ignoredRegex) {
          return !ignoredRegex.test(kv[0]); // Return true iff the key doesn't match any of the regexes.
        });
      })
      .map(function(kv) {
        return kv.join('='); // Join each [key, value] array into a 'key=value' string
      })
      .join('&'); // Join the array of 'key=value' strings into a string with '&' in between each

    return url.toString();
  };


var hashParamName = '_sw-precache';
var urlsToCacheKeys = new Map(
  precacheConfig.map(function(item) {
    var relativeUrl = item[0];
    var hash = item[1];
    var absoluteUrl = new URL(relativeUrl, self.location);
    var cacheKey = createCacheKey(absoluteUrl, hashParamName, hash, false);
    return [absoluteUrl.toString(), cacheKey];
  })
);

function setOfCachedUrls(cache) {
  return cache.keys().then(function(requests) {
    return requests.map(function(request) {
      return request.url;
    });
  }).then(function(urls) {
    return new Set(urls);
  });
}

self.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return setOfCachedUrls(cache).then(function(cachedUrls) {
        return Promise.all(
          Array.from(urlsToCacheKeys.values()).map(function(cacheKey) {
            // If we don't have a key matching url in the cache already, add it.
            if (!cachedUrls.has(cacheKey)) {
              var request = new Request(cacheKey, {credentials: 'same-origin'});
              return fetch(request).then(function(response) {
                // Bail out of installation unless we get back a 200 OK for
                // every request.
                if (!response.ok) {
                  throw new Error('Request for ' + cacheKey + ' returned a ' +
                    'response with status ' + response.status);
                }

                return cleanResponse(response).then(function(responseToCache) {
                  return cache.put(cacheKey, responseToCache);
                });
              });
            }
          })
        );
      });
    }).then(function() {
      
      // Force the SW to transition from installing -> active state
      return self.skipWaiting();
      
    })
  );
});

self.addEventListener('activate', function(event) {
  var setOfExpectedUrls = new Set(urlsToCacheKeys.values());

  event.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.keys().then(function(existingRequests) {
        return Promise.all(
          existingRequests.map(function(existingRequest) {
            if (!setOfExpectedUrls.has(existingRequest.url)) {
              return cache.delete(existingRequest);
            }
          })
        );
      });
    }).then(function() {
      
      return self.clients.claim();
      
    })
  );
});


self.addEventListener('fetch', function(event) {
  if (event.request.method === 'GET') {
    // Should we call event.respondWith() inside this fetch event handler?
    // This needs to be determined synchronously, which will give other fetch
    // handlers a chance to handle the request if need be.
    var shouldRespond;

    // First, remove all the ignored parameters and hash fragment, and see if we
    // have that URL in our cache. If so, great! shouldRespond will be true.
    var url = stripIgnoredUrlParameters(event.request.url, ignoreUrlParametersMatching);
    shouldRespond = urlsToCacheKeys.has(url);

    // If shouldRespond is false, check again, this time with 'index.html'
    // (or whatever the directoryIndex option is set to) at the end.
    var directoryIndex = 'index.html';
    if (!shouldRespond && directoryIndex) {
      url = addDirectoryIndex(url, directoryIndex);
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond is still false, check to see if this is a navigation
    // request, and if so, whether the URL matches navigateFallbackWhitelist.
    var navigateFallback = '';
    if (!shouldRespond &&
        navigateFallback &&
        (event.request.mode === 'navigate') &&
        isPathWhitelisted([], event.request.url)) {
      url = new URL(navigateFallback, self.location).toString();
      shouldRespond = urlsToCacheKeys.has(url);
    }

    // If shouldRespond was set to true at any point, then call
    // event.respondWith(), using the appropriate cache key.
    if (shouldRespond) {
      event.respondWith(
        caches.open(cacheName).then(function(cache) {
          return cache.match(urlsToCacheKeys.get(url)).then(function(response) {
            if (response) {
              return response;
            }
            throw Error('The cached response that was expected is missing.');
          });
        }).catch(function(e) {
          // Fall back to just fetch()ing the request if some unexpected error
          // prevented the cached response from being valid.
          console.warn('Couldn\'t serve response for "%s" from cache: %O', event.request.url, e);
          return fetch(event.request);
        })
      );
    }
  }
});







