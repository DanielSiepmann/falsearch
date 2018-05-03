<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "falsearch".
 *
 * Auto generated 02-03-2015 11:12
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'CAB FAL search',
    'description' => 'Adds a file search box that allows the user to search through the files/folders recursively.',
    'category' => 'be',
    'version' => '0.2.1',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Nils Blattner, Tizian Schmidlin, Lavinia Negru',
    'author_email' => 'nb@cabag.ch, st@cabag.ch, ln@cabag.ch',
    'author_company' => '',
    'constraints' =>
    array (
        'depends' =>
        array (
            'typo3' => '7.6.0-8.7.99',
        ),
        'conflicts' =>
        array (
        ),
        'suggests' =>
        array (
        ),
    ),
);
