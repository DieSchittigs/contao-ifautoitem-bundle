<?php

/**
 * SttgsIfAutoItem Modules Set
 *
 * Copyright (c) 2017 Die Schittigs
 *
 * @license LGPL-3.0+
 */



/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getContentElement'][] = array('DieSchittigs\\SttgsIfautoitem\\ifautoitemClass', 'autoitemStatus');
