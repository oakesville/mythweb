<?php
/**
 * Should contain one variable, a hash of the 'advanced' searches.
 * Each of these searches will show up as an advanced search
 *
 * @license     GPL
 *
 * @package     MythWeb
 *
 **/

$Canned_Searches = array(

     t('Horror Movies of the Thirties and Forties')
         => 'category_type="movie"
              AND (program.category="Horror" or program.category="Suspense" or program.category="Mystery")'
           .' AND (program.airdate like "193%" or program.airdate like "194%")',

     t('Pre-Code Movies')
         => 'category_type="movie"'
           .' AND program.airdate < "1935"',

    );
