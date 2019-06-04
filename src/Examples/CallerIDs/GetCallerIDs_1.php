<?php

/**
 * @method GetCallerIDs Gets the account callerIDs.
 */

// Path to your autoload.php
require_once '/path/to/vendor/autoload.php';

use Voximplant\VoximplantApi;
use Voximplant\Resources\Params\GetCallerIDsParams;

/**
 * In order to use Voximplant PHP SDK, you need the following:
 * 1. A developer account. If you don't have one, sign up here https://voximplant.com/sign-up/.
 * 2. A private API key. To create it, call the [CreateKey] method. Save the result value in a file.
 */

// Create API Object
$voxApi = new VoximplantApi('path/to/private/api/key.json');

/**
 * @param array $params (See below)
 * count - The max returning record count.
 */
$params = new GetCallerIDsParams();

$params->count = 2;

// Get the two callerIDs.
$result = $voxApi->CallerIDs->GetCallerIDs($params);

// Show result
var_dump($result);