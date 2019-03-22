<?php

/**
 * Copyright (c) 2016, Skalfa LLC
 * All rights reserved.
 *
 * ATTENTION: This commercial software is intended for use with Oxwall Free Community Software http://www.oxwall.com/
 * and is licensed under Oxwall Store Commercial License.
 *
 * Full text of this license can be found at http://developers.oxwall.com/store/oscl
 */

$pluginKey = 'skmobileapp';

$billingService = BOL_BillingService::getInstance();
$billingService->deleteGateway($pluginKey);

// delete preferences
BOL_PreferenceService::getInstance()->deleteSection($pluginKey . '_pushes');
BOL_PreferenceService::getInstance()->deletePreference($pluginKey . '_new_matches_push');
BOL_PreferenceService::getInstance()->deletePreference($pluginKey . '_new_messages_push'); 
