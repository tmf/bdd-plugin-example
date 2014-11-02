<?php
/*
Plugin Name:       BDD Plugin Example
Plugin URI:        http://github.com/tmf/bdd-plugin-example
Description:       An example on how to use Behat and Behavior Driven Development in a WordPress plugin
Version:           1.0
Author:            Tom Forrer
Author URI:        http://github.com/tmf
Text Domain:       bdd-plugin-example
License:           MIT

Copyright (c) 2013 Tom Forrer
Permission is hereby granted, free of charge, to any person obtaining a copy of this
software and associated documentation files (the "Software"), to deal in the Software
without restriction, including without limitation the rights to use, copy, modify, merge,
publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons
to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies
or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE
FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
DEALINGS IN THE SOFTWARE.
 */

add_action('admin_notices', function(){
    echo '<div class="updated"><p id="bdd">BDD is awesome!</p></div>';
});