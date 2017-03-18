A3M
===
[![Join the chat at https://gitter.im/donjakobo/A3M](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/donjakobo/A3M?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

A3M (Account Authentication & Authorization) is a CodeIgniter 2.x and 3-dev package that leverages bleeding edge web technologies
like OpenID and OAuth to create a user-friendly user experience. It gives you the CRUD to get working right away
without too much fuss and tinkering! Designed for building webapps from scratch without all that tiresome
login / logout / admin stuff thats always required.

## Original Authors

**Jakub** [@kubanishku](https://twitter.com/kubanishku/)
**PengKong** [@pengkong](https://github.com/pengkong)

## Key Features & Design Goals

* Native Sign Up, Sign In with 'Remember me' and Sign Out
* Native account Forgot Password and Reset Password
* Facebook/Twitter/Google/Yahoo/OpenID Sign Up, Sign In and Sign Out
* Manage Account Details, Profile Details and Linked Accounts
* reCAPTCHA Support, SSL Support, Language Files Support
* Gravatar support for picture selection (via account profile)
* Create a painless user experience for sign up and sign in
* Create code that is easily understood and re-purposed
* Utilize Twitter Bootstrap 3 (a fantastic CSS / JS library)
* Graceful degradation of JavaScript and CSS
* Proper usage of CodeIgniter's libraries, helpers and plugins
* Easily Configurable via config file

## Folder structure  

* `/application/` - what you should be editing / creating in
* `/system/` - default CodeIgniter system folder (don't touch!)
* `/resource/` - css / images / javascript (folder configurable via `constants.php`)
* `/user_guide/` - latest guide for CI (can be deleted, just for CI reference)

## 3rd Party Libraries & Plugins

* [recaptcha_pi.php](http://code.google.com/p/recaptcha/) - recaptcha-php-1.11
* [HybridAuth](https://github.com/hybridauth/hybridauth/) - v.2.2.1
* [phpass_pi.php](http://www.openwall.com/phpass/) - Version 0.3 / genuine _(latest)_
* [gravatar.php](https://github.com/rsmarshall/Codeigniter-Gravatar) - codeigniter (6/6/2014) rls

## Dependencies

* PHP 5.3
* CURL
* DOM or domxml
* GMP or Bcmatch

## Installation Instructions
Check out our wiki: https://github.com/donjakobo/A3M/wiki/Installation-Instructions
for help on getting started.

## Help and Support  
* Found a bug? Try forking and fixing it.
* Open an issue if you want to discuss/highlight it
* Go to StackOverflow under the tag `codeigniter-a3m` http://stackoverflow.com/questions/tagged/codeigniter-a3m if you have implementation issues (installation problems, etc;)
