<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * Instantiate the test suite, gather test directories and files.
 *
 * PHP version 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by
 * applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS
 * OF ANY KIND, either express or implied. See the License for the specific
 * language governing permissions and limitations under the License.
 *
 * @package     omeka
 * @subpackage  theplugin
 * @author      Organization <>
 * @author      Author McAuthor <author.mcauthor@virginia.edu>
 * @copyright   2010 The Board and Visitors of the University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html Apache 2 License
 * @version     $Id$
 * @link        http://omeka.org/add-ons/plugins/FedoraConnector/
 * @tutorial    tutorials/omeka/FedoraConnector.pkg
 */
?>

<?php

require_once 'ThePlugin_Test_AppTestCase.php';

class ThePlugin_AllTests extends PHPUnit_Framework_TestSuite
{

    /**
     * This constructs the test suite for the FedoraConnector plugin.
     *
     * @return PHPUnit_Runner_IncludePathTestCollector The test suites.
     */
    public static function suite() {

        $suite = new ThePlugin_AllTests('ThePlugin Tests');

        $testCollector = new PHPUnit_Runner_IncludePathTestCollector(
            array(
                dirname(__FILE__) . '/integration',
                dirname(__FILE__) . '/unit'
            )
        );

        $suite->addTestFiles($testCollector->collectTests());

        return $suite;

    }

}

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */

?>
