<?php
/**
 * @autor     Tom Forrer <tom.forrer@gmail.com>
 * @copyright Copyright (c) 2014 Tom Forrer (http://github.com/tmf)
 */

namespace Tmf\PluginExample\Features\Context;

use \Behat\Behat\Context\SnippetAcceptingContext;
use \Behat\MinkExtension\Context\MinkContext;
use Tmf\WordPressExtension\Context\WordPressContext;


/**
 * Class PluginFeatureContext
 *
 * @package Tmf\PluginExample\Features\Context;
 */
class PluginFeatureContext extends WordPressContext implements SnippetAcceptingContext
{

}