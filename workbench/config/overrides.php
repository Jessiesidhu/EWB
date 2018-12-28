<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
// THIS FILE IS INTENDED FOR ADVANCED ADMINS ONLY TO OVERRIDE THE ARRAYS OR COMPONENT OF ARRAYS IN
// THE defaults.php FILE WITH CUSTOMIZATIONS TO APPLY TO ALL YOUR WORKBENCH USERS.
//
// THIS IS NOT TO BE CONFUSED WITH THE overrideable BOOLEAN FLAG WITHIN THE CONFIGURATIONS TO ALLOW
// END USERS TO CUSTOMIZE IN SETTINGS. SEE defaults.php FOR DETAILS.
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// EXAMPLE: $config["fuzzyServerUrlLookup"]["default"] = false;


// OAUTH 2.0 SETTINGS
// Uncomment and populate with keys and secrets to enable OAuth.
// Note, Production and Sandbox can have the same key and secret, but it is not required
// If connecting to other Salesforce environments, add a new entry to the array:
//
$config["oauthConfigs"]["default"] = array(
                                           "login.salesforce.com" => array(
                                                "label" => "Production",
                                                "key" => "3MVG9YDQS5WtC11rQqBGd4vcYz2QWmsjj6rFs6fdbj.rbhl3rlorKuiQIogky6VM_l9b8UhJoSh5Rk_hq3ucU",
                                                "secret" => "2773208456480824858"
                                            ),
                                            "test.salesforce.com" => array(
                                                "label" => "Sandbox",
                                                "key" => "3MVG9YDQS5WtC11rQqBGd4vcYz2QWmsjj6rFs6fdbj.rbhl3rlorKuiQIogky6VM_l9b8UhJoSh5Rk_hq3ucU",
                                                "secret" => "2773208456480824858"
                                            )
                                        );


// CSRF SECURITY SETTINGS
// Uncomment and change the value below to a random, secret value:
//
 //$config["csrfSecret"]["default"] = "CHANGE_ME";
 $config["csrfSecret"]["default"] = "2773208456480824858";

// ORG ID WHITELIST / BLACKLIST
// To only allow access to a set of orgs or block access to particular orgs,
// uncomment and add the orgs to the respective lists below as comma-separated values:
//
// $config["orgIdWhiteList"]["default"] = "00D000000000001, 00D000000000002";
// $config["orgIdBlackList"]["default"] = "00D000000000003";
// added custom code here
$config["oauthRequired"]["default"] = true;



//Configure Workbench to use Redis. Add this line to your config/overrides.php file and change the Redis URL as needed:
//$config\["redisUrl"\]\["default"\] = "redis://localhost:6379";
//Start the background workers by running this script (only been tested on Ubuntu Linux). Note, the max number of workers can be set with the MAX_WORKERS environment variable.
//async_workers.sh

//$config["redisUrl"]["default"] = "redis://redis-15139.c114.us-east-1-4.ec2.cloud.redislabs.com:15139";
$config["redisUrl"]["default"] = "redis://localhost:6379";

?>